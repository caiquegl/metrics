<?php

namespace App\Livewire\Components\Metrics;

use Livewire\Component;

class CardChart extends Component
{
    public $title = '';
    public $idChart = '';
    public $value = '';
    public $reverse = false;
    public $background = 'linear-gradient(122deg, rgb(5, 77, 123), rgb(65, 146, 196))';

    public function render()
    {
        return view('livewire.components.metrics.card-chart');
    }
}
