<div class="row" >
  <div class="col-sm-10 col-sm-offset-1 section-header">  
      2-Preferencias de Cursos
  </div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1 subject subject-header">
		<h2>Mis Cursos</h2>
	</div>
</div>
<div class="row" style="margin-bottom:30px;">
	<div class="col-sm-10 col-sm-offset-1  subject subject-content">
		<div class="row" id="subject-items">
      @foreach($subjects as $subject)
        <div class="col-sm-6">
          {{ $subject['name'] }}
        </div>
        <div class="col-sm-6">
          {{ $subject['career'] }}
        </div>
      @endforeach
		</div>
	</div>
</div>
