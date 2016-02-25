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
							<td class="schedule-button @if($schedule[ 7*($i-1) + $j ]) schedule-selected-done @endif">							
							</td>
						@endfor
					</tr>
				@endfor
			</table>
		</div>
	</div>
</div>

