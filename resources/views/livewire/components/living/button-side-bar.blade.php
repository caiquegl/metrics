<div class="row mb-3 text-center">
    <a href="{{ $route }}" class="btn btn-side {{ $active }}">
        <span class="icon-btn">
            <img src="{{ asset($icon) }}" class="img-fluid icon-fill-white" alt="icon link">
        </span>
        <span class="txt-side-name">
            <p class="fw-icon">
                {{ $text }}
            </p>
        </span>
    </a>
</div>
