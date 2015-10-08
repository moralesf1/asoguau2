@extends('index')

@section('container')
	<!-- end: HEAD -->
	<!-- start: BODY -->

		<div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="logo">
			<img src="img/logo666.png" style="width:40%; height:35%;">
			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Ingresar</h3>

						<!-- start: LOGIN BOX -->
						{!!Form::open(['url' => 'login']) !!}
 
				            @if(Session::has('error_message'))

				            <div class="row">
				              <div class="errorHandler alert alert-danger col-md-offset-3 col-md-7"><h4>  {{ Session::get('error_message') }}</h4></div>
				           	</div>
				            @endif

		    				<div class="errorHandler alert alert-danger no-display">
								<i class="fa fa-remove-sign"></i> Usted contiene algunos errores.
							</div>
							<fieldset>
						<div class="form-group">
							<span class="input-icon">
								
								{!!Form::text('correo','ejemplo@xxx.com',['class' =>'form-control','type' => 'text'])!!}
								<i class="fa fa-user"></i> </span>
							<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
							<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								{!!Form::password('password',['class' =>'form-control'])!!}
								<i class="fa fa-lock"></i>
								<a class="forgot" href="#">
									Olvid&eacute la clave
								</a> </span>
						</div>
						<div class="form-actions">
							
							<button type="submit" class="btn btn-bricky pull-right">
								Ingresar <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						<div class="new-account">
							 	&iquestNo esta Registrado?
						<!--	<a href={{"url('comun')"}} class="register"> -->
								&iexclUnete!
							</a>
						</div>
					</fieldset>
					
				 {!! Form::close() !!}
			

			</div>
			<!-- end: LOGIN BOX -->
			<!-- start: FORGOT BOX -->
			<div class="box-forgot">
				<h3>&iquestOlvido su Clave?</h3>
				<p>
					Ingresa tu correo para poder recuperarla.
				</p>
				<form class="form-forgot">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> La informacion que ingreso no es la correcta.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Correo">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Regresar
							</a>
							<button type="submit" class="btn btn-bricky pull-right">
								Enviar <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			


			<!-- end: FORGOT BOX -->
			<!-- start: REGISTER BOX -->
			<div class="box-register">
				<h3>Registrarse</h3>


				<!-- start: REGISTER BOX -->
				<form class="form-register">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> La informacion que ingreso no es la correcta.
					</div>
					<fieldset>
						<div class="form-group">
							<input type="text" class="form-control" name="nombre" placeholder="Nombre">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="apellido" placeholder="Apellido">
						</div>
						<div class="form-group">
							<span class="input-icon">
							<input type="text" class="form-control" name="telefono" placeholder="Telefono">
							<i class="clip-phone-4"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
							<input type="email" class="form-control" name="correo" placeholder="Correo">
							<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
							<input type="text" class="form-control" name="usuario" placeholder="Usuario">
							<i class="clip-user-3"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="clave" name="password" placeholder="Clave">
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" name="confirmar_clave" placeholder="Confirmar Clave">
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Regresar
							</a>
							<button type="submit" class="btn btn-bricky pull-right">
								Enviar <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
			</form>
			</div>
			<!-- end: REGISTER BOX -->
			<!-- start: COPYRIGHT -->
			<div class="copyright">
				&copy; Fundaci&oacuten Asoguau, Powered by Acto Voluntario - Todos los derechos reservados.
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
@endsection