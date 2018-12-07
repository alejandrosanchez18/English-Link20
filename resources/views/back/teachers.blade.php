<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<form action="{{ route('addteacher') }}" method="POST">
      @csrf
            <h2>Registrate:</h2>

            <input type="text" name="first_name" placeholder="Nombre" value="{{ old('first_name') }}" required>
            @if ($errors->has('first_name'))
                <p class="warning">
                    {{ $errors->first('first_name') }}
                </p>
            @endif


            <input type="text" name="last_name" placeholder="Apellido" value="{{ old('last_name') }}" required>
            @if ($errors->has('last_name'))
                <p class="warning">
                    {{ $errors->first('last_name') }}
                </p>
            @endif

            <input type="number" maxlength="8" name="dni" placeholder="N° de DNI" value="{{ old('dni') }}" required>
            @if ($errors->has('dni'))
                <p class="warning">
                    {{ $errors->first('dni') }}
                </p>
            @endif

            <input type="number" name="tel" placeholder="N° Teléfono" value="{{ old('tel') }}" required>
            @if ($errors->has('tel'))
                <p class="warning">
                    {{ $errors->first('tel') }}
                </p>
            @endif

            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <p class="warning">
                    {{ $errors->first('email') }}
                </p>
            @endif

            <input type="password" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
               </span>
           @endif

            <input type="hidden" name="role" value="2">

            {{-- <input type="password" name="password_confirmation" placeholder="Re-ingresar contraseña" required> --}}

      <input type="submit" value="Registrarme">
</form>





<table class="table">
<thead>
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Email</th>
    <th scope="col">Cursos</th>
  </tr>
</thead>
<tbody>
@foreach ($teachers as $teacher)


    <tr>
      <td>{{ $teacher->first_name }}</td>
      <td>{{ $teacher->last_name }}</td>
      <td>{{ $teacher->email }}</td>
      <td>{{ $teacher->numero }}</td>
      @foreach ($courses as $course)
            @if($teacher->id == $course->teacher_id)
                  <td>{{$course->name}}</td>
            @endif
      @endforeach

    </tr>


@endforeach
</tbody>
</table>
