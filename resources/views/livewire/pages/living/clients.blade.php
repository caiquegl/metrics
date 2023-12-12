<div class="container-fluid">
    <div class="row flex-nowrap">
        @livewire('components.living.side-bar')
        <div class="col-xxl-10 col-xl-9 reset-pad-mag bg-pages" id="bodypage">
            @livewire('components.living.header-bar')
            @if($currentRoute == 'clients')
                @livewire('components.living.clients-list-page')
            @endif

            @if($currentRoute == 'new-clients')
                @livewire('components.living.clients-page')
            @endif
        </div>
    </div>
</div>
