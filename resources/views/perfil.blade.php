@extends('plantillas.principal')

@section('titulo', 'Perfil')

@section('contenido')
    <p>
        Bienvenido <?php echo $usuario; ?>
    </p>
@endsection
