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

    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('modales/jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css')}}">  

    <script src="{{ asset('modales/js/bootstrap.bundle.js')}}"></script>
    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  </head>

@extends('plantilla')
@section('seccion')

<body class="nav-md">
    <!-- page content -->
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Horarios</h3>
              </div>
            </div>

            <div class="clearfix"></div>

          
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div class="float-left">
                                        <a href="#" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#ModalCreate" data-placement="left">
                                        {{ __('Nuevo Horario') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Horario</th>
                                                
                                                <th>Hora de entrada</th>
                                                <th>Hora de salida</th>

                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($horarios as $horario)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
                                                    <td>{{ $horario->horaentrada }}</td>
                                                    <td>{{ $horario->horasalida }}</td>

                                                    <td>
                                                        <form action="{{ route('horario.destroy',$horario->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-success" href="#edit{{ $horario->id}}" data-toggle="modal" data-target="#ModalEdit" data-placement="left"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $horarios->links() !!}
                    </div>
                </div>
</div>                <!-- /page content -->
</div>
@include('horario.modal.create')
@include('horario.modal.edit')

</body>

@stop