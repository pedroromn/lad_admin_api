@extends('Layouts.base');





@section('cabecera')

<title>Dashboard</title>
    
@stop






{{-- INICIO DE LA SECCIÓN BORDE --}}

@section('borde')

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            


            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Consola de Administrador</a>
            </div>
            <!-- /.navbar-header -->


            <ul class="nav navbar-top-links navbar-right">

            	<li><p><b>{{$user->name. ' '. $user->lastname}}</b></p> </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Acerca de</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{URL::to('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->


            <div class="navbar-default sidebar" role="navigation">

                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                                               

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Administrador<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Datos personales</a>
                                </li>

                                <li>
                                    <a href="#">Modificar password</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Proyectos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Lista de Proyectos</a>
                                </li>
                                <li>
                                    <a href="#">Crear Proyecto</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                    </ul>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>


@stop


{{-- FINAL DE LA SECCIÓN BORDE --}}







{{-- INICIO DE LA SECCIÓN CONTENIDO
 --}}


@section('contenido')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


        <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h1>Bienvenido!</h1>
                        <p>Se encuentra en la interfaz de administrador, desde la cual podrá gestionar, el contenido dinámico de la aplicación móvil informativa del Laboratorio de Artes Digitales: [Nombre App] </p>
                        
                        <p><a href="#" class="btn btn-primary btn-lg" role="button">Gestionar Datos</a>
                        </p>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    </div>





@stop

{{-- FINAL DE LA SECCIÓN CONTENIDO
 --}}


@section('scripts')

@stop

