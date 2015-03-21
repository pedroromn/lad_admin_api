<div class="container-fluid">
    
{{--             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ $project->title }}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 --}}

            <br>

            <div class="row">


                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Tabs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Inicio</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Perfil</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Medios</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Datos</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane fade in active" id="home">
                                    <br>
                                    <h4>Proyecto #: {{$project->id}}</h4>
                                    <h4>{{$project->title}}</h4>
                                    <p>{{$project->synopsis}}</p>
                                </div>

                                <div class="tab-pane fade" id="profile">

                                    <br>

                                    <p style="display: inline;"> <h4>Dirigido por: {{$project->direction}}</h4> </p>
                                    <p style="display: inline;"> <h4>Descripción: {{$project->description}}</h4> </p>
                                    <p style="display: inline;"> <h4>Formato: {{$project->format}}</h4> </p>
                                    <p style="display: inline;"> <h4>Duración: {{$project->length}} minutos</h4> </p>
                                   
                                </div>

                                <div class="tab-pane fade" id="messages">

                                    <br>

                                    <p style="display: inline;"> <h4>Trailer: <a href="{{$project->link}}" title="trailer" target="_blank"> {{$project->link}}</a></h4></p>

                                    <p style="display: inline;"> <h4>Ruta de imagen: {{$project->image}}</h4> </p>
                                    @if($project->image != null)
                                        {{ HTML::image($project->image, '', array( 'width' => 570, 'height' => 300) ) }}
                                    @else
                                          {{ HTML::image('img/projects/notimage.jpg', '', array( 'width' => 570, 'height' => 300) ) }}  
                                    @endif

                                    
                                </div>

                                <div class="tab-pane fade" id="settings">

                                    <br>

                                    <h4> --- Fecha y hora según configuración del servidor ---</h4>

                                    <p style="display: inline;"> <h4>Proyecto creado: {{$project->created_at}}</h4> </p>
                                    <p style="display: inline;"> <h4>Ultima modificación: {{$project->updated_at}}</h4> </p>


                                    
                                </div>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                
  
            </div>
                <!-- /.row -->
</div>