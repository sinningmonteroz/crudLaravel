@extends('plantillas.principal')

@section('titulo', 'Inicio')

@section('contenido')
        <form method="post" action="">
            <div class="container-sm">
                <p>
                    <input type="text" name="usuario" placeholder="Usuario" class="form-control">
                </p>
                <p>
                    <input type="password" name="password" placeholder="Contraseña" class="form-control">
                </p>
                <input type="submit" name="submit" value="Enviar" class="btn btn-primary"/>
            </div>
        </form>
@endsection