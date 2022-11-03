@extends('plantilla')
@section('seccion')

<body class="nav-md">
        <!-- page content -->
      <div class="container">
        <div class="right_col" role="main">
          <div class="small-box bg-aqua">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-3 col-md-6 col-sm-6 ">
                <div class="tile-stats bg-primary">
                  <div class="icon"><i class="fa fa-users text-white"></i></div>
                  <div class="count text-white">7</div>
                  <h3 class="text-white">Servicios Ingresados</h3>

                 
                  <a href="#"><p class="text-center text-white" data-bs-toggle="modal" data-bs-target="#miModal"> Más Información</p> </a>
                  <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Servicios Ingresados</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                           <div class="card">
                           
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                              <div class="table-responsive">
                                <table class="table m-0">
                                  <thead>
                                  <tr>
                                    <th>ID Orden</th>
                                    <th>Automóvil</th>
                                    <th>Estatus</th>                                
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Bronco Sport</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Ranger</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>F-350</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>4Runner</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Fortuner 4x4</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>Kia Pregio Van</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Corolla Gli</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card-footer -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>

                      </div>    
                    </div>
                  </div>
                    </div>
                  </div>
                 
                <!-- Servicios Pendientes-->

              <div class="animated flipInY col-lg-3 col-md-6 col-sm-6 ">
                <div class="tile-stats bg-secondary">
                  <div class="icon"><i class="fa fa-hourglass text-white pb-1"></i></div>
                  <div class="count text-white">5</div>
                  <h3 class="text-white">Servicios Pendientes</h3>
                  <a href="#"><p class="text-center text-white" data-bs-toggle="modal" data-bs-target="#miModal2"> Más Información</p> </a>
                  <div class="modal fade" id="miModal2" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Servicios Pendientes</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                           <div class="card">
                           
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                              <div class="table-responsive">
                                <table class="table m-0">
                                  <thead>
                                  <tr>
                                    <th>ID Orden</th>
                                    <th>Automóvil</th>
                                    <th>Estatus</th>
                                    <th>Fecha de Estimada</th>                                
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>L300 Panel</td>
                                    <td><span class="badge badge-warning">En Proceso</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Corolla Le</td>
                                    <td><span class="badge badge-warning">En Proceso</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>Camry Automático</td>
                                    <td><span class="badge badge-warning">En Proceso</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>F-250 Super Duty</td>
                                    <td><span class="badge badge-warning">En Proceso</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Silverado</td>
                                    <td><span class="badge badge-warning">En Proceso</span></td>
                                  </tr>
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card-footer -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>    
                    </div>
                  </div>
            </div>
            </div>
            <!--Servicios Finalizados-->
              <div class="animated flipInY col-lg-3 col-md-6 col-sm-6 ">
                <div class="tile-stats bg-success">
                  <div class="icon"><i class="fa fa-check-square-o text-white"></i></div>
                  <div class="count text-white">2</div>
                  <h3 class="text-white">Servicios Finalizados</h3>
                  <a href="#"><p class="text-center text-white" data-bs-toggle="modal" data-bs-target="#miModal4"> Más Información</p> </a>
                  <div class="modal fade" id="miModal4" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Servicios Finalizados</h5>

                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="card">
                           
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                              <div class="table-responsive">
                                <table class="table m-0">
                                  <thead>
                                  <tr>
                                    <th>ID Orden</th>
                                    <th>Automóvil</th>
                                    <th>Estatus</th>                                
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Cherokke Limited</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Explorer Expedition Limited</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                  </tr>
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card-footer -->
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-6 col-sm-6 ">
                <div class="tile-stats bg-danger">
                  <div class="icon"><i class="fa fa-remove text-white"></i></div>
                  <div class="count text-white">1</div>
                  <h3 class="text-white">Trabajadores Tarde Hoy</h3>
                  <a href="#"><p class="text-center text-white" data-bs-toggle="modal" data-bs-target="#miModal5"> Más Información</p> </a>
                  <div class="modal fade" id="miModal5" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Trabajadores Tarde Hoy</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                              <div class="table-responsive">
                                <table class="table m-0">
                                  <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Hora de Entrada</th> 
                                    <th>Hora que llegó</th>                               
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td><a href="pages/examples/invoice.html">10352145</a></td>
                                    <td>Gabriel Hernandez</td>
                                    <td><span class="badge badge-success">7:00 AM</span></td>
                                    <td><span class="badge badge-danger">8:15 Am</span></td>
                                  </tr>
                                  </tbody>
                                </table>
                              </div>
                              <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card-footer -->
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
                

                       <!-- grafica contenido-->

                            <div class="row">
                              <div class="col-md-12">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <h2>Transacción Mensual <small>Resumen detallado</small></h2>
                                    <div class="filter">
                                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                      </div>
                                    </div>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="x_content">
                                    <div class="col-md-9 col-sm-12 ">
                                      <div class="demo-container" style="height:280px">
                                        <div id="chart_plot_02" class="demo-placeholder"></div>
                                      </div>
                                      <br>
                                      <div class="tiles">
                                        <div class="col-md-4 tile">
                                          <h2>Total Servicios</h2>
                                          <h2>52</h2>
                                          <span class="sparkline11 graph" style="height: 160px;">
                                               <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                          </span>
                                        </div>
                                        <div class="col-md-4 tile">
                                          <h2>Total Recaudado en Bs.</h2>
                                          <h2>415.000 Bs.</h2>
                                          <span class="sparkline22 graph" style="height: 160px;">
                                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                          </span>
                                        </div>
                                        <div class="col-md-4 tile">
                                         <h2>Total Recaudado en Dolar.</h2>
                                          <h2>50.000$</h2>
                                          <span class="sparkline11 graph" style="height: 160px;">
                                                 <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12 ">
                                      <div>
                                        <div class="x_title">
                                          <h2><strong class="text-warning fa fa-warning"></strong><strong> Novedades Importantes </strong><strong class=" text-warning fa fa-warning"></strong></h2>
                                          <ul class="nav navbar-right panel_toolbox">
                                            <li class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="#">Settings 1</a>
                                                  <a class="dropdown-item" href="#">Settings 2</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                          </ul>
                                          <div class="clearfix"></div>
                                        </div>
                                        <ul class="list-unstyled top_profiles scroll-view">
                                          <li class="media event">
                                            <a class="pull-left border-danger profile_thumb">
                                              <i class="text-danger fa fa-remove aero"></i>
                                            </a>
                                            <div class="media-body">
                                              <a class="title" href="#"><strong class="text-danger">¡Aceite Diesel Faltante!</strong></a>
                                              <p>Solo Quédan un 2 litros de aceíte.</p>
                                              <p> <small>Comprado hace 2 Meses</small>
                                              </p>
                                            </div>
                                          </li>
                                          <li class="media event">
                                            <a class="pull-left border-danger profile_thumb">
                                              <i class="text-danger fa fa-hourglass"></i>
                                            </a>
                                            <div class="media-body">
                                              <a class="title" href="#"><strong class="text-danger">¡Contra el Reloj!</strong></a>
                                              <p><strong>Quedan 13 horas para finalizar el servicio ID:A12</strong></p>
                                              <p> <small>Alpine. A110.</small>
                                              </p>
                                            </div>
                                          </li>
                                          <li class="media event">
                                            <a class="pull-left border-success profile_thumb">
                                              <i class="text-success fa fa-check-square-o text-center"></i>
                                            </a>
                                            <div class="media-body">
                                              <a class="title" href="#"><strong class="text-success">¡7 Ingresos de Servicio hoy!</strong></a>
                                              <p><strong>Ver los servicios nuevos. </strong></p>
                                              <p> <small>5 Cambio de Silenciadores.</small>
                                              </p>
                                            </div>
                                          </li>
                                          <li class="media event">
                                            <a class="pull-left border-danger profile_thumb">
                                              <i class="text-danger fa fa-gear "></i>
                                            </a>
                                            <div class="media-body">
                                              <a class="title" href="#"><strong class="text-danger">¡Compresor Pesentando Fallas!</a></strong>
                                              <p><strong>Cambiar Manguera de aire </strong> </p>
                                              <p> <small>4 años usandose.</small>
                                              </p>
                                            </div>
                                          </li>
                                          <li class="media event">
                                            <a class="pull-left border-primary profile_thumb">
                                              <i class="text-primary fa fa-bars green"></i>
                                            </a>
                                            <div class="media-body">
                                              <a class="title" href="#"><strong class="text-primary">Dotacion de Uniforme</strong></a>
                                              <p><strong class="text-primary">Se aproxima la fecha de dotacion de uniforme.</strong></p>
                                              <p> <small>Exactamente en la fecha; 12/12/2022.</small>
                                              </p>
                                            </div>
                                          </li>
                                          <li class="media event">
                                            <a class="pull-left border-danger profile_thumb">
                                              <i class="text-danger fa fa-hourglass "></i>
                                            </a>
                                            <div class="media-body">
                                              <a class="title" href="#"><strong class="text-danger">¡Contra el Reloj!</strong></a>
                                              <p><strong>Queda 1 dia para finalizar el servicio ID:A15</strong></p>
                                              <p> <small>Celica II.</small>
                                              </p>
                                            </div>
                                          </li>
                                          <li class="media event">
                                            <a class="pull-left border-danger profile_thumb">
                                              <i class="text-danger fa fa-gear "></i>
                                            </a>
                                            <div class="media-body">
                                              <a class="title" href="#"><strong class="text-danger">¡Gas de Soldadura Agotandose!</strong></a>
                                              <p><strong>Comprar Bombona Nueva </strong></p>
                                              <p> <small>12 Sales Today</small>
                                              </p>
                                            </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                                 <!-- /grafica contenido-->
                    
           

                  </div>
                </div>
              </div>
            </div>
         

              
    </div>
</div>
</body>

        <!-- /page content -->
 @stop
        
