<div class="row" style="margin-top:15px;">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table table-bordered teacher-table" style="margin-bottom:5px">
			<tr>
			<td colspan="7"  class="table-header">			
					DATOS DE DOCENTE
			</td>
			</tr>
			<tr>
				<td class="info-header">Codigo</td>
				<td class="info-header">Apellido Paterno</td>
				<td class="info-header">Apellido Materno</td>
				<td class="info-header">Nombres</td>
				<td class="info-header">Horas Dictadas En El Ciclo Anterior</td>
				<td class="info-header">Categoría/Clase</td>
				<td class="info-header">Horas Tope</td>
			</tr>
			<tr>
			<td class="table-info">{{ $user->codigo }}</td>
			<td class="table-info">{{ $user->appaterno }}</td>
			<td class="table-info">{{ $user->apmaterno }}</td>
			<td class="table-info">{{ $user->nombres }}</td>
			<td class="table-info">{{ $user->last }}</td>
			<td class="table-info">{{ $user->category->name }}</td>
			<td class="table-info">{{ $user->category->max_time }}</td>
			</tr>
		</table>
	</div>
</div>
