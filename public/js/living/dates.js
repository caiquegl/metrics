
const diasSemanaAbreviados = ['dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab'];
const calendario = document.getElementById('calendario');
const refresh = document.getElementById('refresh-on');
let dataAtual = new Date();
let diaAtual = new Date();
let dataSelecionadaInicio = null;
let dataSelecionadaFim = null;
let objDatas = {}
let dateIniInput = document.getElementById('dateIni');
let dateEndInput = document.getElementById('dateEnd');
let evt = new Event("input", { bubbles: true });
let editForm = false

document.addEventListener('livewire:navigated', () => {
    console.log('loaded')
    if (calendario != undefined) {
        atualizarCalendario();
    }
})


document.addEventListener('livewire:file', () => {
    console.log('Componente Livewire carregado');
})

function limparDatas() {
    dataSelecionadaInicio = null;
    dataSelecionadaFim = null;

    atualizarCalendario()

    refresh.style.display = "none"
}

function formatarData(data) {
    if (data) {
        const ano = data.getFullYear();
        const mes = String(data.getMonth() + 1).padStart(2, '0');
        const dia = String(data.getDate()).padStart(2, '0');
        return `${ano}-${mes}-${dia}`;
    }
    return '';
}

function atualizarCalendario() {

    calendario.innerHTML = '';

    const primeiroDiaDoMes = new Date(dataAtual.getFullYear(), dataAtual.getMonth(), 1).getDay();
    const ultimoDiaDoMes = new Date(dataAtual.getFullYear(), dataAtual.getMonth() + 1, 0).getDate();
    const dias = document.querySelectorAll('.dia');

    diasSemanaAbreviados.forEach(diaSemana => {
        const diaSemanaElemento = document.createElement('div');
        diaSemanaElemento.textContent = diaSemana;
        calendario.appendChild(diaSemanaElemento);
    });

    for (let i = 0; i < primeiroDiaDoMes; i++) {
        calendario.appendChild(document.createElement('div'));
    }

    dias.forEach(diaElemento => {
        diaElemento.classList.remove('active-date');
    });

    for (let dia = 1; dia <= ultimoDiaDoMes; dia++) {
        const dataSelecionadaInicioFormatada = formatarData(dataSelecionadaInicio);
        const dataAtualFormatada = formatarData(new Date(dataAtual.getFullYear(), dataAtual.getMonth(), dia));
        const diaElemento = document.createElement('div');
        const dataSelecionadaFimFormatada = formatarData(dataSelecionadaFim);

        diaElemento.setAttribute('data-day', dia);
        diaElemento.classList.add('dia');
        diaElemento.textContent = dia;

        if(!editForm) {
            if (String(diaAtual.getDate()).padStart(2, '0') > dia && diaAtual.getMonth() <= dataAtual.getMonth() && !editForm) {
                diaElemento.classList.add('default-date');
            }
            if (formatarData(dataAtual) >= formatarData(diaAtual)) {
                if (dataSelecionadaInicio && dataSelecionadaFim) {
    
                    if (String(diaAtual.getDate()).padStart(2, '0') > String(dia).padStart(2, '0') && diaAtual.getMonth() <= dataAtual.getMonth()) {
                        diaElemento.classList.add('default-date');
                    } else {
                        if (dataAtualFormatada >= dataSelecionadaInicioFormatada && dataAtualFormatada <= dataSelecionadaFimFormatada) {
                            diaElemento.classList.add('active-date');
                        }
                    }
                } else if (dataSelecionadaInicio) {
                    if (dataAtualFormatada === dataSelecionadaInicioFormatada) {
                        if (String(diaAtual.getDate()).padStart(2, '0') > dia && diaAtual.getMonth() <= dataAtual.getMonth()) {
                            diaElemento.classList.add('default-date');
                        } else {
                            diaElemento.classList.add('active-date');
                        }
                    }
                }
            }else {
                diaElemento.classList.add('default-date');
            }
        }else {
            if (dataSelecionadaInicio && dataSelecionadaFim) {
                if (dataSelecionadaInicio) { 
                    if (dataAtualFormatada === dataSelecionadaInicioFormatada) {
                        diaElemento.classList.add('active-date');
                    }
                }
                if (dataAtualFormatada >= dataSelecionadaInicioFormatada && dataAtualFormatada <= dataSelecionadaFimFormatada) {
                    diaElemento.classList.add('active-date');
                }

            }
        }

        diaElemento.addEventListener('click', function () {
            selecionarDia(dia);
        });

        calendario.appendChild(diaElemento);
    }


    //document.querySelector('.range').innerHTML = `${formatarData(dataSelecionadaInicio)} - ${formatarData(dataSelecionadaFim || dataSelecionadaInicio)}`;
    if (dataSelecionadaInicio) {
        dateIniInput.value = dataSelecionadaInicio.toISOString().substring(0, 10)
        dateEndInput.value = !dataSelecionadaFim ? dataSelecionadaInicio.toISOString().substring(0, 10) : dataSelecionadaFim.toISOString().substring(0, 10)
        
        dateIniInput.dispatchEvent(evt);
        dateEndInput.dispatchEvent(evt);
        
        refresh.style.display = "flex"
    }
    

    const mesAnoElemento = document.getElementById('mesAno');
    mesAnoElemento.textContent = `${dataAtual.toLocaleString('default', { month: 'long' })} ${dataAtual.getFullYear()}`;
}

function selecionarDia(dia) {
    const valorDoDia = document.querySelector(`[data-day="${dia}"]`);
    const dataClicada = new Date(dataAtual.getFullYear(), dataAtual.getMonth(), dia);

    if (!valorDoDia.classList.contains('default-date')) {
        if (!dataSelecionadaInicio) {
            dataSelecionadaInicio = dataClicada;
            dataSelecionadaFim = null;
        } else {
            if (dataClicada >= dataSelecionadaInicio) {
                dataSelecionadaFim = dataClicada;
            } else {
                dataSelecionadaInicio = dataClicada;
                dataSelecionadaFim = null;
            }
        }
    }

    atualizarCalendario();
}

function mudarMes(mes, meuMes = null) {
    if (mes) {
        dataAtual.setMonth(dataAtual.getMonth() + mes);
    } else {
        dataAtual = new Date(meuMes.ano, meuMes.mes - 1, 1);
    }
    atualizarCalendario();
}

function processarEntradas(entradas) {
    entradas.getEntries().forEach(entry => {
        // Verificar se a requisição está na rota específica
        if (entry.name.includes('/livewire/update')) {
            if(calendario != undefined) {
                return  atualizarCalendario()
            }
            return onloadBeerAnimation()
        }
    });
}

const observer = new PerformanceObserver(processarEntradas);

observer.observe({
    entryTypes: ['resource']
});