@extends('layout.auth')

@section('content')
<div class="div_login container-fluid " value="hello">
	<h3>Ya que esta es la primera vez que ingresa al sistema, es necesario que cambie su contraseña</h3>
    <fieldset>
    	<legend>Cambiar Contraseña</legend>
      	<form class="col-md-12" onclick="return false;" >
        	<div class="form-group col-md-12">
	        	<label class="pull-left form_label">Nueva Contraseña</label>
          		<input  id="code"class=" pull-right form-control"type="password" name="newPass" placeholder="Ingrese su nueva contraseña"> 
        	</div>
	      
        	<div class="form-group col-md-12">
	          	<label class="pull-left form_label">Vuelva a escribir su nueva contraseña</label>
          		<input id="pass"class="pull-right form-control" type="password" name="newPassConf" placeholder="Ingrese su nueva contraseña nuevamente">
          		<div id="email-error" class="error pull-right">
		            <a>Las contraseñas no coinciden</a>
          		</div>
        	</div>
        	<div class="form-group col-md-12">
          	<input id="enviar"class="col-md-12  btn-lg form-control" type="submit" name="login" value="Guardar">
        	</div>
      	</form>
    </fieldset>
</div>
@stop