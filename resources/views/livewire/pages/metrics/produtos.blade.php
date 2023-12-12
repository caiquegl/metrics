
<div style="display: flex; ">
    @livewire('components.metrics.sidebar')
    <div class="container-page-85">
        @livewire('components.metrics.header')
        @livewire('components.metrics.breadcump', ['title' =>  'Produtos'])
        <div class="rows" >
            <div class="container-filter-produtos-items" style="margin-bottom: 20px;">
                <select class="font-s-book-rgular">
                    <option>Selecionar produto</option>
                </select>
            </div>
            <div class="top-card-4">
               
                    <div class="card-product-chart-4" data-anime-popup  data-pop="high">
                        <div style="height: 100%;width:100%;background-color: white;color:#464A53;border-radius: 9px;overflow:hidden"> 
                            <div style="display: flex;margin:25px">
                                <div style="flex:1">
                                    <h4>Total Vendas</h4>
                                    <div style="display: flex; align-items: center;">
                                        <h1 style="font-size: 23px; margin-bottom: 16px;">75%</h1>
                                        <i style="margin: 0 5px 0 10px; color: #71D875" class="fas fa-arrow-up"></i>
                                        <i style="color: #FF5274" class="fas fa-arrow-down"></i>
                                    </div>
                                </div>
                                <div>
                                    <div style="display: flex; align-items: center;">
                                        <div style="width: 10px; height: 10px; border-radius: 5px; background: #71D875; margin-right: 10px;"></div>
                                        <p style="font-size: 16px; color: #ABAFB3;" class="font-s-book-rgular">R$10000 (Rev.)</p>
                                    </div>
                                    <div style="display: flex; align-items: center;">
                                        <div style="width: 10px; height: 10px; border-radius: 5px; background: #2290FF; margin-right: 10px;"></div>
                                        <p style="font-size: 16px; color: #ABAFB3;" class="font-s-book-rgular">R$1625 (Viewer)</p>
                                    </div>
                                </div>
                                
                            </div>

                        
                            <div style="height: 290px;">
                                <canvas id="chart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="around-pretty" data-anime-popup  data-pop="fade">
                        <div class="card-container around-height laptop-break-width" style="background-image: linear-gradient(303deg, #0B900A 0%, #064805 100%);">
                        
                                <div class="card-content " style="display: flex; align-items: center; justify-content: space-between; padding: 20px 10px 10px;">
                                    <div class="card-title" style="width: auto;">
                                        <p style="font-size: 15px;" class="font-s-book-bold">UNIDADES VENDIDAS</p>
                                        
                                    </div>
                                    <div class="card-bruto" style="position: relative; display: flex; align-items: center;">
                                        <p style="font-size: 25px;" class="font-s-book-bold">R$ 3250</p>
                                        <i class="fas fa-sort-down" style="margin-left: 5px;"></i>
                                    </div>
                                </div>
                                <div class="product-chart" style="margin: 5px">
                                    <canvas id="chart"></canvas>
                                </div>
                        
                        </div>
                        <div class="card-container around-height laptop-break-width" style="background-image: linear-gradient(233deg, #0F6BA5 0%, #083653 100%); height: 100%; display: flex; flex-direction: column; height: 100%; justify-content: space-around"> 
                            <div class="card-content" style="display: flex; align-items: center; justify-content: space-between; padding: 20px 10px 10px; height: auto;">
                                <div class="card-title" style="width: auto;">
                                        <p style="font-size: 15px;" class="font-s-book-bold">TAXA DE CONVERSÃO</p>
                                        
                                </div>
                                <div class="card-bruto" style="position: relative; display: flex; align-items: center;">
                                    <p style="font-size: 25px;" class="font-s-book-bold">30.50%</p>
                                </div>
                            </div>
                            <div class="product-chart">
                                <canvas id="chart5"></canvas>
                            </div>
                        </div>
                    </div>                      
                    <div class="card-product-chart-4" data-anime-popup  data-pop="fade" style="padding: 25px; box-sizing: border-box; background-color: white;">
                        <div style="height: 100%;width:100%;color:#464A53; display: flex; flex-direction: column; gap: 20px;"> 
                            <div style="43px">
                                <p style="font-size: 22px; color: #464A53;" class="font-s-book-rgular">Média Total</p>
                            </div>
                            <div class="box-mount-products">
                                <div style="display: flex; align-items: center;">
                                    <p class="mount-products font-s-book-rgular">Janeiro</p>
                                    <i style="margin-left: 5px; font-size: 9px; color: #71D875" class="fas fa-arrow-up"></i>
                                </div>
                                <p style="color: #71D875;">62%</p>
                            </div>
                            
                            <div class="box-mount-products">
                                <div style="display: flex; align-items: center;">
                                    <p class="mount-products font-s-book-rgular">Fevereiro</p>
                                    <i style="margin-left: 5px; font-size: 9px; color: #71D875" class="fas fa-arrow-up"></i>
                                </div>
                                <p style="color: #71D875;">48%</p>
                            </div>
                            
                            <div class="box-mount-products">
                                <div style="display: flex; align-items: center;">
                                    <p class="mount-products font-s-book-rgular">Março</p>
                                    <i style="font-size: 9px; color: #FF5274; margin-left: 5px;" class="fas fa-arrow-down"></i>
                                </div>
                                <p style="color: #FF5274;">48%</p>

                            </div>
                            
                            <div class="box-mount-products">
                                <div style="display: flex; align-items: center;">
                                    <p class="mount-products font-s-book-rgular">Abril</p>
                                    <i style="margin-left: 5px; font-size: 9px; color: #71D875" class="fas fa-arrow-up"></i>
                                </div>
                                <p style="color: #71D875;">54%</p>

                            </div>
                            
                            <div class="box-mount-products">
                                <div style="display: flex; align-items: center;">
                                    <p class="mount-products font-s-book-rgular">Maio</p>
                                    <i style="font-size: 9px; color: #FF5274; margin-left: 5px;" class="fas fa-arrow-down"></i>
                                </div>
                                <p style="color: #FF5274;">44%</p>
                            </div>
                            
                            <div class="box-mount-products">
                                <div style="display: flex; align-items: center;">
                                    <p class="mount-products font-s-book-rgular">Junho</p>
                                    <i style="font-size: 9px; color: #FF5274; margin-left: 5px;" class="fas fa-arrow-down"></i>
                                </div>
                                <p style="color: #FF5274;">39%</p>
                            </div>

                        </div>
                    </div>
                    <div class="card-product-chart-4 flex-row" data-anime-popup  data-pop="slide" style="box-shadow: none;">  
                        <div class="card-container laptop-break-width" style="background-color: white;color:#464A53;height: 192px;">
                            <div class="card-content">
                                <p style="font-size: 22px; color: #464A53; font-weight: bold;" class="font-s-book-rgular">Meta Semanal</p>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: space-between; margin: 0 25px 25px">
                                <div style="flex:1;">
                                    <div role="progressbarProduct" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="--value:75"></div>
                                </div>
                                <div style="text-align: end">
                                    <h2 style="color: #0B900A">75%</h2>
                                    <p style="font-size: 15px; color: #ABAFB3; max-width: 120px;" class="font-s-book-rgular">Completa em até dois dias</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-container laptop-break-width" style="background-color: white;color:#464A53;height: 192px;">
                            <div class="card-content">
                                <p class="font-s-book-rgular">Vendas Diarias</p>
                            </div>
                            <div style="display: flex; margin:25px">
                                <div style="width: 108px;height: 55px;flex:1">
                                    <canvas id="chart6"></canvas>
                                </div>
                                <div style="flex:2;text-align:end">
                                    <p style="color: #D185FD" class="font-s-book-rgular">8742</p>
                                    <p style="color: #ABAFB3" class="font-s-book-rgular">Unidades</p>
                                </div>
                            </div>
                        </div>

                    </div>
                
            </div>      
            <div class="top-card gap-0" style="margin-bottom:15px">
                
                    <div class="left-container border-right-0" data-anime-popup  data-pop="high">
                        <canvas id="chart4" class="chart5"></canvas>
                    </div>
                    <div class="right-container-product ocult-mobile" data-anime-popup  data-pop="high" style="flex-direction: column; border-left: 1px solid #d6d6d6; padding-left: 10px;">
                        <div  style="text-align: left; width: 100%; font-size: 22px; color: #464A53;">
                            <p class="font-s-book-rgular">Rendimento Mensal</p>
                        </div>
                        <div style="margin: 10px">
                            <canvas id="chart3" ></canvas>
                        </div>
                        <div style="font-size: 15px; color: #464A53; margin-top: 10px;">
                            <p class="font-s-book-rgular">Rendimento total: 12,650</p >
                        </div>
                    </div>
                
            </div>
            <div class="produtos-table  ocult-mobile">
                <p class="font-s-book-rgular">
                    Detalhamento de Produtos
                </p>
                <div class="container-filter-produtos">
                    <div class="container-filter-produtos-items">
                        <p>Categoria</p>
                        <select>
                            <option>Todas</option>
                        </select>
                    </div>
                    <div class="container-filter-produtos-items">
                        <p>Período</p>
                        <select>
                            <option>1 mês</option>
                        </select>
                    </div>
                    <div class="container-filter-produtos-items">
                        <p>Organizar</p>
                        <select>
                            <option>Recentes</option>
                        </select>
                    </div>
                </div>
                @livewire('components.metrics.tabelaLivewire', [
                    'colunas' => ['Produto', 'Material', 'Categoria', 'Quantidade', 'Data de edição' ],
                    'dados' => [
                        ['Produto' =>  'Itaim', 'Material' => '30', 'Categoria' => 'teste1@example.com',  'Quantidade' => '38', 'Data de edição' => [
                    "render" => Carbon::now(),
                    "type" => 'date'
                ]],
                        ['Produto' => 'teste1', 'Material' => '30', 'Categoria' => 'teste1@example.com',  'Quantidade' => 'Acima Meta', 'Data de edição' => [
                    "render" => Carbon::now(),
                    "type" => 'date'
                ]],
                        ['Produto' => 'teste1', 'Material' => '30', 'Categoria' => 'teste1@example.com',  'Quantidade' => 'Acima Meta', 'Data de edição' => [
                    "render" => Carbon::now(),
                    "type" => 'date'
                ]],
                    ],
                ])
            </div>
        </div>
        @livewire('components.metrics.footer')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script>
    const ctx = document.getElementById('chart');
    const ctx2 = document.getElementById('chart2');
    const ctx3 = document.getElementById('chart3');
    const ctx4 = document.getElementById('chart4');
    const ctx5 = document.getElementById('chart5');
    const ctx6 = document.getElementById('chart6');


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
                    text: 'Total vendas',
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
        label: 'Online',
        data: data1,
        fill: false,
        borderColor: '#51CCA9',
        backgroundColor: '#51CCA9',
        borderWidth: 3.5
    },
    {
        label: 'Balcão',
        data: data2,
        fill: false,
        borderColor: '#D07BED',
        backgroundColor: '#D07BED',
        borderWidth: 3.5
    }]
    } 

    new Chart(ctx4, {
    type: 'line', options: config4,data:data_config4

    });


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


    new Chart(ctx, {
    type: 'line', options: config,data:data_config

    });


    let pointRadius2 = [0,0,0,2]
    let labels2 = ['Red','Blue','Yellow','Yellow','Blue','Blue']
    let data3 = [5,20,20,25,25,35]
    let data4 = [10,25,25,35,35,50]
    let pointImage = new Image(20,20)
    pointImage.src = 'https://cdn-icons-png.flaticon.com/128/8539/8539511.png'
    let config2 = { 
        tension: 0.6,
        pointRadius:pointRadius2,
        hoverPointRadius:4,
        responsive: true,
        elements:{
            point:{
                pointStyle:[pointImage]
            }
        },
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
    let  data_config2 = {
    labels: labels2,
    datasets: [{
        label: 'My First Dataset',
        data: data3,
        fill: false,
        borderColor: '#2290FF',
        borderWidth: 2,
        fill: {
                target: 'origin',
                above: '#2290ff3a',   // Area will be red above the origin
                below: '#2290ff3a'    // And blue below the origin
              }
    },{
        label: 'My First Dataset',
        data: data4,
        fill: false,
        borderColor: '#71D875',
        borderWidth: 2,
        fill: {
                target: 'origin',
                above: '#71d87444',   // Area will be red above the origin
                below: '#71d87444'    // And blue below the origin
              }
    }]
    } 

    new Chart(ctx2, {
    type: 'line', options: config2,data:data_config2

    });


    let labels3 = ['Red','Blue','Yellow','Blue']
    let data5 = [20,10,25,17]


    let config3 = { 
        responsive: true,
        maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            }}
    let  data_config3 = {
    labels: labels,
    datasets: [{
        label: 'My First Dataset',
        data: data5,
       
    }]
    } 

    new Chart(ctx3, {
    type: 'doughnut', options: config3,data:data_config3

    });



    let labels6 = ['J','F','M','A','M','J','J','A','S','O']
    let data6 = [20,10,25,17,10,25,17,10,25,17]
    let config6 = { 
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } }, 
        scales: {
            x: {
                ticks:{color:"#FFFFFF"},

                border:{ display: false },
                grid:{ display: false }
            },
            y: { display: false }
        }
    }
    let  data_config6 = {
        labels: labels6,
        datasets: [{
            color: "#FFFFFF",
            backgroundColor: "#FFFFFF",
            barPercentage: 0.2,
            barThickness: 8,
            borderWidth: 2,
            borderRadius: 15,
            label: 'My First Dataset',
            data: data6,
        }]
    } 

    new Chart(ctx5, {
     type: 'bar', options: config6,data:data_config6

    });



    let labels7 = ['Red','Blue','Yellow','Blue','Blue','Yellow']
    let data7 = [20,10,25,17,10,25]
    let config7 = { 
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            x: { display: false },
            y: { display: false }
        }
    }
    let  data_config7 = {
    labels: labels7,
    datasets: [{
        backgroundColor:"#D185FD",
        barPercentage: 0.5,
        barThickness: 3,
        borderRadius: 15,
        label: 'My First Dataset',
        data: data7  
    }]
    } 

    new Chart(ctx6, {
        type: 'bar', options: config7,data:data_config7
    });

 
</script>
