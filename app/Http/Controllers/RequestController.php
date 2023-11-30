<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function client()
    {
        return view('cruds.requests.client');
    }

    public function mechanical()
    {
        return view('cruds.requests.mechanical  ');
    }
}
