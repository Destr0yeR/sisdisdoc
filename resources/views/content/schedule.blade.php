<div id="schedule-section">
	<div class="row" >
		<div class="col-sm-10 col-sm-offset-1 section-header">	
				1-Disponibilidad De Horarios
		</div>
	</div>

	<div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 schedule-header">
				Seleccione la casilla correspondiente a la hora del día en la que quiere dictar un curso
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<table class="table table-bordered table-no-bottom-margin" style="margin-bottom:5px">
					<tr>
						<td class="schedule-static-header"></td>
						<td class="schedule-static-header">Lunes</td>
						<td class="schedule-static-header">Martes</td>
						<td class="schedule-static-header">Miércoles</td>
						<td class="schedule-static-header">Jueves</td>
						<td class="schedule-static-header">Viernes</td>
						<td class="schedule-static-header">Sábado</td>
						<td class="schedule-static-header">Domingo</td>
					</tr>
					@for($i = 1 ; $i <= 14 ; ++$i)
						<tr>
							<td class="schedule-static-header">{{ $i + 7 }} - {{ $i + 8 }}</td>

							@for($j = 1 ; $j <= 7 ; ++$j)
								<td class="schedule-button">
									<a class="schedule-link" id="cell{{ 7*($i-1) + $j }}">
										
									</a>
								</td>
							@endfor
						</tr>
					@endfor
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 schedule-footer">
				Ha asignado <a style="cursor: none" id="current">0</a> hora(s).<br/> Usted debe seleccionar , de ser posible , una cantidad mayor a el numero de horas que dicto el ciclo anterior.
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="btn-container">
					<a id="nxtButton" class="btn btn-primary btn-bottom-page" data-toggle="modal" data-target="#saveChangesModalScheduleFail">Siguiente Sección</a>
			</div>	
		</div>
	</div>
</div>


<input type="hidden" id="max_time" value="{{ $user->category->max_time }}"></input>
<input type="hidden" id="last_time" value="{{ $user->last }}"></input>
<input type="hidden" id="schedule" name="schedule"></input>

<script type="text/javascript">
		$(document).ready(function(){
			$("#nxtButton").click(function(){

				if($("#scheduleOk").val() == 1){
					$('#schedule-section').addClass('hidden');
					$('#subject-section').removeClass('hidden');
					$('#save-changes-section').removeClass('hidden');
	   			}
			});
		});
</script>

<script type="text/javascript">
	$(document).ready(function(){

	   	var max_time = $("#max_time").val();
	   	var last = $("#last_time").val();
	   	var arr = [];

	   	var times = 0;
	   	
	   	$("#scheduleOk").val(0);

	   $(".schedule-link").click(function(e){
	   		var id = e.target.id;
	   		var item = $("#"+id);
	   		var nid = id.substring(4);

	   		if(!item.hasClass("selected")){
	   			if(times == max_time)return;
	   			$(item).addClass("selected");
	   			times++;
	   			arr.push(nid);
	   		}
	   		else{
	   			$(item).removeClass("selected");
	   			times--;

	   			var idx = arr.indexOf(nid);

	   			if(idx > -1){
	   				arr.splice(idx, 1);
	   			}
	   		}
	   		if(max_time == last)last--;
	   		if(times > last){
	   			$("#scheduleOk").val(1);
   				$("#nxtButton").attr("data-toggle","none");
   				$("#nxtButton").attr("data-target","none");

	   			if($("#subjectsOk").val() == 1){
	   				$("#saveButton").attr("data-target", "#saveChangesModal");
	   			}
	   			else{
	   				$("#saveButton").attr("data-target", "#saveChangesModalSubjectsFail");
	   			}
	   		}
	   		else{
	   			$("#scheduleOk").val(0);	
	   			$("#nxtButton").attr("data-target", "#saveChangesModalScheduleFail");
	   			$("#nxtButton").attr("data-toggle", "modal");
	   		}

	   		$("#schedule").val(JSON.stringify(arr));
	   		//$("#left").html(max_time - times);
	   		$("#current").html(times);
	   });

	});
</script>
