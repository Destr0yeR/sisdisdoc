@extends('layout.base')

@section('content')
	<form method="POST" action="{{ route('save.changes') }}">
		<input type="hidden" id="subjectsOk" value="0"></input>
		<input type="hidden" id="scheduleOk" value="0"></input>
		@include('content.professor')
		@include('content.schedule')
		@include('content.subjects')
		<div id="save-changes-section" class="hidden">			
			<div class="row">
				<div class="col-md-1 col-md-offset-4">
					<div class="btn-container">
							<a id="backButton" class="btn btn-primary btn-bottom-page">Anterior Sección</a>
					</div>
				</div>
				<div class="col-md-1 col-md-offset-1">	
					<div class="btn-container">
						<a id="saveButton" class="btn btn-primary btn-bottom-page" data-toggle="modal" data-target="#saveChangesModalScheduleFail">Guardar Cambios</a>
						<button class="btn btn-primary btn-bottom-page hidden" id="confirmButton">Guardar Cambios</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<script type="text/javascript">
			$(document).ready(function(){
				$("#backButton").click(function(){
					$('#schedule-section').removeClass('hidden');
					$('#subject-section').addClass('hidden');
					$('#save-changes-section').addClass('hidden');
				});
			});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#saveChangesButton").click(function(){
				$("#confirmButton").click();
			});
		});
	</script>

	<div class="modal fade" id="saveChangesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      <h4 class="modal-title" id="myModalLabel">Advertencia</h4>
		    </div>
		    <div class="modal-body">
		      <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		          Si continua, usted no podrá editar su disponibilidad.¿Está seguro que desea continuar?
		        </div>
		      </div>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		      <a class="btn btn-primary addOption" id="saveChangesButton">Continuar</a>
		    </div>
		  </div>
		</div>
	</div>

	<div class="modal fade" id="saveChangesModalSubjectsFail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      <h4 class="modal-title" id="myModalLabel">Error</h4>
		    </div>
		    <div class="modal-body">
		      <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		          No se ha agregado ningún curso a su lista de deseados. No se puede continuar.
		        </div>
		      </div>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		    </div>
		  </div>
		</div>
	</div>

	<div class="modal fade" id="saveChangesModalScheduleFail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      <h4 class="modal-title" id="myModalLabel">Error</h4>
		    </div>
		    <div class="modal-body">
		      <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		          Su disponibilidad no esta completa, debe asignar todas sus horas.
		        </div>
		      </div>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		    </div>
		  </div>
		</div>
	</div>
@stop