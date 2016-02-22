<!DOCTYPE html>
<html>
<head>
	<title>DISPONIBILIDAD DOCENTE</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/professor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/schedule.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">


	<script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>