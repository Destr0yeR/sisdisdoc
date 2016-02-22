<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table table-bordered">
			<th>
				DATOS DE DOCENTE
			</th>
			<tr>
				<td>Codigo</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Nombres</td>
				<td>Categoría/Clase</td>
				<td>Horas</td>
			</tr>
			<tr>
				<td>{{ $user->codigo }}</td>
				<td>{{ $user->appaterno }}</td>
				<td>{{ $user->apmaterno }}</td>
				<td>{{ $user->nombres }}</td>
				<td>{{ $user->category->name }}</td>
				<td>{{ $user->category->max_time }}</td>
			</tr>
		</table>
	</div>
</div>