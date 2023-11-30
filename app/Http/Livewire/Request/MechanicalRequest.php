<?php

namespace App\Http\Livewire\Request;

use App\Models\AcceptedRequest;
use App\Models\Request;
use Livewire\Component;

class MechanicalRequest extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $requests=Request::where('accepted',false)->get();
        return view('livewire.request.mechanical-request',compact('requests'));
    }

    public function acceptedRequest($reques_id){
        AcceptedRequest::create([
            ''
        ]);
    }
}
