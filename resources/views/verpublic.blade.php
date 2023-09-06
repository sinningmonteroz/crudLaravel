@extends('plantillas.principal')

@section('titulo', 'Registro')

@section('contenido')
<figure class="text-center">
    <h3 class="h3">{{$public->titulo}}</h3>
    <p>
        {{$public->contenido}}
    </p>
    <p><strong>Palabra clave:</strong> {{$public->keywords}}</p>
</figure>
@endsection