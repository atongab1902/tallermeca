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
@yield('seccion')

<body class="nav-md">
            <!-- page content -->
            <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Lista de Empleados</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"> Nuevo<i class="fa fa-plus"></i></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID Empleado</th>
                          <th>Nombre</th>
                          <th>Posición</th>
                          <th>Horarios</th>
                          <th>Miembro Desde</th>
                          <th>Acción</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>M35</td>
                          <td>Ana Sanchez</td>
                          <td>Secretaria</td>
                          <td>7:00AM-4:00PM</td>
                          <td>Marzo 05, 2020</td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2Y3</td>
                          <td>Gabriel Hernandez</td>
                          <td>Mecanico general</td>
                          <td>8:00AM-5:00PM</td>
                          <td>Junio 03, 2018</td>
                          <td>                            
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                        <tr>
                          <td>4P0</td>
                          <td>Fernando Martinez</td>
                          <td>Mecanico silenciadores</td>
                          <td>8:00AM-5:00PM</td>
                          <td>Abril 29, 2018</td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2SL</td>
                          <td>Antonio Lopez</td>
                          <td>Mecanico automotriz</td>
                          <td>9:00AM-6:00PM</td>
                          <td>Mayo 03, 2019</td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                        <tr>
                          <td>6H0</td>
                          <td>Peter Garcia</td>
                          <td>Mecanico general</td>
                          <td>9:00AM-6:00PM</td>
                          <td>Agosto 07,2020</td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="1"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="1"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2D8</td>
                          <td>Carlos Puerta</td>
                          <td>Mecanico silenciadores</td>
                          <td>8:00AM-5:00PM</td>
                          <td>Febrero 23, 2020</td>
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