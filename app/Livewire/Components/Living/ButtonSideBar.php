<?php

namespace App\Livewire\Components\Living;

use Livewire\Component;

class ButtonSideBar extends Component
{
    public $route;
    public $icon;
    public $text;
    public $active;

    public function render()
    {   
        return view('livewire.components.living.button-side-bar');
    }
}
