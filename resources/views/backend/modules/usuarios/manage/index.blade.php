@extends('backend.base')

@section('contenedor')
    <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">DASHBOARD \ <span style="color: blue;">Usuarios</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Administraci&oacute;n de Usuarios</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Imagen de Perfil</h3>
                                    </div>
                                    <div class="panel-body">
                                        <img src="{{ asset('img/logo.png') }}" style="width: 250px; height: 250px;
                                        margin-left: 3%;"
                                             class="img-thumbnail"
                                             alt="Responsive
                                image">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Datos Basicos</h3>
                                    </div>
                                    <div class="panel-body">

                                            @if(isset($edit))
                                                {!! Form::model($edit, ['route'=>['usuarios.update', $edit->id], 'method'=>'patch']) !!}
                                            @else
                                            {!! Form::open(array('method'=>'POST', 'route'=>'usuarios.store')) !!}
                                            @endif

                                            <div class="form-group col-lg-6">
                                                <i class="glyphicon glyphicon-text-color"></i>
                                                {!! Form::label('nombre', 'Nombre de Usuario:') !!}
                                                {!! Form::text('nombre', Input::old('first_name'), array('class'=>'form-control')) !!}
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <i class="glyphicon glyphicon-text-color"></i>
                                                {!! Form::label('apellido', 'Apellido del Usuario:') !!}
                                                {!! Form::text('apellido', Input::old('last_name'), array('class'=>'form-control')) !!}
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                                {!! Form::label('correo', 'Correo Electronico:') !!}
                                                {!! Form::email('correo', Input::old('email'), array('class'=>'form-control')) !!}
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <i class="glyphicon glyphicon-phone"></i>
                                                {!! Form::label('telefono', 'Telefono de Contacto:') !!}
                                                {!! Form::text('telefono', Input::old('telefono'), array('class'=>'form-control')) !!}
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <i class="fa fa-users"></i>
                                                {!! Form::label('idtipousuario', 'Rol del Usuario:') !!}
                                                {!! Form::select('idtipousuario', array('1'=>'Administrador', '2'=>'Usuario'), Input::old('idtipousuario'),
                                                ['class'=>'form-control']) !!}
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <i class="fa fa-users"></i>
                                                {!! Form::label('idestatususuario', 'Estatus:') !!}
                                                {!! Form::select('idestatususuario', array('1'=>'Activo', '2'=>'Inactivo'), Input::old('idestatususuario'),
                                                ['class'=>'form-control']) !!}
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <i class="fa fa-key"></i>
                                                {!! Form::label('password', 'Contrase&ntilde;a:') !!}
                                                {!! Form::password('password', array('class'=>'form-control')) !!}
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <i class="fa fa-key"></i>
                                                {!! Form::label('repassword', 'Repetir Contrase&ntilde;a:') !!}
                                                {!! Form::password('repassword', array('class'=>'form-control')) !!}
                                            </div>
                                    </div>
                                </div>
                            </div>

                            @if(isset($edit))
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-success">Actualizar Usuario</button>
                                </div>
                            @else
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-success">Registrar Usuario</button>
                                </div>
                            @endif
                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        @if(!$usuarios->isEmpty())
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id del Usuario</th>
                                    <th>Nombre del Usuario</th>
                                    <th>Apellido del Usuario</th>
                                    <th>Rol</th>
                                    <th>Correo Electr&oacute;nico</th>
                                    <th>Telefono</th>
                                    <th style="text-align: center">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->id }}</td>
                                        <td>{{ $usuario->nombre }}</td>
                                        <td>{{ $usuario->apellido }}</td>
                                        <td>{{ $usuario->rol->nombre }}</td>
                                        <td>{{ $usuario->correo }}</td>
                                        <td>{{ $usuario->telefono }}</td>
                                        <td>
                                            {!! Form::open(array('method'=>'DELETE', 'route'=>['usuarios.destroy', $usuario->id])) !!}

                                            {!! Form::submit('Suspender Usuario', array('class'=>'btn btn-danger
                                            col-lg-12')) !!}

                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            <a role="button" href="{{ URL::to("/usuarios/{$usuario->id}/edit") }}"
                                               class="btn btn-info col-lg-12">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $usuarios->render() !!}
                        @else
                            No existe registro para mostrar
                        @endif
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
@endsection