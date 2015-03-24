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
                        Registrar nuevo proyecto
                    </div>

                    <div class="panel-body">
                        <div class="row">


                                {{Form::open(array('action' => 'ProjectController@store', 'method' => 'post', 'files' => true)) }}
                                
                                    
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            {{ Form::label('title', 'Título') }}
                                            {{ Form::text('title', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Título del proyecto')) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('direction', 'Dirección') }}
                                            {{ Form::text('direction', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Dirigido por ...')) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('description', 'Descripción') }}
                                            {{ Form::text('description', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Largometraje | Mediometraje | Cortometraje ...')) }}
                                        </div>



                                        <div class="form-group">
                                            {{ Form::label('format', 'Formato') }}
                                            {{ Form::text('format', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Formato del proyecto')) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('state', 'Estado') }}
                                            {{ Form::text('state', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Finalizado | En desarrollo | Pausado ...')) }}
                                        </div>


                                        <div class="form-group">
                                            {{ Form::label('length', 'Duración') }}
                                            {{ Form::text('length', '', array('class' => 'form-control', 'placeholder' => 'XX:YY minutos')) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('link', 'Enlace de Trailer') }}
                                            {{ Form::text('link', '', array('class' => 'form-control', 'placeholder' => 'http:// ....')) }}
                                        </div>


                                    </div> 


                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            {{ Form::label('synopsis', 'Sinopsis') }}
                                            {{ Form::textarea('synopsis', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'sinopsis ...', 'rows' => 10)) }}
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-6">

                                                <div class="form-group">
                                                    {{ Form::label('image', 'Imagen') }}
                                                    {{ Form::file('image', '', array('class' => 'form-control')) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('slide2', 'Imagen Slide 2') }}
                                                    {{ Form::file('slide2', '', array('class' => 'form-control')) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('slide4', 'Imagen Slide 4') }}
                                                    {{ Form::file('slide4', '', array('class' => 'form-control')) }}
                                                </div>

                                                <br>

                                                 <div class="form-group">
                                                    {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                                                </div> 
                                            </div>
                                            
                                            <div class="col-lg-6">    

                                                <div class="form-group">
                                                    {{ Form::label('slide1', 'Imagen Slide 1') }}
                                                    {{ Form::file('slide1', '', array('class' => 'form-control')) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('slide3', 'Imagen Slide 3') }}
                                                    {{ Form::file('slide3', '', array('class' => 'form-control')) }}
                                                </div>

                                            
                                            </div>
                                            
                                        </div>  


                                         

                                    </div>   


                                {{ Form::close() }}

                        </div>
                    </div>                
                </div>    

   
            </div>
                <!-- /.row -->
</div>