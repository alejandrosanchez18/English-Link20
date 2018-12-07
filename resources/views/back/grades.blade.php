
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<form action="{{ route('addgrade') }}" method="POST">
      @csrf
            <h2>Agregar Nota:</h2>

            <input type="text" name="term" placeholder="term" value="{{ old('term') }}" required>
            <input type="text" name="paper1" placeholder="paper1" value="{{ old('paper1') }}" required>
            <input type="text" name="paper2" placeholder="paper2" value="{{ old('paper2') }}" required>
            <input type="text" name="paper3" placeholder="paper3" value="{{ old('paper3') }}" required>
            <input type="text" name="paper4" placeholder="paper4" value="{{ old('paper4') }}" required>
            <textarea type="text" name="description" placeholder="description" value="{{ old('description') }}" required></textarea>

            <div class="form-group">
               <label for="courses" >Cursos</label>
               <select class="form-control" id="courses" name="course_id">
                     @foreach ($courses as $course)
                           <option value="{{$course->id}}">{{ $course->id . ' ' . $course->name}}</option>

                     @endforeach

               </select>

             </div>



             <div class="form-group">
               <label for="students" >Alumnos</label>
               <select class="form-control" id="students" name="user_id">
                     @foreach ($students as $student)
                           <option value="{{$student->id}}">{{ $student->first_name . ' ' . $student->last_name}}</option>
                     @endforeach

               </select>
             </div>















      <input type="submit" value="Enviar">
</form>




{{--
<table class="table">
<thead>
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Precio</th>
    <th scope="col">Profesor</th>
  </tr>
</thead>
<tbody>
@foreach ($courses as $course)


    <tr>
      <td>{{ $course->name }}</td>
      <td>{{ $course->description }}</td>
      <td>{{ $course->price }}</td>
      @foreach ($teachers as $teacher)
            @if($teacher->id == $course->user_id)
                  <td>{{$teacher->first_name}}</td>
            @endif
      @endforeach

    </tr>


@endforeach
</tbody>
</table>  --}}
