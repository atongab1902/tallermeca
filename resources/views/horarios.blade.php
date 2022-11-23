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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"> Nuevo<i class="fa fa-plus"></i></a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Tiempo Entrada</th>
                          <th>Tiempo Salida</th>
                          <th>Acción</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>7:00AM</td>
                          <td>4:00PM</td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                        <tr>
                          <td>8:00AM</td>
                          <td>5:00PM</td>
                          <td>                            
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                        <tr>
                          <td>9:00AM</td>
                          <td>6:00PM</td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
        <!-- /page content -->
</body>

@stop