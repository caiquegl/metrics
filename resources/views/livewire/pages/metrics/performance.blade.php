
<div style="display: flex; box-sizing: border-box">
    @livewire('components.metrics.sidebar')
    <div class="container-page-85">
        @livewire('components.metrics.header')
        @livewire('components.metrics.breadcump', ['title' =>  'Performance'])
        <div class="rows">
            <div class="container-filter-produtos-items" style="margin-bottom: 20px;">
                <select class="font-s-book-rgular">
                    <option>Selecionar loja</option>
                </select>
            </div>
            <div>
                <div class="top-card" data-anime-popup  data-pop="high">
                    <div class="left-container p-chart-perfomance">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <p class="txt-perf font-s-book-rgular">FATURAMENTO/R$</p>
                            <div class="flex-chart-perfomanc">
                                <div>
                                    <p  class="flex-chart-perfomanc-text font-s-book-rgular">Total/R$</p>
                                    <p class="flex-chart-perfomanc-text-big font-s-book-rgular">R$8,456.87</p>
                                </div>
                                <div>
                                    <p class="flex-chart-perfomanc-text font-s-book-rgular">Vendas Diárias</p>
                                    <p class="flex-chart-perfomanc-text-big font-s-book-rgular">R$267.87</p>
                                </div>
                                <div>
                                    <p class="flex-chart-perfomanc-text font-s-book-rgular">(24) Volume</p>
                                    <p class="flex-chart-perfomanc-text-big font-s-book-rgular">16,649,871 UND</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <canvas id="chart" class="chart5"></canvas>
                        </div>
                        <div style="width: 100%">
                            <input style="width: 100%" type="range" id="vol" name="vol" min="0" max="100">
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="preformance-table">
                <p class="font-s-book-rgular">
                    Atividade por Loja
                </p>
                <p class="font-s-book-rgular light-titel-p">
                    Performance semestral
                </p>
                <div class="max-table">                    
                    @livewire('components.metrics.tabelaLivewire', [
                        'colunas' => ['Loja', 'Atualização', 'Valor', 'Status'],
                        'dados' => [
                            ['Loja' =>  'Itaim', 'Atualização' => '30', 'Valor' => 'teste1@example.com',  'Status' => [
                                "render" => 'Acima Meta',
                                "type" => 'status',
                                "color" => '#71D875'
                            ],],
                            ['Loja' => 'teste1', 'Atualização' => '30', 'Valor' => 'teste1@example.com',  'Status' => 'Acima Meta'],
                            ['Loja' => 'teste1', 'Atualização' => '30', 'Valor' => 'teste1@example.com',  'Status' => 'Acima Meta'],
                        ],
                    ])
                </div>
            </div>
        </div>
        @livewire('components.metrics.footer')
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script>


const ctx = document.getElementById('chart');


    let pointRadius1 = [0,0,0,0,0,0,0,0,0,0,0,0,1]
    let labels = ['Red','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow']
    let data1 = [20,10,25,17,25,11,32,10,25,17,25,11,32,10,25,17,25,11,32]
    let data2 = [10,20,15,22,20,22,3,20,15,22,20,22,3,20,15,22,20,22,3]
    
    let pointImage = new Image(25,25)
    pointImage.src = 'https://cdn-icons-png.flaticon.com/128/8539/8539511.png'
    let config = { 
        tension: 0.3,
        pointRadius:pointRadius1,
        hoverPointRadius:4,
        responsive: true,
        elements:{
            point:{
                pointStyle:[pointImage]
            }
        },
        maintainAspectRatio: false,
        
            plugins: {
                title: {
                    display: false,
                    text: 'Visão Geral',
                    align:'start',
                    font: {
                            size: 25
                        }
                },
                legend: {
                    display: false,
                    position: 'top',
                    align: 'end',
                    labels:{
                        useBorderRadius: true,
                        borderRadius: 5,
                        boxHeight:5,
                        boxWidth:5,
                        textAlign: 	'right',
                        padding: 15
                    }
                }
            }, scales: {
        x: {border: {
            display: false
            },
            grid:{display:false}
        },
        y: { 
            border: {
            display: false
            }
        }}}
    let  data_config = {
    labels: labels,
    datasets: [{
        label: 'My First Dataset',
        data: data1,
        type: 'line',
        fill: false,
        borderColor: 'rgb(65,146,196)',
        backgroundColor: 'rgb(65,146,196)',
        borderWidth: 3.5
    },
    {
        label: 'My First Dataset',
        data: data2,
        type: 'bar',
        fill: false,
        borderColor: 'rgb(5,77,123)',
        backgroundColor: 'rgb(5,77,123)',

    }]
    } 

    new Chart(ctx, {
     options: config,data:data_config

    });

</script>