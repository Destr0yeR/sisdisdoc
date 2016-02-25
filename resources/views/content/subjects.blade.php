<div id="subject-section" class="hidden">
  <div class="row" >
    <div class="col-sm-10 col-sm-offset-1 section-header">  
        2-Preferencias de Cursos
    </div>
  </div>

  <div >
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
                  <select class="form-control" id="career">
                    <option value="0">Seleccione la escuela</option>
                    @foreach($careers as $career)
                      <option value="{{ $career->id }}">{{ $career->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" id="subject" disabled="disabled">
                    <option value="0">Seleccione el curso</option>
                    @foreach($subjects as $subject)
                      <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <div id="subject-error"></div>
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
        var arr2 = [];

        var total = 0;
        $("#subjectsOk").val(0);

        $(".addOption").click(function(e){

            var career_text = $("#career option:selected").text();
            var career_id = $("#career").val();

            var subject_text = $("#subject option:selected").text();
            var subject_id = $("#subject").val();

            if(career_id == 0 || subject_id == 0){
                $("#subject-error").text("Debe seleccionar la curso y la escuela a la que desea enseñar");
                return;
            }

            if(mat[career_id][subject_id] == 1){
                $("#subject-error").text("Este par de Curso - Escula ya ha sido asignado. Eliga otras opciones.");
                return;
            }

            mat[career_id][subject_id] = 1;
            arr2.push(career_id+"-"+subject_id);

            $("#subjects").val(JSON.stringify(arr2));
            total++;

            if(total == 0){
                $("#subjectsOk").val(0);
                $("#saveButton").attr("data-target", "#saveChangesModalScheduleFail");
            }
            else{
                $("#subjectsOk").val(1);

                if($("#scheduleOk").val() == 1){
                    $("#saveButton").attr("data-target", "#saveChangesModal");
                }
            }

            appendOption(subject_text, career_text, subject_id, career_id);
            $("#career").val(0);
            $("#subject").val(0);

            $("#addSubject").modal('toggle');
            $("#subject-error").text('');
        });

        function appendOption(subject, career, subject_id, career_id){
            $("#subject-items").append('<div class="row" id="op-'+subject_id+'-'+career_id+'"><div class="col-sm-5"><div class="item-border">'+subject+'</div></div><div class="col-sm-5"><div class="item-border">'+career+'</div></div><div class="col-sm-2"><a style="cursor: pointer;" id="option-'+subject_id+'-'+career_id+'" class="deleteOption"><i class="fa fa-minus-circle"></i></a></div>');

            $("#option-"+subject_id+'-'+career_id).click(function(e){
                $("#op-"+subject_id+'-'+career_id).remove();
                mat[career_id][subject_id] = 0;

                var idx = arr2.indexOf(career_id+"-"+subject_id);

                if(idx > -1){
                    arr2.splice(idx, 1);
                }
                $("#subjects").val(JSON.stringify(arr2));
                total--;


                if(total == 0){
                    $("#subjectsOk").val(0);
                    $("#saveButton").attr("data-target", "#saveChangesModalSubjectsFail");
                }
                else{
                    $("#subjectsOk").val(1);

                    if($("#scheduleOk").val() == 1){
                        $("#saveButton").attr("data-target", "#saveChangesModal");
                    }
                }
            });
        }

        $("#career").change(function(e){
            var route = $("#base_path").val();
            route = route + '/subjects/'+$("#career").val();

            if($("#career").val() == 0){
                $("#subject").val(0);
                $("#subject").prop('disabled', true);
                return;
            }

            $.get(route, function(data){
                $("#subject").prop('disabled', false);
                $("#subject").html(data.html);
            });
        });
    });
</script>

