<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table table-bordered">
			<tr>
				<td></td>
				<td>Lunes</td>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
				<td>Sábado</td>
				<td>Domingo</td>
			</tr>
			@for($i = 1 ; $i <= 14 ; ++$i)
				<tr>
					<td>{{ $i + 7 }} - {{ $i + 8 }}</td>

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
	<div class="col-sm-10 col-sm-offset-1">
		Faltan Asignar <a style="cursor: none" id="left">{{ $user->category->max_time }}</a> hora(s)
	</div>
</div>

<input type="hidden" id="max_time" value="{{ $user->category->max_time }}"></input>
<input type="hidden" id="schedule" name="schedule"></input>

<script type="text/javascript">
	$(document).ready(function(){

	   	var times = $("#max_time").val();
	   	var arr = [];

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

	   		$("#schedule").val(JSON.stringify(arr));
	   		$("#left").html(times);
	   });

	});
</script>