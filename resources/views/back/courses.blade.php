<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<form action="{{ route('addcourse') }}" method="POST">
      @csrf
            <h2>Agregar Curso:</h2>

            <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required>
            @if ($errors->has('name'))
                <p class="warning">
                    {{ $errors->first('name') }}
                </p>
            @endif


            <input type="text" name="description" placeholder="Descripcion" value="{{ old('descripcion') }}" required>
            @if ($errors->has('description'))
                <p class="warning">
                    {{ $errors->first('description') }}
                </p>
            @endif
            <input type="number" name="price" placeholder="Descripcion" value="{{ old('price') }}" required>
            @if ($errors->has('price'))
                <p class="warning">
                    {{ $errors->first('price') }}
                </p>
            @endif


            <div class="form-group">
               <label for="exampleFormControlSelect1" >Profesores</label>
               <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                     @foreach ($teachers as $teacher)
                           <option value="{{$teacher->id}}">{{ $teacher->first_name . ' ' . $teacher->last_name }}</option>

                     @endforeach

               </select>
               @if ($errors->has('user_id'))
                   <p class="warning">
                       {{ $errors->first('user_id') }}
                   </p>
               @endif
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
      @foreach ($teachers as $teacher)
            @if($teacher->id == $course->user_id)
                  <td>{{$teacher->first_name}}</td>
            @endif
      @endforeach

    </tr>


@endforeach
</tbody>
</table>
