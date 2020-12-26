<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $username = '';

    public $about = '';


    public function mount() {

        $user = auth()->user();

        $this->username = $user->username;

        $this->about = $user->about;

    }

    public function save() {

        $data = $this->validate([
            'username' => 'required|alpha_num|min:6|max:30',
            'about' => 'max:120'
        ]);

        auth()->user()->update($data);

        $this->dispatchBrowserEvent('notify', 'Profile saved.');

    }


    public function render()
    {
        return view('livewire.profile');
    }


    public function updateAbout() {
        $this->validate( ['about'=>'max:120'] );
    }

    public function updatedUsername() {

        $this->validate( ['username' => 'alpha_num|min:6|max:30'] );

    }

}
