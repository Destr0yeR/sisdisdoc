@extends('layout.base')

@section('content')
	<form method="POST" action="{{ route('save.changes') }}">
		@include('content.professor')
		@include('content.schedule')
		@include('content.subjects')
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<button class="btn btn-primary">Guardar Cambios</button>
			</div>
		</div>
	</form>
@stop