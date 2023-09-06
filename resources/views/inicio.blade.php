@extends('plantillas.principal')

@section('titulo', 'Inicio')

@section('contenido')
<figure class="text-center">
    <a href="{{route('crear.contenido')}}" class="button">Crear articulo</a>
    @foreach ($contenidos as $content)
        <blockquote class="blockquote">
            <p>
                <a href="{{route('ver.contenido', $content->id)}}"> {{$content->titulo}}</a>
            </p>
        </blockquote>
    @endforeach
    {{$contenidos->links()}}
</figure>
@endsection
