@extends('backend.base')

@section('contenedor')
    <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">DASHBOARD \ <span style="color: blue;">VETERINARIOS</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Administraci&oacute;n de Veterinarios</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                {!! Form::open() !!}

                                <div class="form-group col-lg-6">
                                    <i class="fa fa-user"></i>
                                    {!! Form::label('account', 'Nombre de Usuario') !!}
                                    {!! Form::text('account', Input::old('account'), array('class'=>'form-control')) !!}
                                </div>

                                <div class="form-group col-lg-6">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    {!! Form::label('email', 'Correo del Veterinario') !!}
                                    {!! Form::text('email', Input::old('email'), array('class'=>'form-control')) !!}
                                </div>

                                <div class="form-group col-lg-6">
                                    <i class="glyphicon glyphicon-text-color"></i>
                                    {!! Form::label('first_name', 'Nombre del Veterinario:') !!}
                                    {!! Form::text('first_name', Input::old('first_name'), array('class'=>'form-control')) !!}
                                </div>

                                <div class="form-group col-lg-6">
                                    <i class="glyphicon glyphicon-text-color"></i>
                                    {!! Form::label('last_name', 'Apellido del Veterinario:') !!}
                                    {!! Form::text('last_name', Input::old('last_name'), array('class'=>'form-control')) !!}
                                </div>

                                <div class="form-group col-lg-6">
                                    <i class="glyphicon glyphicon-home"></i>
                                    {!! Form::label('address', 'Direcci&oacute;n del Veterinario:') !!}
                                    {!! Form::text('address', Input::old('address'), array('class'=>'form-control')) !!}
                                </div>

                                <div class="form-group col-lg-6">
                                    <i class="glyphicon glyphicon-phone"></i>
                                    {!! Form::label('cellphone', 'Telefono de Contacto:') !!}
                                    {!! Form::text('cellphone', Input::old('cellphone'), array('class'=>'form-control')) !!}
                                </div>

                                {!! Form::close() !!}
                            </div>

                            <div class="col-lg-12 text-center">
                                {!! Form::submit('Registrar Veterinario', array('class'=>'btn btn-info')) !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id del Veterinario</th>
                                <th>Nombre del Veterinario</th>
                                <th>Correo Electr&oacute;nico</th>
                                <th>Direcci&oacute;n</th>
                                <th>Activo</th>
                                <th>Acciones</th>
                                <th>Contactar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Lolo Bird</span></td>
                                <td>@twitter</td>
                                <td>100090</td>
                                <td>100090</td>
                                <td>
                                    <button class="btn btn-danger col-lg-12">Suspender Veterinario</button>
                                </td>
                                <td>
                                    <button class="btn btn-info col-lg-12">Llamar Veterinario</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
@endsection