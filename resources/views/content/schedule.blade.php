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
					<td>{{ $i + 7 }}</td>

					@for($j = 1 ; $j <= 7 ; ++$j)
						<td class="schedule-button">
							<a href="{{ 7*($i-1) + $j }}" class="schedule-link">
								
							</a>
						</td>
					@endfor
				</tr>
			@endfor
		</table>
	</div>
</div>