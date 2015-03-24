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


                                        <div class="form-group">
                                            {{ Form::label('synopsis', 'Sinopsis') }}
                                            {{ Form::textarea('synopsis', Input::old('synopsis'), array('class' => 'form-control', 'required' => 'required')) }}
                                        </div>


                                    </div> 


                                    <div class="col-lg-6">
                                        

                                        <div class="row">

                                            <div class="col-lg-6">

                                                <div class="form-group">
                                                    @if($project->image != null)
                                                        {{ HTML::image($project->image, '', array( 'width' => 235, 'height' => 150) ) }}
                                                    @else
                                                          {{ HTML::image('img/projects/notimage.jpg', '', array( 'width' => 570, 'height' => 300) ) }}  
                                                    @endif
                                                    
                                                </div>


                                                <div class="form-group">
                                                    @if($project->slide2 != null)
                                                        {{ HTML::image($project->slide2, '', array( 'width' => 235, 'height' => 150) ) }}
                                                    @else
                                                          {{ HTML::image('img/projects/notimage.jpg', '', array( 'width' => 570, 'height' => 300) ) }}  
                                                    @endif
                                                    
                                                </div>

                                                <div class="form-group">
                                                    @if($project->slide4 != null)
                                                        {{ HTML::image($project->slide4, '', array( 'width' => 235, 'height' => 150) ) }}
                                                    @else
                                                          {{ HTML::image('img/projects/notimage.jpg', '', array( 'width' => 570, 'height' => 300) ) }}  
                                                    @endif
                                                    
                                                </div>

                                            </div>
                                            
                                            <div class="col-lg-6">    

                                                <div class="form-group">
                                                    @if($project->slide1 != null)
                                                        {{ HTML::image($project->slide1, '', array( 'width' => 235, 'height' => 150) ) }}
                                                    @else
                                                          {{ HTML::image('img/projects/notimage.jpg', '', array( 'width' => 570, 'height' => 300) ) }}  
                                                    @endif
                                                    
                                                </div>

                                                <div class="form-group">
                                                    @if($project->slide3 != null)
                                                        {{ HTML::image($project->slide3, '', array( 'width' => 235, 'height' => 150) ) }}
                                                    @else
                                                          {{ HTML::image('img/projects/notimage.jpg', '', array( 'width' => 570, 'height' => 300) ) }}  
                                                    @endif
                                                    
                                                </div>

                                            
                                            </div>
                                            
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