<?php

namespace App\Livewire\Components\Living;

use Livewire\Component;
use Illuminate\Http\Request;

class SideBar extends Component
{

    public function render()
    {
        $current = request()->route()->getName();
        return view('livewire.components.living.side-bar', compact('current'));
    }
}
