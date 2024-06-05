@extends('layout')

@section('title', 'Talleres')
@section('content')
    <h2>Talleres</h2>
    <ul>
        @if($talleres)
            @foreach($talleres as $taller)
                <li>{{$taller['titulo']}}</li>
            @endforeach
        @else
            <li>No hay talleres en esta temporada</li>
        @endif
    </ul>
@endsection