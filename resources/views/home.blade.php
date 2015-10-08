@extends('index')

@section('container')
				

		<!--END MENU-->
		<div class="row" id="bloque2">
			<div class="col-md-4">
			<div class="row" id="redes-sociales">
				<img src="img/logo666.png" class="img-responsive" style="width:50%; height:50%; margin-left:28%;">
				<button class="btn btn-facebook botones-sociales">
										<i class="fa fa-facebook"></i>
										|Facebook
				</button>
			</div>
				<div class="row">
				<button class="btn btn-twitter botones-sociales">
										<i class="fa fa-twitter"></i>
										|Twitter
				</button>
				</div>
				<div class="row">
				<button class="btn btn-instagram botones-sociales">
										<i class="fa fa-camera-retro"></i>
										|Instagram
				</button>
				</div>
			</div>
			<!--carrusel-->
			<div class="col-md-8" id="carrusel">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="img/perros.gif" alt="perros1">
					  <div class="carousel-caption">
						...
					  </div>
					</div>
					<div class="item">
					  <img src="img/perros.gif" alt="perros2">
					  <div class="carousel-caption">
						...
					  </div>
					</div>
					...
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Antes</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Despues</span>
				  </a>
				</div>
			</div>
		</div>
         
      </div>
	  
		  
	<!--Comienzo de NOTICIAS-->
				<div class="row" id="noticias">
					<div class="col-md-6">
					  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  
					  <h4 class="text-center">NOTICIAS ASOGUAU</h4>
					  
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body">
					</div>
					</div>
				  </div>
				   

				 <!--SEGUNDA NOTICIA DE ASOGUAU-->
							  
							  
				  
				</div>
			</div>
			
		<!--FIN DE NOTICIAS ASOGUAU-->
	
	<!--COMIENZO DE NOTICIAS ASORED-->
	<div class="col-md-6">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			
				  
					<h4 class="text-center">NOTICIA ASORED</h4>
					  <!--PRIMERA NOTICIA DE ASORED-->
					<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						  
						  
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body">
					  </div>
					</div>
				  </div>
				 </div>
			
			</div>
			</div><!--FIN DE NOTICIAS ASORED-->
			</div>
			
			<h1>You have arrived.</h1>
			<a href="{{ action('AuthController@logOut') }}">Log out</a>
		
	<!-- end: HEAD -->
	<!-- start: COPYRIGHT -->
			<div class="copyright">
				&copy; Fundaci&oacuten Asoguau, Powered by Acto Voluntario - Todos los derechos reservados.
			</div>
@endsection