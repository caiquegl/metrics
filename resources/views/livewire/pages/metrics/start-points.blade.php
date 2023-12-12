
<div style="display: flex; box-sizing: border-box">
    @livewire('components.metrics.sidebar')
    <div class="container-page-85">
        @livewire('components.metrics.header')
        @livewire('components.metrics.breadcump', ['title' =>  'StarPoints'])
        <div class="rows">

            <div class="list-card-points ocult-desktop" data-perfect-scroll="true">
                @livewire('components.metrics.cardPoints', [
                    'title' => 'Total de vendas',
                    'value' => 'R$25.000',
                    'icon' => 'Grupo 97.svg',
                    ])

                @livewire('components.metrics.cardPoints', [
                    'title' => 'Nº de Pedidos',
                    'value' => '4500',
                    'icon' => 'Grupo 99.svg',
                    'counter' => 'data-unid-counter'
                    ])

                @livewire('components.metrics.cardPoints', [
                    'title' => 'Pontos acumulados',
                    'value' => '55.250',
                    'icon' => 'Grupo 101.svg',
                    'bgColor' => 'transparent linear-gradient(112deg, #12C712 0%, #008200 100%) 0% 0% no-repeat padding-box;'
                    ])

                @livewire('components.metrics.cardPoints', [
                    'title' => 'Qtde. Ítens',
                    'value' => '325',
                    'icon' => '047-beer.svg',
                    'counter' => 'data-unid-counter'
                    ])
            </div>
            <div class="list-card-points scrolling-carousel ocult-mobile" data-perfect-scroll="true">
                @livewire('components.metrics.cardPoints', [
                    'title' => 'Total de vendas',
                    'value' => 'R$25.000',
                    'icon' => 'Grupo 97.svg',
                    ])

                @livewire('components.metrics.cardPoints', [
                    'title' => 'Nº de Pedidos',
                    'value' => '4500',
                    'icon' => 'Grupo 99.svg',
                    'counter' => 'data-unid-counter'
                    ])

                @livewire('components.metrics.cardPoints', [
                    'title' => 'Pontos acumulados',
                    'value' => '55.250',
                    'icon' => 'Grupo 101.svg',
                    'bgColor' => 'transparent linear-gradient(112deg, #12C712 0%, #008200 100%) 0% 0% no-repeat padding-box;'
                    ])

                @livewire('components.metrics.cardPoints', [
                    'title' => 'Qtde. Ítens',
                    'value' => '325',
                    'icon' => '047-beer.svg',
                    'counter' => 'data-unid-counter'
                    ])
            </div>
            <div class="left-container" data-anime-popup  data-pop="slide">
              
                    <canvas id="chart4" class="chart5"></canvas>
              
            </div>
            <div class="container-filter-points">
                <div class="container-filter-points-items">
                    <p>Categoria</p>
                    <select>
                        <option>Todas</option>
                    </select>
                </div>
                <div class="container-filter-points-items">
                    <p>Filtrar por:</p>
                    <select>
                        <option>Últimos 30 dias</option>
                    </select>
                </div>
            </div>
            @livewire('components.metrics.tabelaLivewire', [
                'colunas' => ['Nome do Produto', 'Qtde.', 'Data início', 'Preço', 'Status'],
                'dados' => [
                    ['Nome do Produto' =>  [
                        "render" => htmlspecialchars('<div><p class="font-s-book-rgular">Heineken (long-neck)</p><p class="font-s-book-rgular">330ML</p></div>'),
                        "type" => 'html'
                    ] , 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => [
                        "render" => 'Acima Meta',
                        "type" => 'status',
                        "color" => '#71D875'
                    ],],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => [
                        "render" => Carbon::now(),
                        "type" => 'date'
                    ], 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste1', 'Qtde.' => '30', 'Data início' => 'teste1@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                    ['Nome do Produto' => 'teste2', 'Qtde.' => '25', 'Data início' => 'teste2@example.com', 'Preço' => 'R$12,00', 'Status' => 'Acima Meta'],
                ],
            ])
        </div>
        @livewire('components.metrics.footer')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script>

const ctx4 = document.getElementById('chart4');

let pointRadius = [0,0,0,0,0,0,0,0,3]
let labels = ['Red','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow','Blue','Yellow']
let data = [65, 59, 80, 81, 56, 55, 60, 59, 80, 81, 56, 55, 40]
let config = { 
    tension: 0.4,
    pointRadius:pointRadius,
    hoverPointRadius:4,
    responsive: true,
    maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        }, scales: {
    x: {
        display:false,
        
    },
    y: {
        display:false
    }}}
let  data_config = {
labels: labels,
datasets: [{
    label: 'My First Dataset',
    data: data,
    fill: false,
    borderColor: 'rgb(255, 255, 255)',
    borderWidth: 2
}]
} 

let pointRadius1 = [0,0,4,0,0,0,0]
let labels1 = ['Red','Blue','Yellow','Blue','Yellow','Blue','Yellow']
let data1 = [20,10,25,17,25,11,32]
let data2 = [10,20,15,22,20,22,3]

let config4 = { 
    tension: 0.3,
    pointRadius:pointRadius1,
    hoverPointRadius:4,
    responsive: true,
    elements:{
    },
    maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text: 'Total de Produtos vendidos',
                align:'start',
                font: {
                        size: 25
                    }
            },
            legend: {
                display: true,
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
let  data_config4 = {
labels: labels1,
datasets: [{
    label: 'Mês atual',
    data: data1,
    fill: false,
    borderColor: 'rgb(65,146,196)',
    backgroundColor: 'rgb(65,146,196)',
    borderWidth: 3.5
},
{
    label: 'Mês anterior',
    data: data2,
    fill: false,
    borderColor: 'rgb(5,77,123)',
    backgroundColor: 'rgb(5,77,123)',
    borderWidth: 3.5
}]
} 

new Chart(ctx4, {
type: 'line', options: config4,data:data_config4

});
</script>
