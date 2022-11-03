
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
    <link href="././vendor/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendor/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendor/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="./vendor/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('modales/jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css')}}">  

    <script src="{{ asset('modales/js/bootstrap.bundle.js')}}"></script>
    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('vendorsbootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- ECharts -->
    <script src="{{ asset('vendors/echarts/dist/echarts.min.js')}}"></script>
    <script src="{{ asset('vendors/echarts/map/js/world.js')}}"></script>



  </head>

  

     <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <img src="images/logo.jpeg" class="img-circle profile_img" width="10%"> 
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('index2') }}" class="site_title"></i> <span class="pl-3 fa fa-gear">  IS Process Taller</span></a>
            </div>


            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/logouni.jpg" width="60rem" height="55rem" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido </span>
                <h2>Alexis Correa</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Reportes</h3>
                <ul class="nav side-menu">
                  <li><a href="index2"><i class="fa fa-home"></i><span>Panel de Control</span></a></li>
                </ul>
               <h3>Administraciòn</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-calendar"></i> Horarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="asistencia">Asistencia</a></li>
                      <li><a href="{{ url('horario')}}">Horarios</a></li>
                      <li><a href="agregar_horario.php">Agregar Horario a Empleados</a></li>
                      <li><a href="lista_empleados.php">Lista de Empleados</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-text"></i>Nomina<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="adelanto_efectivo.php">Adelanto en Efectivo</a></li>
                      <li><a href="deducciones.php">Deducciones</a></li>
                      <li><a href="tiempo_extra.php">Tiempo Extra</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-suitcase"></i> Tabulador de Costos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li></li>
                    <li><a href="registro_cliente.php">Registro cliente-Servicios</a></li>
                    <li></li>
                    <li><a href="#">Servicios pendientes</a></li>
                  </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Opciones">
                <span class="fa fa-cog text-white"  aria-hidden="true"></span>
              </a>



              <a data-toggle="tooltip" title="Ayuda" ><span class=" text-white fa fa-question" data-bs-toggle="modal" data-bs-target="#miModal3" ></span>
              </a>
                <div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        Proximamente
                      </div>
                      <div class="modal-body">
                        <h1>Proximamente</h1>
                      </div>
                      <div class="modal-footer">
                        
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>

              <a data-toggle="tooltip" data-placement="top" title="Información"><span class="fa fa-info text-white" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="{{ route('logout') }}"   
                                                      onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                     
                <span class="fa fa-unlock text-white" aria-hidden="true"></span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/logouni.jpg" alt="">Alexis Correa
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Perfil</a>
                        <a class="dropdown-item"  href="javascript:;"><span>Opciones</span>
                        </a>
                    <a class="dropdown-item"  href="reset-password.php">Cambia tu Contraseña</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                    </form>
                    </div>
                  </li>
                  <li role="presentation" class="nav-item dropdown open">

                    <a type="button" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bell"></i>
                      <span class="badge badge-danger navbar-badger text-white">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/user1.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Gabriel Hernandez</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Llegó tarde.
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/user2.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Ana Sanchez</span>
                            <span class="time">20 mins ago</span>
                          </span>
                          <span class="message">
                            Acaba de marcar su asistencia a tiempo.
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/user3.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Camila Mendes</span>
                            <span class="time">34 mins ago</span>
                          </span>
                          <span class="message">
                            Acaba de marcar su asistencia a tiempo.
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/user4.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Antonio Lopez</span>
                            <span class="time">42 mins ago</span>
                          </span>
                          <span class="message">
                            Acaba de marcar su asistencia a tiempo.
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>Mostrar todas las Notificaciones</strong>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>        <!-- /top navigation -->
          
@yield('seccion')

<!-- footer content -->

        <footer>
          <div class="pull-right">
            ©2022 Derechos Reservados. UPTA "Federico Brito Figueroa" <a href="">|| UPTA  Aragua</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      </div>
 
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    </body>
</html>