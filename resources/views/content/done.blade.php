@extends('layout.base')

@section('content')
	<form method="POST" action="{{ route('save.changes') }}">
		@include('content.professor')
		@include('content.schedule_done')
		@include('content.subjects_done')
	</form>
@stop