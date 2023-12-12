<?php

namespace App\Livewire\Pages\Living;

use Livewire\Component;

class Clients extends Component
{   

    public function render()
    {
        $currentRoute = request()->route()->getName();
        return view('livewire.pages.living.clients', compact('currentRoute'));
    }

    
}
