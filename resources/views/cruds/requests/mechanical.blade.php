@extends('adminlte::page')

@section('title', 'Help Me')

@section('content')
    @livewire('request.mechanical-request')
@stop

@section('css')
    @livewireStyles
@stop

@section('js')
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoXPpQqlLk-R1-HEi-PpFLkSUoEhzGDY4&libraries=places&callback=inicializarMapa"></script>
    @livewireScripts
@stop
