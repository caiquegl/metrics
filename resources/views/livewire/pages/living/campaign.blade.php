
<div class="container-fluid">
    <div class="row flex-nowrap">
        @livewire('components.living.side-bar')
        <div class="col-xxl-10 col-xl-9 reset-pad-mag bg-pages" id="bodypage">
            @livewire('components.living.header-bar')
            @if($currentRoute == 'campaign')
                @livewire('components.living.campaign-page')
            @endif
            @if($currentRoute == 'list-campaign')
                @livewire('components.living.list-campaign')
            @endif
            @if($currentRoute == 'edit-campaign')
            @livewire('components.living.edit-campaign', ['id' => $campaignId])
            @endif
        </div>
    </div>
</div>