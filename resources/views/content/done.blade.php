@extends('layout.base')

@section('content')
	<form method="POST" action="{{ route('save.changes') }}">
		@include('content.professor')
		@include('content.schedule_done')
		@include('content.subjects_done')
	</form>
	<div class="modal fade" id="saveChangesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-body">
	          <div class="row">
	          	<h3>Sus preferencias han sido registradas</h3>
	          </div>
	        </div>
        </div>
        </div>
        </div>
@stop