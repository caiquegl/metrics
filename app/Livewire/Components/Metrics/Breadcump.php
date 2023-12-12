<?php

namespace App\Livewire\Components\Metrics;

use Livewire\Component;

class Breadcump extends Component
{
    public $title = '';

    public function mount($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.components.metrics.breadcump');
    }
}
