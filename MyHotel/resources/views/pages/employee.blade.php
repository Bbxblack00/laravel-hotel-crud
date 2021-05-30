@extends('layouts.main-layout')

@section('principal')

    <h1>{{ $worker -> firstname}}</h1>
    <h2>{{ $worker -> lastname }}</h2>

    <br>

    <h2> RUOLO: {{ $worker -> role }}</h2>

    <br>

    <h2> Ral: {{ $worker -> ral }}</h2>
    
@endsection