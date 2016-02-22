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
							<a class="schedule-link @if($schedule[ 7*($i-1) + $j ]) selected @endif" id="cell{{ 7*($i-1) + $j }}">
								
							</a>
						</td>
					@endfor
				</tr>
			@endfor
		</table>
	</div>
</div>