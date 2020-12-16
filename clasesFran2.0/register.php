<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
?>
<body background="img/fondo2.jpg" style="background: url(img/fondo2.jpg) no-repeat center center fixed; background-size: cover;">
<h1>Registrarse</h1>
    <p>Ingresa tus datos para el registro</p>
    <hr>

    <label for="email"><b>Correo</b></label>
    <input type="text" placeholder="Ingresa Correo" name="email" id="email" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingresa Contraseña" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repite contraseña</b></label>
    <input type="password" placeholder="Repite Contraseña" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <button type="submit" class="registerbtn">Registrarse</button>
  </div>
  
  <div class="contenedor inicios">
    <p>¿Ya tienes una cuenta? <a href="#">Inicia Sesion</a>.</p>
  </div>
</body>
<?php
	include ("footer.html");
?>
</html>