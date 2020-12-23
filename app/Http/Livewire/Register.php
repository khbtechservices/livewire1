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

        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|same:passwordConfirmation',
        ]);

        User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
