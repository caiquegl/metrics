
<div class="card-container" >
    <div class="card-body-chart" style="background-image: {{ $background }};">
        <div class="card-content" >
               
                <div class="card-title">
                    <div style="display: flex; align-items: center">

                        <h3>{{ $title }}</h3>
                        <i style="margin-left: 10px" class="fas fa-caret-down"></i>
                    </div>
                    <div class="flex-title" style="{{$reverse ? 'flex-direction: row-reverse;' : ''}}">

                        <h1 data-mine-counter="{{$value}}">R$ 0</h1>
                        <p>Bruto</p>
                    </div>
                </div>
        </div>
        <div class="card-chart">
            <canvas id="{{$idChart}}"></canvas>
        </div>
    </div>
</div>