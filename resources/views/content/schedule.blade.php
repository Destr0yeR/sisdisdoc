<div class="row" >
	<div class="col-sm-10 col-sm-offset-1 section-header">	
			1-Disponibilidad De Horarios
	</div>
</div>

<div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 schedule-header">
			Seleccione la casilla correspondiente a la hora del dia en la que quiere dictar un curso
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<table class="table table-bordered">
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
			Faltan Asignar <a style="cursor: none" id="left">{{ $user->category->max_time }}</a> hora(s)
		</div>
	</div>
</div>


<input type="hidden" id="max_time" value="{{ $user->category->max_time }}"></input>
<input type="hidden" id="schedule" name="schedule"></input>

<script type="text/javascript">
	$(document).ready(function(){

	   	var times = $("#max_time").val();
	   	var arr = [];
	   	$("#scheduleOk").val(0);

	   $(".schedule-link").click(function(e){
	   		var id = e.target.id;
	   		var item = $("#"+id);
	   		var nid = id.substring(4);

	   		if(!item.hasClass("selected")){
	   			if(times == 0)return;
	   			$(item).addClass("selected");
	   			times--;
	   			arr.push(nid);
	   		}
	   		else{
	   			$(item).removeClass("selected");
	   			times++;

	   			var idx = arr.indexOf(nid);

	   			if(idx > -1){
	   				arr.splice(idx, 1);
	   			}
	   		}

	   		if(times == 0){
	   			$("#scheduleOk").val(1);

	   			if($("#subjectsOk").val() == 1){
	   				$("#saveButton").attr("data-target", "#saveChangesModal");
	   			}
	   			else{
	   				$("#saveButton").attr("data-target", "#saveChangesModalSubjectsFail");
	   			}
	   		}
	   		else{
	   			$("#scheduleOk").val(0);	
	   			$("#saveButton").attr("data-target", "#saveChangesModalScheduleFail");
	   		}

	   		$("#schedule").val(JSON.stringify(arr));
	   		$("#left").html(times);
	   });

	});
</script>
