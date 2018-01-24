
<html>
<head>
		<title>Pruebas</title>
		<link href="{{ asset('css/app.css',true) }}" rel="stylesheet">
</head>
<body>
	<h1>Hola {{ $name }}</h1>
	<p>
		Usted se ha registrado en jssBuy la plataforma para ventas de inmuebles.
		El siguiente mensaje es para validar su correo electronico. Para confirmar
	</p>
	
	<a  class="btn btn-primary" href="127.0.0.1:8000/register/verify/{{ $confirmation_code }}">has click aqui </a>
</body>
</html>