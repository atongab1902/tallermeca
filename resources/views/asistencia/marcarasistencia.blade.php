<!DOCTYPE <html>
<html lang="<en>">
	<head>
					
		<title>asistencia Inversiones Servimeca C.A.</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	    
		<link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<!-- NProgress -->
		<link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
		<!-- bootstrap-daterangepicker -->
		<link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
		<!-- Custom Theme Style -->	  
		<link rel="stylesheet" type="text/css" href="{{ asset('reloj/style.css')}}">
		  
	</head>

<body class="bg-light">  
@includeif('partials.errors')

		     	<div class="container">
		     		<div class="m-5 d-flex justify-content-center align-items-center" style="height: 600px;">
						<div class="container" style="width:25rem; height: 25rem;">
								<div class=" m-5 d-flex justify-content-center align-items-center" style="height: 2rem;">
								    <div class="reloj text-center ">
							        	<p class="fecha"></p>
							       		<p class="tiempo"></p>
							   		 </div>
								</div>

								<div class="row pt-3 border bg-light">
								  	<div class="col-lg-12 col-sm-12">
									  @foreach ($asistencias as $asistencia)

									    <form method="POST" action="{{ route('asistencia.store') }}"  role="form" enctype="multipart/form-data">
											@csrf

											@include('asistencia.form')

										</form>
										@endforeach
								    	<form id="attendance">
								          <div class="form-group">
								            <select class="form-control" name="status">
								              <option value="in">Hora de Entrada</option>
								              <option value="out">Hora de Salida</option>
								            </select>
								          </div>
								      		<div class="form-group has-feedback">
								        		<input type="text" class="form-control input-lg" id="employee" name="employee" required>
								        		<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
								      		</div>
								    			<div class="col-xs-1 justify-content-center">
								          			<button type="submit" class="btn btn-secondary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i> Marcar asistencia</button>
								        		</div>
								      		</div>
								    	</form>
								  	</div>
										<div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
								      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
								    </div>
										<div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
								      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
								    </div>
								</div>
					{!! $asistencias->links() !!}
					
			  	</div>
			   </div>

				  <br>
	
		<script src="{{asset('reloj/script.js')}}"></script>		  
		<script src="jquery-ui-1.10.3.min"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>