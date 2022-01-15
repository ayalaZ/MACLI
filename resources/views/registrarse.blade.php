<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - MACLI</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>MACLI</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Registrarse como nuevo usuario</p>
                <form action="#" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-signature"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="usuarios" id="usuario" class="form-control" placeholder="Usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" name="accept" id="accept">
                                <label for="accept">Acepto los terminos</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="{{ route('login')}}">Ya tengo una cuenta</a>
                </p>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset("plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("dist/js/adminlte.min.js")}}"></script>
</body>
</html>