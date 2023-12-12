
    <div class="progress-card4">
        <div class="title-progress">
            <p>{{$title}}</p>
            <i style="margin-left: 10px" class="fas fa-caret-down"></i>
        </div>
        <div role="progressbar" class="{{$color_chart}}" aria-valuenow="{{$value}}" aria-valuemin="0" aria-valuemax="100" style="--value:{{$value}};">
        </div>
        <div class="legend-progress">
            <div>
                <p style="color: {{$color1}}; font-size: 16px; height: 30px;">{{$title1}}</p>
                <span   class="progress-value">{{$value1}}</span>
            </div>
            <div>
                <p style="color: {{$color2}}; font-size: 16px; height: 30px;">{{$title2}}</p>
                <span   class="progress-value">{{$value2}}</span>
            </div>
        </div>
    </div>

