<?php

namespace App\Livewire\Components\Living;
use App\Models\Customer;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ClientsPage extends Component
{
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

    public function setClient(){
        $this->validate();

        // $custumers = Customer::where('email', $this->email)->get();

        // if($custumers && count($custumers) > 0) {
        //     return redirect('/living/clients')->with('erro', 'Cliente ja cadastrado');
        // }

        $customer = new Customer();

        // Definir os atributos do cliente
        $customer->name = $this->name;
        $customer->email = $this->email;
        $customer->phone_number = preg_replace('/[-()]/', '', $this->phone_number);

        $customer->address = $this->address;
        $customer->city = $this->city;
        $customer->state = $this->state;
        $customer->zip_code = preg_replace('/[-()]/','',$this->zip_code);
        $customer->is_active = true;
        
        // Salvar o cliente no banco de dados
        $customer->save();

        return redirect('/living/clients')->with('status', 'Cliente Cadastrado');
    }

    public function getCep(){
        if(strlen($this->zip_code) == 9){
            $responde = Http::get("viacep.com.br/ws/$this->zip_code/json/");
            $retornoApi = $responde->json();
            if(isset($retornoApi)){
                
                $this->address = isset($this->address) ? $retornoApi['logradouro'].','. $retornoApi['bairro'] :$this->address;
                $this->city = isset($this->city) ? $retornoApi['localidade'] :$this->city;
                $this->state = isset($this->state) ? $retornoApi['uf'] :$this->state;

            }
        }
        //dd($retornoApi);
    }

    public function render()
    {
        return view('livewire.components.living.clients-page');
    }
}
