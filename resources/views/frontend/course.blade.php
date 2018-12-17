@extends('frontend/app')

@section('content')
<main class='main-container'>
<div class="fluid-container courses-header">
  <p><?= $curso->title ?></p>
</div>
<div class="container courses-section">
      <div class="">
            <p><span>Cursos</span> > <?= $curso->title ?></p>
      </div>
      <hr>
</div>
<div class="container courses-desc">
      <p><?= $curso->info ?></p>
</div>
<div class="container mt-5 course-form-info">
      <div class="row">


      <div class="d-none d-md-block col-md-7">
            <img src="<?= $curso->slug ?>.jpeg" alt="">
      </div>
      <div class="col-md-5 form-back">
            <form class="form-contact" method="post" action='#img-contenedor'>
            @csrf
              <h2 class="form-h2 d-md-none">Completa el formulario para recibir mayor información</h2>
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id='name' name='name' placeholder="Tu nombre">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id='email' name='email' placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="tel">Telefono</label>
                <input type="number" class="form-control" id='tel' name='tel' placeholder="Tu telefono">
              </div>
              <div class="form-group">
                <label for="FormControlSelect1">Nivel de Inglés</label>
                <select class="form-control" name="lvl">
                  <option value="SinConocimientos">Sin conocimientos</option>
                  <option value="Basico">Básico</option>
                  <option value="Intermedio">Intermedio</option>
                  <option value="Avanzado">Avanzado</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Comentarios</label>
                <textarea class="form-control"rows="3" name="coment"></textarea>
              </div>
              <input type="text" class="d-none" name="form-anti-honeypot" value="">
              <button class="btn btn-primary btn-red" type='submit' name="button">Enviar</button>
            </form>
      </div>

      </div>
      </div>
</main>
@endsection
