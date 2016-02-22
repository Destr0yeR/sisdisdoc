@extends('layout.auth')

@section('content')
  		<div class="div_login container-fluid " >
    		<fieldset>
      			<legend>Login</legend>
      			<form class="col-md-12" onclick="return false;" method="POST" action="{{ route('postLogin') }}" >
        			<div class="form-group col-md-12">
          				<label class="pull-left form_label">Código</label>
          				<input  id="code"class=" pull-right form-control"type="text" name="codigo" placeholder="Ingrese su codigo"> 
          				<div id="code-error" class="error pull-right">
	            			<a>Código no correspondiente</a>
          				</div>
        			</div>
	        		<div class="form-group col-md-12">
	          			<label class="pull-left form_label">Contraseña</label>
          				<input id="pass"class="pull-right form-control" type="password" name="password" placeholder="Ingrese su contraseña">
          				<div id="pass-error"class="error pull-right">
	            			<a>Contraseña Incorrecta</a>
          				</div>
        			</div>
        			<div class="form-group col-md-12">
	          			<button class="btn btn-primary btn-block btn-auth">Log In</button>
        			</div>
      			</form>
      			<a   class="col-md-12 forgot-password"href="#" title="¿Olvidaste tu Contraseña?">¿Olvidaste tu Contraseña?</a>
    		</fieldset>
  		</div>
@stop