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
        <div class="col-lg-4 col-md-5 col-sm-4">
            <div class="card">
                <div class="card-header text-center"><h5>{{ __('Inicia Sesion ') }}</h5></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row ">
                            <div class="col-lg-12 text-center pb-3">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row ">

                            <div class="col-md-12 pb-3">
                                <input id="password" type="password" placeholder="Contrase??a" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row text-center pl-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Iniciar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('??Olvidaste tu contrase??a?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12 ">
                               
                                @if (Route::has('register'))
                                    <p>??No tienes cuenta?<a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Registrate') }}
                                    </a></p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-12 text-center">
                            <h5><i class="fa fa-gear text-center"></i> Inversiones Servimeca, C.A</h5>
                            <p>??2022 Derechos Reservados. UPTA "Federico Brito Figueroa"</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

