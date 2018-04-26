@extends('layout.front')

@section('content')
    <div class="container-fluid login-container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-xl-4 offset-xl-4">
                <div class="login">
                    <h1 class="login__title">Inicio de sesión</h1>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Nombre de usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Ingresar" class="btn btn-large login__btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection