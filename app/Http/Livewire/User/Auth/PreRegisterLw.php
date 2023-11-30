<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;

class PreRegisterLw extends Component
{

    public function render()
    {
        return view('livewire.user.auth.pre-register-lw');
    }

    public function registerClient()
    {
        return redirect(route('register'));
    }

    public function registerVehicle()
    {
        return redirect(route('register.mechanical.form'));
    }
}
