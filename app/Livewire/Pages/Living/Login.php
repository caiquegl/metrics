<?php

namespace App\Livewire\Pages\Living;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule; 
use App\Livewire\FilesStatic;

class Login extends Component
{

    #[Rule('required',  message: 'Campo obrigatório')] 
    public $email = '';
    #[Rule('required', message: 'Campo obrigatório')] 
    public $password = '';


    public function login()
    {
        if (Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect('/living/apps');
        } else {
            $this->validate(); 
            $this->reset('email');
            $this->reset('password');
            session()->flash('error', 'Email ou senha inválidos.');
        }
    }
    

    public function render()
    {
        $this->reset('email');
        $this->reset('password');
        
        return view('livewire.pages.living.login');
    }
}
