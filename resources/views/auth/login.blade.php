@extends('layout.auth')

@section('content')
	<form class="auth-form" method="POST" action="{{ route('postLogin') }}">
		<h2>Sistema de Disponibilidad de Horarios</h2>
		<div class="form-group">
			<input class="form-control" placeholder="Codigo" name="codigo"></input>
		</div>
		<div class="form-group">
			<input class="form-control" type="password" placeholder="Contraseña" name="password"></input>
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block btn-auth">Log In</button>
		</div>
	</form>

@stop