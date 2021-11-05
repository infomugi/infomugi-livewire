<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Signin extends Component
{
    public $email;
    public $password;
    
    /**
    * login
    *
    * @return void
    */
    public function signin()
    {
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);
        
        if(Auth::attempt(['email' => $this->email, 'password'=> $this->password])) {
            
            return redirect()->route('admin.dashboard');
            
        } else {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('auth.signin');
        }
    }
    
    /**
    * render
    *
    * @return void
    */
    public function render()
    {
        return view('livewire.auth.signin');
    }
    
    public function register()
    {
        return redirect()->route('auth.register');
    }
}