<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IS PROCESSS TALLER</title>

    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estiloslogin.css')}}">  

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('modales/jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css')}}"> 

</head>
<body>


            <div class="row justify-content-center align-items-center" style="height: 600px;">
                <div class="col-md-6">
                    <div class="card text-center pt-3">
                        <h1>IS PROCESS TALLER</h1>
                        <hr>
                        <h1 class="pb-3">Inversiones Servimeca C.A.</h1>
                        <div class="col-md-12">
                                    <a class="btn btn-dark" href="{{ url('asistencia/marcarasistencia') }}">{{ __('Trabajadores') }}</a>
                               
                                    <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Administrador') }}</a>
                        </div>  
                        <hr>    
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

