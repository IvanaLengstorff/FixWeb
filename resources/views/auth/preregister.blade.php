@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Pre Register</title>

    </head>
    <div class="login">
        <div class="login__content">
            @livewire('user.auth.pre-register-lw')
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>

@endsection

