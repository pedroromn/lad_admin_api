<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
    <h1>Login</h1>
    {{ Form::open(array('url' => 'login') ) }}
     {{-- Preguntamos si hay algun mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('error_msg'))
            <div style="color:red">{{ Session::get('error_msg') }}</div>
        @endif
        @if(Session::has('msg'))
            <div style="color:blue">{{ Session::get('msg') }}</div>
        @endif
        {{ Form::text('email', Input::old('email') ) }}
        {{ Form::password('password') }}

        {{Form::button('Entrar', array('type' => 'submit')) }}
    {{ Form::close() }}
</body>
</html>
