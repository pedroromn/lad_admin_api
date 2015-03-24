<div class="container-fluid">
    
            {{-- <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Proyectos Registrados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div> --}}
            <!-- /.row -->
            <br>

            <div class="row">


               @if(Session::has('error_msg'))
                  <div class="alert alert-danger alert-dismissable">{{ Session::get('error_msg') }}</div>
                @endif

                @if(Session::has('msg'))
                  <div class="alert alert-success alert-dismissable">{{ Session::get('msg') }}</div>
                @endif 



                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Proyectos Registrados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Dirección</th>
                                            <th>Descripción</th>
                                            <th>Formato</th>
                                            <th>Duración</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($projects as $key => $value)

                                            <tr>
                                                <td>{{$value->title}}</td>
                                                <td>{{$value->direction}}</td>
                                                <td>{{$value->description}}</td>
                                                <td>{{$value->format}}</td>
                                                <td>{{$value->length}}</td>
                                                <td>{{$value->state}}</td>
                                                <td>

                                                        <a class="btn btn-small btn-success" href="{{URL::to('project/'. $value->id)}}" title="Ver Detalles"><i class="fa fa-search" ></i></a>

                                                        <a class="btn btn-small btn-info" href="{{URL::to('project/'.$value->id.'/edit')}}" title="Modificar" ><i class="fa fa-pencil" ></i></a>
                                                        
                                                        <a type="submmit"  data-number="{{$value->id}}" class="btn btn-small btn-danger delete" data-toggle="modal" title="Eliminar"><i class="fa fa-trash-o" ></i></a> 


                                                </td>
                                                
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
            </div>
                <!-- /.row -->


                            <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                                            <h4 class="modal-title" id="myModalLabel">Alerta</h4>
                                        </div> 
                                        <div class="modal-body">
                                            <p>Está seguro de eliminar el proyecto seleccionado ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            {{ Form::open(array('action' => 'ProjectController@postDestroy', 'method' => 'POST'), array('role' => 'form'))  }}
                                            {{ Form::hidden('project_id', null, ['id' => 'id_project']) }}
                                            {{ Form::submit('Aceptar', array('class'=> 'btn btn-success')) }}
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


</div>