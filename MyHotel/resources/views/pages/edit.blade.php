@extends('layouts.main-layout')

@section('principal')

    <h1>NEW WORKER: [{{ $worker -> id }}]</h1>
    
    <form method="POST" action="{{ route('store') }}">
        
        @csrf
        @method('POST')

        {{-- nome --}}
        <div class="row">
            <label for="firstname" class="inp-wrk">Firstname:</label>
            <input type="text" name="firstname" class="inp-wrk" value="{{ $worker -> firstname }}">
        </div>
        {{-- cognome --}}
        <div class="row">
            <label for="Lastname" class="inp-wrk">Lastname:</label>
            <input type="text" name="lastname" class="inp-wrk" value="{{ $worker -> lastname }}">
        </div>
        {{-- ruolo --}}
        <div class="row">
            <label for="role" class="inp-wrk">Ruolo:</label>
            <input type="text" name="role" class="inp-wrk" value="{{ $worker -> role }}">
        </div>
        {{-- ral --}}
        <div class="row">
            <label for="ral" class="inp-wrk">Ral:</label>
            <input type="text" name="ral" class="inp-wrk" value="{{ $worker -> ral }}">
        </div>

        <div class="row">
            <button class="bnt">
                UPDATE
            </button>
        </div>  
    </form>


@endsection
