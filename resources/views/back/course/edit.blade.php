<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<h1>Editar Curso</h1>

	@if (count($errors))
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif

	{{--
		$errors->has('title')
		$errors->first('title')
		$errors->get('title')
	--}}

	<form action="/movies/{{$course->id}}" method="POST">
		@csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name',  $course->name)}}" />
        </div>
        <div class="form-group">
            <label for="rating">price</label>
            <input class="form-control" type="text" name="price" id="price"  value="{{old('price',  $course->price)}}"/>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" id="description"  value="{{old('adescription',  $course->description)}}"/>
        </div>

        <div class="form-group">
        	<button class="btn btn-primary" type="submit" name="button">Agregar</button>
        </div>
    </form>
