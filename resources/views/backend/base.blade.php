<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Asoguau Backend</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('icons/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('icons2/flaticon.css') }}" rel="stylesheet">
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand" href="index.html">Asoguau

            </a>
        </div>

        <div class="notifications-wrapper">
            <ul class="nav pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i> Opciones de Usuario <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav  class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="{{ asset('assets/img/user.jpg') }}" class="img-circle" />
                    </div>
                </li>
                <li>
                    <a  href="#"> <strong> Romelia Alexendra </strong></a>
                </li>

                <li>
                    <a class="active-menu"  href="{{ url('backend') }}"><i class="fa fa-dashboard "></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap "></i>M&oacute;dulos <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-cogs "></i>Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ route('usuarios.index') }}"><i class="glyphicon glyphicon-briefcase"></i>
                                        Administrar</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i>Activos</a>
                                </li>
                                <li>
                                    <a href="{{ url('usuarios_inactivos') }}"><i class="fa fa-thumbs-down"></i>Inactivos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="flaticon-health10 "></i>Veterinarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ route('vets.index') }}"><i class="glyphicon glyphicon-briefcase"></i>
                                        Administrar</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i>Activos</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-down"></i>Inactivos</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-paw"></i>Mascotas<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a><i class="flaticon-toucan"></i>Aves</a>
                                    <a><i class="flaticon-dog48"></i> Perros</a>
                                    <a><i class="flaticon-cat41"></i>Gatos</a>
                                    <a><i class="flaticon-fish24"></i>Peces</a>
                                    <a><i class="flaticon-gecko2"></i>Reptiles</a>
                                    <a><i class="flaticon-rabbit5"></i>Marsupiales</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blank.html"><i class="fa fa-dashcube "></i>Donaciones</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- /. SIDEBAR MENU (navbar-side) -->
    @yield('contenedor')
</div>
<footer >
    &copy; 2015 Asoguau | By : <a target="_blank">Alumnos de Sistema de Informaci&oacute;n II</a>
</footer>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{ asset('assets/js/jquery-1.11.1.js') }}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>


</body>
</html>
