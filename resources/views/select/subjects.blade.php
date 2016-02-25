<option value="0">Seleccione el curso</option>
@foreach($subjects as $subject)
  <option value="{{ $subject->id }}">{{ $subject->name }}</option>
@endforeach