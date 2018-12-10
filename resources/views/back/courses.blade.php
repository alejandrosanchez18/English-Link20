<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="container">


<form action="{{ route('addcourse') }}" method="POST">
      @csrf
            <h2>Agregar Curso:</h2>

            <input type="text" name="name" placeholder="Nombre" course="{{ old('name') }}" required>
            @if ($errors->has('name'))
                <p class="warning">
                    {{ $errors->first('name') }}
                </p>
            @endif


            <input type="text" name="description" placeholder="Descripcion" course="{{ old('descripcion') }}" required>
            @if ($errors->has('description'))
                <p class="warning">
                    {{ $errors->first('description') }}
                </p>
            @endif
            <input type="number" name="price" placeholder="Descripcion" course="{{ old('price') }}" required>
            @if ($errors->has('price'))
                <p class="warning">
                    {{ $errors->first('price') }}
                </p>
            @endif


            <div class="form-group">
               <label for="exampleFormControlSelect1" >Profesores</label>
               <select class="form-control" id="exampleFormControlSelect1" name="teacher_id">
                     @foreach ($teachers as $teacher)
                           <option course="{{$teacher->id}}">{{ $teacher->first_name . ' ' . $teacher->last_name }}</option>

                     @endforeach

               </select>
               @if ($errors->has('teacher_id'))
                   <p class="warning">
                       {{ $errors->first('teacher_id') }}
                   </p>
               @endif

               <div class="form-group">
            <label>Alumnos</label>
            <div class="row">
                @foreach ($students as $student)
                    <div class="col-xs-4">
                        <label for="{{$student->last_name}}">{{$student->last_name}}</label>
                        <input id="{{$student->last_name}}" type="checkbox" name="users[]" course="{{$student->id}}">
                    </div>
                @endforeach
            </div>

        </div>
             </div>














      <input type="submit" value="Registrarme">
</form>





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
      <td>
        <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$course->id}}" data-title="{{$course->name}}" data-body="{{$course->description}}">
          <i class="fa fa-eye"></i>
        </a>
        <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$course->id}}" data-title="{{$course->name}}" data-body="{{$course->description}}">
          <i class="glyphicon glyphicon-pencil"></i>
        </a>
        <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$course->id}}" data-title="{{$course->name}}" data-body="{{$course->description}}">
          <i class="glyphicon glyphicon-trash"></i>
        </a>
      </td>
   </tr>

    </tr>


@endforeach
</tbody>
</table>
</div>
