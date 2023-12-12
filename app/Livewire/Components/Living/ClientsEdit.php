<?php

namespace App\Livewire\Components\Living;

use Livewire\Component;
use App\Models\Customer;

class ClientsEdit extends Component
{
    public $vip;

    public $name = '';
    public $email = '';
    public $phone_number = '';
    public $address = '';
    public $city = '';
    public $state = '';
    public $zip_code = '';
    public $is_active = true; // Pode definir um valor padrão, se necessário

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:customers,email',
        'phone_number' => 'required',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zip_code' => 'required',
        
    ];

    protected $messages = [
        'email.unique' => 'O endereço de e-mail já está em uso por outro cliente.',
        'email.required' => 'E-mail é obrigatório',
        'name.required' => 'Nome é obrigatório',
        'phone_number.required' => 'Telefone é obrigatório',
        'city.required' => 'Cidade é obrigatório',
        'address.required' => 'Endereço é obrigatório',
        'state.required' => 'Estado é obrigatório',
        'zip_code.required' => 'CEP é obrigatório',
    ];


    public function setEditClient() {
        $this->validate();
        
        $user = Customer::find($this->vip->id);

        if($user) {
            $user->name = $this->name;
            $user->email = $this->email;
            $user->phone_number = $this->phone_number;
            $user->address = $this->address;
            $user->city = $this->city;
            $user->state = $this->state;
            $user->zip_code = $this->zip_code;
            $user->save();

            return redirect('/living/clients')->with('status', 'Dados do cliente vip atualizado com sucesso!');
        }

        return redirect('/living/clients')->with('erro', 'Não foi possivel atualizar registro desse usuário!');
    }

    public function render()
    {
        $this->name =  $this->vip->name;
        $this->email =  $this->vip->email;
        $this->phone_number = $this->vip->phone_number;
        $this->address = $this->vip->address;
        $this->city = $this->vip->city;
        $this->state = $this->vip->state;
        $this->zip_code = $this->vip->zip_code;

        // dd($this->vip); // Use dd para depurar o valor de $vip
        return view('livewire.components.living.clients-edit', ['vip' => $this->vip]);
    }
}
