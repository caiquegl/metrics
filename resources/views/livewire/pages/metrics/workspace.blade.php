<div>
    <div style="display: flex; box-sizing: border-box">
    @livewire('components.metrics.sidebar')
        <div class="container-page-85">
        {{-- <div style="width: 85vw;"> --}}
            @livewire('components.metrics.header')
            @livewire('components.metrics.breadcump', ['title' =>  'Minha Área'])
            <div class="c-fluid">
                <div class="row-flex py-3">
                    <div class="x-50">
                        <div class="top-card" data-anime-popup  data-pop="slide">
                            @livewire('components.metrics.card-chart', [
                                'title' => 'VENDAS BALCÃO',
                                'value' => '3250',
                                'idChart' => 'chart1'

                            ])
                            @livewire('components.metrics.card-chart', [
                                'title' => 'VENDAS BALCÃO',
                                'value' => '7350',
                                'background' => 'linear-gradient(239deg, #0D6094 0%, #07304A 100%)',
                                'reverse' => true,
                                'idChart' => 'chart2'

                            ])
                            @livewire('components.metrics.card-progress-horizontal')
                            @livewire('components.metrics.card-chart', [
                                'title' => 'VENDAS BALCÃO',
                                'value' => '3250',
                                'background' => ' linear-gradient(139deg, rgb(8, 122, 7), rgb(4, 62, 4), rgb(4, 61, 4))',
                                'idChart' => 'chart3'

                            ])
                        </div>
                    </div>
                    <div class="x-50">
                        <div class="top-card">
                            <div class="progress-card" data-anime-popup  data-pop="high">
                                @livewire('components.metrics.card-progress-circular', [
                                    'title' => 'Meta Geral',
                                    'value' => '65',
                                    'title1' => 'Base',
                                    'value1' => 'R$ 12.450',
                                    'title2' => 'Atual',
                                    'value2' => 'R$ 7.550',
                                ])
                            </div>
                            <div class="progress-card" data-anime-popup  data-pop="high">
                                @livewire('components.metrics.card-progress-circular',  [
                                    'title' => 'Meta Heineken',
                                    'value' => '50',
                                    'title1' => 'Base',
                                    'value1' => '310',
                                    'title2' => 'Atual',
                                    'value2' => '78',
                                    'color2' => '#FDA240',
                                    'color_chart' => 'chart-green'
                                ])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-flex py-3">
                    <div class="top-card direction-column gap-0" data-anime-popup  data-pop="fade">
                        
                            <div class="left-container border-right-0">
                                <canvas id="chart4" class="chart5"></canvas>
                            </div>
                        
                        
                            <div class="right-container5">
                                <div class="right-content5">
                                    <div class="divide">
                                        <div>
    
                                            <h3 class="font-s-book-rgular">Visão Geral </h3>
                                            <h3 class="font-s-book-rgular">(atualizada em 01/08/2023)</h3>
                                        </div>
                                        <div>
                                            <h5 style="height: 20px" class="font-s-book-rgular">Unidades vendidas</h5>
                                            <h1 data-unid-counter="64" class="font-s-book-bold">00</h1>
                                        </div>
                                    </div>
                                    <div class="divide2">
                                        <div>
                                            <div class="flex">
                                                <h4 style="height: 20px" class="font-s-book-rgular">Pontos acumulados</h4>
                                                <i class="far fa-star ocult-desktop"></i>
                                            </div>
                                            <div style="display: flex; align-items: center;">
    
                                                <img src="{{ asset('icon/metrics/Grupo 101.svg') }}" style="height: 30px; margin-right: 15px;" class="ocult-mobile"/><h1 data-unid-counter="7550" class="font-s-book-bold"> <img src="{{ asset('icon/metrics/Grupo 90.svg') }}" />00</h1>
                                            </div>
                                        </div>
                                        <div>
    
                                            <p class="font-s-book-rgular"><span class="font-s-book-bold">Continue assim!</span> Em breve teremos campanha de 150 anos de Heineken com muitas promoções!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>

                <div class="c-fluid">
                    <section class="next-stage">
                        <div class="rows">
                            <div class="next-title">
                                <h3 class="tt-campaigns font-s-book-rgular">
                                    Próximas campanhas
                                </h3>
                            </div>
                            <div class="scrolling-carousel" 
                            data-anime-popup  
                            data-pop="slide" 
                            data-perfect-scroll="true"
                            id="campanhas">
                                <!-- Card 01 start --> 
                                <div class="card-stage" data-perfect-item data-anime-popup  data-pop="high">
                                    <div class="card-body">
                                        <div class="book">
                                            <div class="row">
                                                <span class="dialog">
                                                    <h1 class="font-s-book-bold">10</h1>
                                                </span>
                                                <span class="dialog">
                                                    <h4 class="font-s-book-rgular">Dia do Rock</h4>
                                                    <p class="font-s-book-rgular">10/06/2023</p>
                                                </span>
                                            </div>
                                            <div class="row">
                                                <div class="brand">
                                                    <p class="font-s-book-rgular">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="client">
                                                    <span class="collapse orange">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </span>
                                                    <p class="client-name font-s-book-rgular">Heineken, Amstel, Eisenbahn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 01 end --> 
                                
                                <!-- Card 02 start --> 
                                <div class="card-stage" data-perfect-item data-anime-popup  data-pop="high">
                                    <div class="card-body">
                                        <div class="book">
                                            <div class="row">
                                                <span class="dialog">
                                                    <h1 class="text-cyan font-s-book-bold">14</h1>
                                                </span>
                                                <span class="dialog">
                                                    <h4 class="font-s-book-rgular">Oktoberfest</h4>
                                                    <p class="font-s-book-rgular">14/10/2023</p>
                                                </span>
                                            </div>
                                            <div class="row">
                                                <div class="brand">
                                                    <p class="font-s-book-rgular">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="client">
                                                    <span class="collapse cyan">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </span>
                                                    <p class="client-name font-s-book-rgular">Heineken e Craft</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 02 end --> 

                                <!-- Card 03 start --> 
                                <div class="card-stage" data-perfect-item data-anime-popup  data-pop="high">
                                    <div class="card-body card-royal-green">
                                        <div class="book">
                                            <div class="row">
                                                <span class="dialog">
                                                    <h1 class="text-white font-s-book-bold">15</h1>
                                                </span>
                                                <span class="dialog">
                                                    <h4 class="text-white font-s-book-rgular">Heineken 150 anos</h4>
                                                    <p class="text-white font-s-book-rgular">15/11/2023</p>
                                                </span>
                                            </div>
                                            <div class="row">
                                                <div class="brand">
                                                    <p class="text-white font-s-book-rgular">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="client">
                                                    <span class="collapse white">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </span>
                                                    <p class="client-name text-white font-s-book-rgular">Heineken</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 03 end -->
                                
                                <!-- Card 04 start --> 
                                <div class="card-stage" data-perfect-item data-anime-popup  data-pop="high">
                                    <div class="card-body">
                                        <div class="book">
                                            <div class="row">
                                                <span class="dialog">
                                                    <h1 class="font-s-book-bold">19</h1>
                                                </span>
                                                <span class="dialog">
                                                    <h4 class="font-s-book-rgular">Champions League</h4>
                                                    <p class="font-s-book-rgular">19/11/2023</p>
                                                </span>
                                            </div>
                                            <div class="row">
                                                <div class="brand">
                                                    <p class="font-s-book-rgular">Lorem ipsum dolor sit amet, consectetur adipiscing elit.London</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="client">
                                                    <span class="collapse orange">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </span>
                                                    <p class="client-name font-s-book-rgular">Heineken</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Card 04 end --> 
                            </div>
                            <section class="section-controller-carousel pos-relative">
                                <button class="arrow-left" data-perfect-action="left" data-perfect-ref="#campanhas">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="arrow-right" data-perfect-action="right" data-perfect-ref="#campanhas">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </section>
                        </div>
                    </section>
                </div>
                <div class="c-fluid">
                    @livewire('components.metrics.footer')
                </div>
            </div>
        </div>    
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script>
    const ctx = document.getElementById('chart1');
    const ctx2 = document.getElementById('chart2');
    const ctx3 = document.getElementById('chart3');
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

    let pointRadius1 = [0,0,2,0,0,0,0]
    let labels1 = ['Red','Blue','Yellow','Blue','Yellow','Blue','Yellow']
    let data1 = [10,20,25,19,25,20,32]
    let data2 = [10,18,20,11,20,10,22]
    let pointImage = new Image(25,25)
    pointImage.src = 'https://cdn-icons-png.flaticon.com/128/8539/8539511.png'
    let config4 = { 
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
                    display: true,
                    text: 'Visão Geral',
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
        label: 'My First Dataset',
        data: data1,
        fill: false,
        borderColor: 'rgb(65,146,196)',
        backgroundColor: 'rgb(65,146,196)',
        borderWidth: 3.5
    },
    {
        label: 'My First Dataset',
        data: data2,
        fill: false,
        borderColor: 'rgb(5,77,123)',
        backgroundColor: 'rgb(5,77,123)',
        borderWidth: 3.5
    }]
    } 



    new Chart(ctx, {
    type: 'line', options: config,data:data_config

    });
    new Chart(ctx2, {
    type: 'line', options: config,data:data_config

    });
    new Chart(ctx3, {
    type: 'line', options: config,data:data_config

    });
    new Chart(ctx4, {
    type: 'line', options: config4,data:data_config4

    });
</script>
