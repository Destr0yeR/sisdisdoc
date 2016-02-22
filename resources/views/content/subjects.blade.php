<div class="row">
	<div class="col-sm-10 col-sm-offset-1 subject subject-header">
		<h2>Mis Cursos</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1  subject subject-content">
		<div class="row" id="subject-items">

		</div>
	</div>
</div>

<div class="row">
	<a data-toggle="modal" data-target="#addSubject">
		<div class="col-sm-10 col-sm-offset-1 subject subject-footer footer-style">
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
              <select class="form-control" id="subject">
                <option value="0">Seleccione el curso</option>
                @foreach($subjects as $subject)
                  <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" id="career">
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
        <a class="btn btn-primary addOption">Agregar</a>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="subjects" name="subjects"></input>

<script type="text/javascript">
    $(document).ready(function(){

        var mat = new Array(101);
        for(var i = 0 ; i < 101 ; ++i){
            mat[i] = new Array(101);
        }

        for(var i = 0 ; i < 101 ; ++i){
            for(var j = 0 ; j < 101 ; ++j){
                mat[i][j] = 0;
            }
        }

        $(".addOption").click(function(e){
            var career_text = $("#career option:selected").text();
            var career_id = $("#career").val();

            var subject_text = $("#subject option:selected").text();
            var subject_id = $("#subject").val();

            if(mat[career_id][subject_id] == 1){
                return;
            }

            mat[career_id][subject_id] = 1;

            appendOption(subject_text, career_text);
        });

        function appendOption(subject, career){
            $("#subject-items").append('<div class="col-sm-5"><div class="item-border">'+subject+'</div></div><div class="col-sm-5"><div class="item-border">'+career+'</div></div><div class="col-sm-2"><i class="fa fa-minus-circle"></i></div>');
        }
    });
</script>
