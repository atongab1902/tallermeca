<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
    @yield('titulo1') 
    </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/estiloslogin.css')}}">  

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('modales/jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css')}}">  
<body>
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-sm-10 col-md-8 col-lg-4">
                <div class="card">
                    <div class="card-header text-center"><h5>{{ __('Registrarse') }}</h5></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="name" type="text" placeholder="Nombre y Apellido" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="email" type="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" placeholder="Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Registrate') }}
                                    </button>
                                </div>
                            </div>

                            <hr>
                            <div class="row text-center">
                            <div class="col-md-12 ">
                               
                                @if (Route::has('register'))
                                    <p>¿Ya tienes cuenta?<a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Inicia Sesion') }}
                                    </a></p>
                                @endif
                            </div>
                             </div>
                        
                            <div class="col-md-12 text-center">
                                <h5><i class="fa fa-gear text-center"></i> Inversiones Servimeca, C.A</h5>
                                <p>©2022 Derechos Reservados. UPTA "Federico Brito Figueroa"</p>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
