<?php

namespace App\Livewire\Pages\Living;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Customer;

class ClientsEdit extends Component
{

    public $id;

    public function render()
    {
        
        $vip = Customer::find($this->id);
      
        return view('livewire.pages.living.clients-edit', ['vip' => $vip]);
    }
}
