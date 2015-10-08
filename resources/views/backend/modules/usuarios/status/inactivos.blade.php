@extends('backend.base')

@section('contenedor')
    <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">DASHBOARD \ <span style="color: blue;">Usuarios Inactivos</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        @if(!$inactivos->isEmpty())
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
                                @foreach($inactivos as $inactivo)
                                    <tr>
                                        <td>{{ $inactivo->id }}</td>
                                        <td>{{ $inactivo->nombre }}</td>
                                        <td>{{ $inactivo->apellido }}</td>
                                        <td>{{ $inactivo->rol->nombre }}</td>
                                        <td>{{ $inactivo->correo }}</td>
                                        <td>{{ $inactivo->telefono }}</td>
                                        <td>
                                            {!! Form::open(array('method'=>'POST', 'url'=>['retorno', $inactivo->id])) !!}

                                            {!! Form::submit('Recuperar', array('class'=>'btn btn-warning col-lg-12')) !!}

                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $inactivos->render() !!}
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