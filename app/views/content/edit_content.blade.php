<div class="container-fluid">
    
    {{--         <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Proyecto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> --}}

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
                        Modificar datos del proyecto
                    </div>

                    <div class="panel-body">
                        <div class="row">

                                {{ Form::model($project, array('route' => array('project.update', $project->id), 'method' => 'PUT', 'files' => true)) }}
                                
                                    
                                    <div class="col-lg-6">



                                        <div class="form-group">
                                            {{ Form::label('title', 'Título') }}
                                            {{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'required' => 'required')) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('direction', 'Dirección') }}
                                            {{ Form::text('direction', INput::old('direction'), array('class' => 'form-control', 'required' => 'required', )) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('description', 'Descripción') }}
                                            {{ Form::text('description', Input::old('description'), array('class' => 'form-control', 'required' => 'required')) }}
                                        </div>



                                        <div class="form-group">
                                            {{ Form::label('format', 'Formato') }}
                                            {{ Form::text('format', Input::old('format'), array('class' => 'form-control', 'required' => 'required')) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('state', 'Estado') }}
                                            {{ Form::text('state', Input::old('state'), array('class' => 'form-control', 'required' => 'required')) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('length', 'Duración') }}
                                            {{ Form::text('length', Input::old('length'), array('class' => 'form-control')) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('link', 'Enlace de Trailer') }}
                                            {{ Form::text('link', Input::old('link'), array('class' => 'form-control')) }}
                                        </div>


                                    </div> 


                                    <div class="col-lg-6">

                                        


                                        <div class="form-group">
                                            {{ Form::label('synopsis', 'Sinopsis') }}
                                            {{ Form::textarea('synopsis', Input::old('synopsis'), array('class' => 'form-control', 'required' => 'required')) }}
                                        </div>

                                        <div class="form-group">
                                            @if($project->image != null)
                                                {{ HTML::image($project->image, '', array( 'width' => 570, 'height' => 300) ) }}
                                            @else
                                                  {{ HTML::image('img/projects/notimage.jpg', '', array( 'width' => 570, 'height' => 300) ) }}  
                                            @endif
                                            
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('image', 'Imagen') }}
                                            {{ Form::file('image', '', array('class' => 'form-control')) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                                        </div>    

                                    </div>   


                                {{ Form::close() }}

                        </div>
                    </div>                
                </div>    

   
            </div>
                <!-- /.row -->
</div>