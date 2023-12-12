<?php

namespace App\Livewire\Components\Metrics;

use Livewire\Component;

class CardProgressCircular extends Component
{
    public $title = '';
    public $value = 0;
    public $title1 = '';
    public $color1 = '#43E794';
    public $value1 = '';
    public $title2 = '';
    public $value2 = '';
    public $color2 = '#FF5274';
    public $color_chart = 'chart-blue';

    public function render()
    {
        return view('livewire.components.metrics.card-progress-circular');
    }
}
