<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Asoguau</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/main-responsive.css">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="css/perfect-scrollbar.css">
		<link rel="stylesheet" href="{{  asset('css/estilo.css') }}">
		<link rel="stylesheet" href="css/social-buttons-3.css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<body class="login example1">

		<div class="row" id="fondo_menu">
			
				<ul class="nav navbar-nav navbar">
					<li   role="presentation" class="active sombreado text-center">
						<a href="index.php?p=1">
							<h4 class="panel-default text-center ">
								<span class="glyphicon glyphicon-home"></span>
							</h4> 
							Inicio
						</a>
					</li>
					
                    <li class="sombreado" role="presentation">
                    	<a href="#">
                    		<h4   class="panel-default text-center ">
                    			<span class="glyphicon glyphicon-user"></span>
                    		</h4>
                    		&iquestQuienes somos?
                    	</a>
                    </li>
                    
					<li class="sombreado text-center" role="presentation">
                    	<a href="noticia">
                    		<h4   class="panel-default text-center ">
                    			<span class="glyphicon glyphicon-list-alt"></span>
                    		</h4>
                    		Noticias
                    	</a>
                    </li>
                    
					
					<li class="sombreado text-center" role="presentation">
						<a href="#">
							<h4 class="panel-default text-center"  >
								<span class="glyphicon glyphicon-earphone"></span>
							</h4>
							Contactanos
						</a>
					</li>
                    
				</ul>
                
                
                 <ul class="nav navbar-nav navbar-right" style="margin-right: 4.1%;">
                	
                		

                		@if (Auth::guest())
					       <li  class="sombreado text-center" role="presentation" >
	                		<a href="login">
	                			<h4 class="panel-default text-center ">
	                				<span class="glyphicon glyphicon-log-in"></span>
	                			</h4>


	                				Ingresar
	                			
	                		</a>
	                		</li>
					    @else
			               		<li  class="sombreado text-center" role="presentation" >
			               		 <h2> {!! Auth::user()->nombre !!} {!! Auth::user()->apellido !!}</h2>
								</li>			               			
								<li  
									class="sombreado text-center" role="presentation" ><a href="{{ action('AuthController@logOut') }}">Log out</a>
      							</li>
				        @endif


                 </ul>
</div>
		@yield('container')	
		
			<!-- end: COPYRIGHT -->
		
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="clip-one/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="clip-one/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="clip-one/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="clip-one/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="clip-one/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="clip-one/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="clip-one/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="clip-one/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="clip-one/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="clip-one/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="clip-one/assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="clip-one/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="clip-one/assets/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>


	<!-- end: BODY -->
</html>