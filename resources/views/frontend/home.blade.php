@extends('frontend/app')
@section('content')

      <!-- Slider Section -->

<div class="fluid-container carousel-container">
  <!-- <div class="carousel-background d-none d-md-block">
    <img src="./img/banner/sliderlateral.png" alt="">
  </div> -->
  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="20000">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-background d-none d-md-block">
        <img src="./img/banner/sliderlateral.png" alt="">
      </div>
      <img class="d-none d-md-block w-100" src="./img/banner/slider1.jpg" alt="First slide">
      <img class="w-100 d-block d-md-none"src="./img/banner/mobile/slider1.jpg" alt="">
      <div class="carousel-caption text-slider d-none d-md-block">
        <h3>CAPACITA<br> A TU STAFF DE LA MEJOR MANERA</h3>
        <a href="#contacto" class="slider-button">Contáctanos<i class="fas fa-angle-right"></i></a>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-background d-none d-md-block">
        <img src="./img/banner/sliderlateral.png" alt="">
      </div>
      <img class="d-none d-md-block w-100" src="./img/banner/slider2.jpg" alt="First slide">
      <img class="w-100 d-block d-md-none"src="./img/banner/mobile/slider1.jpg" alt="">
      <div class="carousel-caption text-slider d-none d-md-block">
        <h3>OBTENÉ TU CERTIFICAÓN INTERNACIONAL</h3>
        <a href="#contacto" class="slider-button">Contáctanos<i class="fas fa-angle-right"></i></a>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-background d-none d-md-block">
        <img src="./img/banner/sliderlateral.png" alt="">
      </div>
      <img class="d-none d-md-block w-100" src="./img/banner/slider3.jpg" alt="First slide">
      <img class="w-100 d-block d-md-none"src="./img/banner/mobile/slider1.jpg" alt="">
      <div class="carousel-caption text-slider d-none d-md-block">
        <h3>ABRE TU CAMINO A NUEVAS EXPERIENCAS</h3>
        <a href="#contacto" class="slider-button">Contáctanos<i class="fas fa-angle-right"></i></a>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-background d-none d-md-block">
        <img src="./img/banner/sliderlateral.png" alt="">
      </div>
      <img class="d-none d-md-block w-100" src="./img/banner/slider4.jpg" alt="First slide">
      <img class="w-100 d-block d-md-none"src="./img/banner/mobile/slider1.jpg" alt="">
      <div class="carousel-caption text-slider d-none d-md-block">
        <h3>LA MEJOR EXPERIENCIA PARA NIÑOS</h3>
        <a href="#contacto" class="slider-button">Contáctanos<i class="fas fa-angle-right"></i></a>
      </div>
    </div>
</div>
</div>
</div>


<!-- Card section  -->


<div class="container">
 <div class="row card-container">
   <div class="col-12 col-md-6 col-lg-3">
     <section class="cards">
         <article class="card">
           <img src="./img/icono1.png" alt="">
           <h3 class="card-title">Mejor Calidad</h3>
           <p class="card-description">Excelencia en tu aprendizaje</p>
         </article>
   </div>
   <div class="col-12 col-md-6 col-lg-3">
     <article class="card">
       <img src="./img/icono2.png" alt="">
       <h3 class="card-title">Más flexible</h3>
       <p class="card-description">Nos adaptamos a tus necesidades</p>
     </article>
   </div>
   <div class="col-12 col-md-6 col-lg-3">
     <article class="card">
         <img src="./img/icono3.png" alt="">
       <h3 class="card-title">Más personal</h3>
       <p class="card-description">Nos enfocamos en tus objetivos</p>
     </article>
   </div>
   <div class="col-12 col-md-6 col-lg-3">
     <article class="card">
         <img src="./img/icono4.png" alt="">
       <h3 class="card-title">Más Rapido</h3>
       <p class="card-description">Aprende a tu ritmo</p>
     </article>
   </div>
 </div>

</div>
<div class="container" id="sobre-nosotros">
      <hr class="featurette-divider">
</div>

<!-- <div class="container">
<section class="about" id="about">
<div class="row">
 <div class="col-12 col-lg-5">
<article class="who">
   <h2>Quienes Somos:</h2>
   <h4>"Somos el link que te abre las puertas al mundo"</h4>
   <p>English Link es un grupo de profesores calificados y especializados en la enseñanza del idioma inglés para estudiantes y profesionales de todas las edades cuyo objetivo principal sea mejorar sus capacidades/ habilidades lingüísticas en todos sus niveles, permitiendo de esta forma una participación más activa de la persona en la ya consolidada globalización.</p>
 </article>
 </div>
 <div class="col-12 col-lg-7">
   <article class="do">
     <h2>Que hacemos:</h2>
     <h4>“Convertimos tu deseo de aprender inglés en algo concreto”</h4>
     <p>El idioma inglés es predominante sin duda en los negocios, las comunicaciones, el transporte y el turismo a nivel internacional; además, la informática y la tecnología moderna utilizan, en la mayoría de los casos, palabras provenientes de este idioma. Por eso, el manejo del inglés se ha convertido en una herramienta indispensable. English Link responde a esta demanda del aprendizaje del idioma inglés como lengua extranjera para proporcionar a los destinatarios el desarrollo, afianzamiento y el uso eficiente de las competencias comunicativas ofreciendo cursos de capacitación que atienden a las necesidades  y objetivos de cada alumno/empresa/corporación.</p>
   </article>
 </div>
</div>
<div id="cursos"></div>
</section>

</div> -->

<div class="container">
      <section class="about" id="about">
      <div class="row featurette">
          <div class="col-md-5">
                <article class="who">
                   <h2>Quienes Somos:</h2>
                   <h4>"Somos el link que te abre las puertas al mundo"</h4>
                   <p>English Link es un grupo de profesores calificados y especializados en la enseñanza del idioma inglés para estudiantes y profesionales de todas las edades cuyo objetivo principal sea mejorar sus capacidades/ habilidades lingüísticas en todos sus niveles, permitiendo de esta forma una participación más activa de la persona en la ya consolidada globalización.</p>
                 </article>
          </div>
          <div class="col-md-7 d-none d-md-block">
            <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166a299ea8f%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166a299ea8f%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> -->
            <img class="featurette-image img-fluid mx-auto " data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="img/foto1.jpg" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-5 order-md-2">
                <article class="do">
                  <h2>Que hacemos:</h2>
                  <h4>“Convertimos tu deseo de aprender inglés en algo concreto”</h4>
                  <p>El idioma inglés es predominante sin duda en los negocios, las comunicaciones, el transporte y el turismo a nivel internacional; además, la informática y la tecnología moderna utilizan, en la mayoría de los casos, palabras provenientes de este idioma. Por eso, el manejo del inglés se ha convertido en una herramienta indispensable. English Link responde a esta demanda del aprendizaje del idioma inglés como lengua extranjera para proporcionar a los destinatarios el desarrollo, afianzamiento y el uso eficiente de las competencias comunicativas ofreciendo cursos de capacitación que atienden a las necesidades  y objetivos de cada alumno/empresa/corporación.</p>
                </article>
                    </div>
          <div class="d-none d-md-block col-md-7 order-md-1">
            <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166a299ea99%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166a299ea99%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;"> -->
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="img/foto2.jpg" data-holder-rendered="true">
          </div>
        </div>
        <div id="cursos"></div>
      </section>
</div>



















<div class="container">
      <hr class="featurette-divider">
</div>




<!-- Courses Section  -->

<div class="d-none d-lg-block container">
  <div class="courses-container">
    <div class="seccion one pos-left">
      <div class="container-smaill" id="img-contenedor">
      <img class="backg" src="./img/courses/iviajero.jpg" alt="">
      </div>
      <img class="lat" src="./img/courses/elemento-curso-medio-esq.png" alt="">
      <h3 class="course-tit">Inglés<br> para viajeros</h3>
      <a class="course-btn" href="course/viajero">Conoce más</a>

    </div>


    <div class="seccion two pos-left">
      <div class="container-small" id="img-contenedor">
      <img class="backg" src="./img/courses/examenesint.jpg" alt="">
      </div>
      <img class="lat" src="./img/courses/elemento-curso-medio-esq.png" alt="">
     <h3 class="course-tit small-txt">Exámenes <br>internacionales</h3>
     <a class="course-btn" href="course/exam">Conoce más</a>


    </div>

    <div class="seccion three pos-left">
      <div class="" id="img-contenedor">
      <img class="backg big-img" src="./img/courses/kids.jpg" alt="">
      </div>
      <img class="lat-grande" src="./img/courses/elemento-curso-grande.png" alt="">
      <h3 class="course-tit big-txt">English <br>Link Kids</h3>
      <a class="course-btn big-btn" href="course/kids">Conoce más</a>
    </div>


    <div class="seccion four pos-right">
      <div class="container-small" id="img-contenedor">
      <img class="backg" src="./img/courses/incompany.jpg" alt="">
      </div>
      <img class="lat" src="./img/courses/elemento-curso-medio-dir.png" alt="">
      <h3 class="course-tit small-txt">Capacitación <br>In-Company</h3>
      <a class="course-btn" href="course/company">Conoce más</a>

    </div>
    <div class="seccion five pos-right">
      <div class="container-small"  id="img-contenedor">
      <img class="backg" src="./img/courses/conversacion.jpg" alt="">
      </div>
      <img class="lat" src="./img/courses/elemento-curso-medio-dir.png" alt="">
      <h3 class="course-tit">Cursos de <br> Conversación</h3>
      <a class="course-btn" href="course/conversacion">Conoce más </a>

    </div>
    <div class="seccion pos-left inf">
      <div class="container-inf"  id="img-contenedor">
      <img class="backg" src="./img/courses/ingles-general.jpg" alt="">
    </div>
      <img class="lat" src="./img/courses/elemento-curso-inf.png" alt="" >
      <h3 class="course-tit" id="tit-inf">Inglés <br> General</h3>
      <a class="course-btn" id="btn-inf" href="course/general">Conoce más</a>
      <div id="contacto"></div>

    </div>
  </div>
  <div id="contacto"></div>
</div>


<!-- Courses section mobile -->
<div class="fluid-container m-2 d-lg-none mobile-courses">
<div class="row mb-2">
      <div class="col-6 pr-1" >
            <a href="course/viajero"><img class="img-fluid" src="img/mobile/viajero.jpg" alt=""></a>
      </div>
      <div class="col-6 pl-1" >
            <a href="course/conversacion"><img class="img-fluid" src="img/mobile/conversacion.jpg" alt=""></a>
      </div>
</div>
<div class="row mb-2">
      <div class="col">
            <a href="course/kids"><img class="img-fluid" src="img/mobile/kids.jpg" alt=""></a>
      </div>
</div>
<div class="row mb-2">
      <div class="col-6 pr-1">
            <a href="course/exam"><img class="img-fluid" src="img/mobile/exam.jpg" alt=""></a>
      </div>
      <div class="col-6 pl-1">
            <a href="course/company"><img class="img-fluid" src="img/mobile/company.jpg" alt=""></a>
      </div>
</div>
<div class="row">
      <div class="col">
            <a href="course/general"><img class="img-fluid" src="img/mobile/conversacion.png" alt=""></a>
      </div>
</div>'
</div>

<div class="fluid-container form-index">
      <div class="row">
            <div class="d-none d-md-block col-md-2">
            <img src="img/lateral-doble.png" alt="">
            </div>
            <div class="d-none d-md-block col-md-6">

            </div>
            <div class="col-12 col-md-4 form-back">
                  <form class="form-contact" method="post" action='#contacto'>

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
                        <option value="Elemental">Básico</option>
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

@endsection
