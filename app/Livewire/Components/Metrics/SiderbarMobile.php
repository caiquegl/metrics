<?php

namespace App\Livewire\Components\Metrics;

use Livewire\Component;

class SiderbarMobile extends Component
{
    public $open = false;


    public function closeMeny () {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.components.metrics.siderbar-mobile');
    }
}
