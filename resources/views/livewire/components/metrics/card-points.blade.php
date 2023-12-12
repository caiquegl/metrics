<div class="container-card-points" style="background: {{ $bgColor }}" data-anime-popup  data-pop="high">
    {{-- <i class="far {{ $icon }}"></i> --}}
    <img src="{{ asset("icon/metrics/$icon")}}" />
    <div class="divider-h"></div>
    <div class="box-description">
        <p class="title">{{ $title }}</p>
        <p class="value font-s-book-bold" {{ $counter }}="{{$value}}">{{ $value }}</p>
    </div>
</div>
