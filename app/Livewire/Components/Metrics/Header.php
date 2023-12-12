<?php

namespace App\Livewire\Components\Metrics;

use Livewire\Component;

class Header extends Component
{
    public $search = '';
    public $showDropdown = false;
    public $notifications = 0;

  
    public $open = false;

    public function closeMeny () {
        $this->open = false;
        $this->dispatch('post-created', ['open' => $this->open]);
    }

    public function openMeny () {
        $this->open = true;
        $this->dispatch('post-created', ['open' => $this->open]);
    }


    public function toggleDropdown()
    {
        $this->showDropdown = !$this->showDropdown;
    }


    public function render()
    {
        return view('livewire.components.metrics.header');
    }
}
