<div style="display: flex">
    @livewire('components.metrics.sidebar')
    <div class="container-page-85">
        @livewire('components.metrics.header')
        @livewire('components.metrics.breadcump', ['title' =>  'Calendário'])
        @livewire('components.metrics.calendar')
        @livewire('components.metrics.footer')
    </div>
</div>
