<div class="row">
	<div class="col-sm-10 col-sm-offset-1 subject subject-header">
		<h2>Mis Cursos</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1  subject subject-content">
		<div class="row">

		</div>
	</div>
</div>

<div class="row">
	<a data-toggle="modal" data-target="#addSubject">
		<div class="col-sm-10 col-sm-offset-1 subject subject-footer">
			Agregar nuevas preferencias
		</div>
	</a>
</div>

<div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar nueva preferencia</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
              <select class="form-control">
                <option value="0">Seleccione el curso</option>
                @foreach($subjects as $subject)
                  <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <select class="form-control">
                <option value="0">Seleccione la escuela</option>
                @foreach($careers as $career)
                  <option value="{{ $career->id }}">{{ $career->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>

