@include('frontend/parts/head')
@include('frontend/parts/header')
<!-- Form -->
<div id="form-wrapper">
<section class="form-section">
<form action="" method="POST">
<?php if(isset($_GET['success'])):?>
<div class="alert alert-success" role="alert">
 Su cuenta se creo con éxito.
</div>
<?php endif; ?>
<?php if(isset($_GET['session'])):?>
 <div class="alert alert-warning" role="alert">
    Por favor inicia sesión.
 </div>
 <?php endif; ?>
 <?php if(isset($_GET['logout'])):?>
    <div class="alert alert-sucess" role="alert">
      Sesión cerrada con éxito.
    </div>
    <?php endif; ?>
            <h2>Ingresá:</h2>
            <input type="number" maxlength="8" minlength="8" name="dni" placeholder="N° de DNI" >
<p class="warning"></p>
            <input type="password" name="pwd" placeholder="Contraseña" value="">
<p class="warning"><?php if ($_POST){echo Validate::login($_POST);} ?></p>
      <input type="submit" value="Ingresar">
<div class="caja-recuerdame">
<input type="checkbox" name="recuerdame" value="true">
<label class="recuerdame">Recuerdame</label>
</div>
</form>
<a href="register" class="form-bottom-link">Todavía no tengo cuenta</a>
<a href="forgot-password" class="form-bottom-link">Olvidaste tu contraseña?</a>
</section></div>

@include('frontend/parts/scripts')
