<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<h1>hola</h1>

<table class="table" id="users">
<thead>
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Direccion</th>
    {{-- <th scope="col">Dni</th> --}}
    {{-- <th scope="col">Email</th> --}}
    {{-- <th scope="col">Telefono</th> --}}
    {{-- <th scope="col">Curso</th> --}}

  </tr>
</thead>
<tbody>
@foreach ($students as $student)


    <tr>
      <td>{{ $student->first_name }}</td>
      <td>{{ $student->last_name }}</td>
      {{-- <td>{{ $student->dni }}</td> --}}
      <td>{{ $student->email }}</td>
      {{-- <td>{{ $student->adress }}</td> --}}
      {{-- <td>{{ $student->tel }}</td> --}}
      {{-- @foreach ($student->courses as $course)
            <td>{{ $course->name }}</td>

      @endforeach --}}


@endforeach
</tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
      $(document).ready( function () {
      $('#users').DataTable();
      } );
</script>
