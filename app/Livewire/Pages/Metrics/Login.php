<?php

namespace App\Livewire\Pages\Metrics;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule; 
use Livewire\Component;

class Login extends Component
{
    #[Rule('required')] 
    public $email = '';
    #[Rule('required')] 
    public $password = '';


    public function login()
    {
        if (Auth::guard('metrics')->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect('/metrics/home');
        } else {
            $this->validate(); 
            $this->reset('email');
            $this->reset('password');
            return redirect('/metrics/')->with('error', 'Email ou senha inválidos.');
        }
    }
    

    public function render()
    {
        $this->reset('email');
        $this->reset('password');
        
        return view('livewire.pages.metrics.login');
    }
}
