<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plataforma de Administrador</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}  

    <!-- MetisMenu CSS -->
    {{ HTML::style('css/metisMenu.min.css') }}

    <!-- Custom CSS -->
    {{ HTML::style('css/sb-admin-2.css') }}


    <!-- Custom Fonts -->
    {{ HTML::style('css/font-awesome.min.css') }}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Iniciar sesión</h3>
                    </div>
                    <div class="panel-body">


                        {{ Form::open(array('url' => 'login', 'method' => 'POST', 'role' => 'form', 'accept-charset'=>'UTF-8') ) }}

                            <fieldset>

                                <div class="form-group">
                                    {{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required', 'autofocus' => 'autofocus'] ) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required'] ) }}
                                </div>

                             
                                <div class="checkbox">
                                    <label>
                                      {{ Form::checkbox('remember', 1, null, ['id' => 'login-remember']) }} Recordarme
                                    </label>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                {{Form::button('Login', array('type' => 'submit', 'class' => 'btn btn-lg btn-success btn-block')) }}


                            
                            </fieldset>

                        {{ Form::close() }}


                    </div>
                </div>

                @if(Session::has('error_msg'))
                  <div class="alert alert-danger">{{ Session::get('error_msg') }}</div>
                @endif

                @if(Session::has('msg'))
                  <div class="alert alert-info">{{ Session::get('msg') }}</div>
                @endif

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    {{ HTML::script('js/jquery.min.js') }}

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    {{ HTML::script('js/bootstrap.min.js') }}

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    {{ HTML::script('js/metisMenu.min.js') }}

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    {{ HTML::script('js/sb-admin-2.js') }}

</body>

</html> 