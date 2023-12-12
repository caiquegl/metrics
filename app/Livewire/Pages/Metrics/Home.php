<?php

namespace App\Livewire\Pages\Metrics;

use Livewire\Component;

class Home extends Component
{

    public $open = false;

    public function closeMeny () {
        $this->open = false;
        $this->dispatch('post-created', ['open' => $this->open]);
    }

    public function openMeny () {
        $this->open = true;
        $this->dispatch('post-created', ['open' => $this->open]);
    }

    public function render()
    {
        return view('livewire.pages.metrics.home');
    }
}
