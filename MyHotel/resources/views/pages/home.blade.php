@extends('layouts.main-layout')

@section('principal')

{{-- su entita' di cui sono allegate migration, factory, seeder e model, generare in nuovo progetto il necessario per le seguenti pagine:
- home: lista di tutti gli impiegati
- edit/update: rotte per la modifica di un impiegato presente
- delete: rotta per l'eliminazione di un impiegato --}}

    @foreach ($workers as $worker)

    <div class="row">
        <a href="{{ route ('employee', $worker -> id) }}">
            [{{ $worker -> id }}] -> {{ $worker -> firtsname }} {{ $worker -> lastname }}
        </a>
        <a href=""><i class="fas fa-pen"></i></a>
        <a href=""><i class="fas fa-user-minus"></i></a>
    </div>
        
    @endforeach

    {{-- <h1>HELLO</h1> --}}
    
@endsection