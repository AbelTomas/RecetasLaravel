<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Introduce un usuario </title>
</head>
<body>
@if($user)
    <p>Comprobando</p>
@endif
        <!-- Es un formulario en Blade-->
{{ Form::label ('id', 'Nombre:') }}
<br />
{{ Form::text ('id', 'id') }}
<br />
{{ Form::label ('nombre', 'nombre') }}
<br />
{{ Form::text ('nombre','nombre') }}
<br />
{{ Form::hidden ('_method', 'PUT') }}
<br />
{{ Form::submit('Entrar') }}
{{ Form::close() }}
</body>
</html>