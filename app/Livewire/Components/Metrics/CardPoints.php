<?php

namespace App\Livewire\Components\Metrics;

use Livewire\Component;

class CardPoints extends Component
{
    public $bgColor = 'transparent linear-gradient(116deg, #01629F 0%, #013150 100%) 0% 0% no-repeat padding-box;'; // Defina uma cor padrão, se desejar
    public $icon = 'icon'; 
    public $title = 'title'; 
    public $value = 'value'; 
    public $counter = 'counter'; 

    public function render()
    {
        return view('livewire.components.metrics.card-points');
    }
}
