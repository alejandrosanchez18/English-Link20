@extends('frontend/app')
@section('content')
<main class='main-container'>


<div class="fluid-container courses-header">
  <p>Work with as</p>
</div>
<div class="container courses-section">
      <div class="">
            <p><span>Home</span> > Work With As</p>
      </div>
      <hr>
</div>
<div class="container">
      <div class="row">
            <div class="col-md-6 courses-desc mb-5">
                  <p>Somos un equipo profesional, comprometido, que prioriza la calidad en el proceso de
                  aprendizaje del idioma inglés. Súmate a esta institución y se parte de una experiencia que te
                  permita desarrollarte como profesional de la enseñanza del inglés.</p>
            </div>
            <div class="col-md-6 form-back pt-2 pb-4">
                  <form class='form-work form-contact' action="" method="post" enctype="multipart/form-data">
                   <h2 class="form-h2">Completa el siguiente formulario</h2>
                   <?php echo (isset($msg))? $msg : '' ?>
                      <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="name" name="name" class="form-control" id="inputName" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="inputName">Telefono</label>
                        <input type="number" name="tel" class="form-control" id="inputName" placeholder="">
                      </div>
                    <div class="form-group">
                      <label for="inputAddress">Dirección</label>
                      <input type="text" name="adress" class="form-control" id="inputAddress" placeholder="">
                    </div>
                      <div class="form-group">
                            <label for="FormControlTextarea1">Comentarios</label>
                            <textarea class="form-control" name="comment" id="FormControlTextarea" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                            <label for="exampleFormControlFile1">Curriculum</label>
                            <input type="file" name="files" class="form-control-file" id="FormControlFile">
                      </div>
                        <input type="text" class="d-none" name="form-anti-honeypot" value="">
                    <button type="submit" class="btn btn-primary btn-red">Enviar</button>
                  </form>
            </div>

      </div>

</div>















<div class="container row">
      <div class="col-8 offset-2">

</div>

</div>
</main>
@endsection
