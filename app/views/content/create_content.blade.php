<div class="container-fluid">
    
 {{--            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Proyecto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> --}}

            <br>

            <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrar nuevo proyecto
                        </div>

                        <div class="panel-body">
                            <div class="row">


                                


                                    <form role="form">
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
                                                {{ Form::text('description', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Largometraje | Cortometraje ...')) }}
                                            </div>



                                            <div class="form-group">
                                                {{ Form::label('format', 'Formato') }}
                                                {{ Form::text('format', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Formato del proyecto')) }}
                                            </div>


                                            <div class="form-group">
                                                {{ Form::label('length', 'Duración') }}
                                                {{ Form::text('length', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'XX:YY minutos')) }}
                                            </div>


                                            <div class="form-group">
                                                {{ Form::label('state', 'Estado') }}
                                                {{ Form::text('state', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Finalizado | En desarrollo | Pausa ...')) }}
                                            </div>


                                        </div> 


                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                {{ Form::label('link', 'Enlace de Trailer') }}
                                                {{ Form::text('link', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'http:// ....')) }}
                                            </div>


                                            <div class="form-group">
                                                {{ Form::label('synopsis', 'Sinopsis') }}
                                                {{ Form::textarea('link', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'sinopsis ...', 'rows' => 6)) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('image_name', 'Nombre Imagen') }}
                                                {{ Form::text('image_name', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nombre de la imagen ....')) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('image', 'Imagen') }}
                                                {{ Form::file('image', '', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'sinopsis ...', 'rows' => 5)) }}
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