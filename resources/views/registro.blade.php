@extends('plantillas.principal')

@section('titulo', 'Registro')

@section('contenido')
        <form method="post" action="">
            <div class="container-sm">
                <p>
                    <input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
                </p>
                <p>
                    <input type="email" name="email" placeholder="Correo" class="form-control" required>
                </p>
                <p>
                    <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
                </p>
                <p>
                    <input type="password" name="password" placeholder="Confirmar Contraseña" class="form-control" required>
                </p>
                <input type="submit" name="submit" value="Crear usuario" class="btn btn-primary"/>
            </div>
        </form>
@endsection
