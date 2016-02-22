@extends('layout.auth')

@section('content')
<div class="div_login container-fluid " value="hello">
	<fieldset>
	    <legend>Recuperar Contraseña</legend>
	    <h4>Ingrese el correo electronico asociado a su cuenta</h4>
    	<form class="col-md-12" onclick="return false;" >
	    	<div class="form-group col-md-12">
        		<label class="pull-left form_label">Correo Electronico</label>
          		<input  id="email"class=" pull-right form-control" type="email" name="correo" placeholder="e-m@il@dominio"> 
          		<div id="email-error" class="error pull-right">
	            	<a>No tenemos registrado ese correo</a>
          		</div>
        	</div>
	      
        	<div class="form-group col-md-12">
				<input id="recuperar"class="col-md-12  btn-lg form-control" type="submit" name="login" value="Recuperar Contraseña">
        	</div>
      	</form>
    </fieldset>
</div>

<div class="container-fluid ">
  	<div class="modal fade" id="myModal" role="dialog">
    	<div class="modal-dialog">
      		<div class="modal-content">
        		<h3>Recuperar Contraseña</h3>
       			<p>Hemos enviado un correo a la cuenta que ingreso para recuperar su contraseña</p>
				<div class="modal-footer">
	          		<button type="button" class="btn btn-default" data-dismiss="modal">Correcto</button>
        		</div>
      		</div>	      
    	</div>
  	</div>
</div>

@stop