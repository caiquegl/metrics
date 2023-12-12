<body style="background-color:#F0F0F0 ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }} "> --}}
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/chart.css') }}" rel="stylesheet"> 

    </head>
    <div style="display: flex">
        <div style="padding-top: 50px; padding-left:50px;">
            <div class="container" style=" max-width:756px; display:grid; grid-template-columns: auto auto ;">

                <div class="card-container">
                    <div class="card-content">
                        <div class="card-title">
                            <h3>Vendas balcão</h3>
                            <h1>R$ 3250</h1>
                        </div>
                        <div class="card-bruto">
                            <span>Bruto</span>
                        </div>
                    </div>
                    <div class="card-chart">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>

                <div class="card-container2">
                    <div class="card-content2">
                        <div class="card-title2">
                            <h3>Vendas balcão</h3>
                            <h1>R$ 3250</h1>
                        </div>
                        <div class="card-bruto">
                            <span>Bruto</span>
                        </div>
                    </div>
                    <div class="card-chart2">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="card-container">
                    <div class="card-content">
                        <div class="card-title">
                            <h3>Principais fontes</h3>
                        </div>
                    </div>
                    <div class="card-progress-bar3">
                        <progress id="file" value="32" max="100">32%</progress>
                        <progress id="file" value="32" max="100">32%</progress>
                    </div>
                </div>
            
                <div class="gradient-card-container3">
                    <div class="card-content3">
                        <div class="card-bruto3">
                            <span>Bruto</span>
                        </div>
                        <div class="card-title3">
                            <h3>Vendas balcão</h3>
                            <h1>R$ 3250</h1>
                        </div>
                    </div>
                    <div style="height: 67px; width: 290px; padding-top: 15px;">
                        <canvas id="chart3"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="container4">
            <div class="progress-card4">
                <div>
                    <progress class="progress-bar4" value="55" max="100">55%</progress>
                </div>
            </div>
            <div class="progress-card4">
                <div>
                    <progress class="progress-bar4" value="32" max="100">32%</progress>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container5">
        <div class="left-container">
            <canvas id="chart4" class="chart5"></canvas>
        </div>
        <div class="right-container5">
            <div class="right-content5">
                <h3>Visão Geral (atualizada em 01/08/2023)</h3>
                <h5>Unidades vendidas</h5>
                <h1>64</h1>
                <h4>Pontos acumulados</h4>
                <h1>7550</h1>
                <h4>Continue assim! Em breve teremos campanha de 150 anos de Heineken com muitas promoções!</h4>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
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