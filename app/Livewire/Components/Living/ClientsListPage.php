<?php

namespace App\Livewire\Components\Living;

use Livewire\Component;
use App\Models\Customer;

class ClientsListPage extends Component
{
    public function maskPhone($phone)
    {
        $cleanedPhone = preg_replace('/[^0-9]/', '', $phone);
    
        $formattedPhone = preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $cleanedPhone);
    
        return $formattedPhone;
    }

    public function getListVips() {
        $vips = Customer::select('*')->where('is_active','=', true)->orderBy('id', 'DESC')
        ->paginate(20);

        return $vips;
    }

    public function delete($id) {
        $existingClient = Customer::find($id);

        $existingClient->is_active = false;
        $existingClient->save();
        
        return $this->getListVips();
    }

    public function renderNewVips() {
        return redirect('/living/new-clients');
    }

    public function render()
    {
        return view('livewire.components.living.clients-list-page', ['vips' => $this->getListVips()]);
    }
}
