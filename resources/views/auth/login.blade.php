@extends('layout.auth')

@section('content')
	<h2>Sistema de Disponibilidad de Horarios</h2>
	<div class="form-group">
		<input class="form-control" type="email" placeholder="Codigo"></input>
	</div>
	<div class="form-group">
		<input class="form-control" type="password" placeholder="Contraseña"></input>
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block btn-auth">Log In</button>
	</div>
@stop