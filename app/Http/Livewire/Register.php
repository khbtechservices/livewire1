<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\User;

use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public $name = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function register() {
        User::create([

            'name' => $this->email,
            'email' => $this->email,
            'password' => Hash::make($this->password),

        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
