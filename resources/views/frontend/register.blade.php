@include('frontend/parts/head')
@include('frontend/parts/header')

<!-- Form -->
<div id="form-wrapper">
<section class="form-section">
<form action="" method="POST">
            <h2>Registrate:</h2>
            <input type="text" name="name" placeholder="Nombre" value="<?php echo (isset($name))? $name : '' ?>">
            <p class="warning"><?php if (isset($errores{"name"})){echo $errores["name"];} ?></p>
            <input type="number" maxlength="8" name="dni" placeholder="N° de DNI" value="<?php if(isset($dniA) && ValidarDni($dniA)){ echo $dniA; }?>">
            <p class="warning"><?php if (isset($errores["dni"])){echo $errores["dni"];} ?></p>
            <input type="number" name="tel" placeholder="N° Teléfono" value="<?php echo (isset($tel))? $tel : '' ?>">
            <p class="warning"><?php if (isset($errores["tel"])){echo $errores["tel"];} ?></p>
            <input type="email" name="email" placeholder="E-mail" value="<?php echo (isset($email))? $email : '' ?>">
            <p class="warning"><?php if (isset($errores["email"])){echo $errores["email"];} ?></p>
            <input type="password" name="pwd" placeholder="Contraseña">
            <p class="warning"><?php if (isset($errores["pwd"])){echo $errores["pwd"];} ?></p>
            <input type="password" name="pwd2" placeholder="Re-ingresar contraseña">
            <p class="warning"><?php if (isset($errores["pwd2"])){echo $errores["pwd2"];} ?></p>
            <p class="warning"><?php if(isset($alert)){echo $alert;} ?></p>
      <input type="submit" value="Registrarme">
</form>
<a href="login" class="form-bottom-link">Ya tengo cuenta</a>
<!-- <a href="preguntas_frecuentes.html" class="form-bottom-link">Preguntas Frecuentes</a> -->
</section></div>
</main>

@include('frontend/parts/scripts')
