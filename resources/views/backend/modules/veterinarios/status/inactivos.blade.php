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