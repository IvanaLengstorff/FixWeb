<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;

class RegisterLw extends Component
{
    public $isEnable = true;
    public $type = null;

    protected $listeners = ['enableRegister'];

    public function render()
    {
        return view('livewire.user.auth.register-lw');
    }

    public function enableRegister($type)
    {
        $this->isEnable = true;
        $this->type = $type;
    }

    
}
