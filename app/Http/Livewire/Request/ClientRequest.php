<?php

namespace App\Http\Livewire\Request;

use App\Models\Request;
use Livewire\Component;

class ClientRequest extends Component
{
    protected $listeners = ['setUbicacionActual'];
    public $request = [];
    public $client_id = null;

    public $request_active = 0;

    public function __construct()
    {
        $this->client_id = Auth()->user()->client->id;
    }

    public function render()
    {
        $request = Request::where('client_id', $this->client_id)
            ->where('terminated', false)
            ->first();
        $this->request_active = 0;
        if ($request) {
            $this->request = $request->toArray();
            $accepted_request = $request->accepted;
            if ($accepted_request) {
                $this->request_active = 2;
            } else {
                $this->request_active = 1;
            }
        }
        return view('livewire.request.client-request');
    }
    public function setUbicacionActual($ubicacion)
    {
        $this->request['longitud'] = $ubicacion['longitud'];
        $this->request['latitud'] = $ubicacion['latitud'];
        $this->emit('getUbicacionActual', $ubicacion);
    }

    public function createRequest()
    {
        $this->validate([
            'request.longitud' => 'required',
            'request.latitud' => 'required',
            'request.description' => 'required',
        ]);

        $this->request['client_id'] = $this->client_id;
        Request::create($this->request);
    }

    public function destroyRequest()
    {
        $request = Request::find($this->request['id']);
        $request->delete();
        $this->request['description'] = null;
    }
}
