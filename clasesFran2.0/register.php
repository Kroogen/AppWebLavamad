<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
?>
<body background="img/fondo2.jpg" style="background: url(img/fondo2.jpg) no-repeat center center fixed; background-size: cover; font-family: Lucida Calligraphy;">
    <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="background-image: url(img/fondo.jpg); opacity: 0.85; filter: alpha(opacity=85); border-radius: 15px; margin:auto; text-align:center;">
<h1 style="color: white; font-family: Lucida Calligraphy">Registrarse</h1>
    <p style="color: white;">Ingresa tus datos para el registro</p>
    <hr>

    <label for="email" style="color: white; font-size:  large;"><b>Correo</b></label><br>
    <input type="text" placeholder="Ingresa Correo" class="form-control input-lg" name="email" id="email" required><br>

    <label for="psw" style="color: white; font-size:  large;"><b>Contraseña</b></label><br>
    <input type="password" placeholder="Ingresa Contraseña" class="form-control input-lg" name="psw" id="psw" required><br>

    <label for="psw-repeat" style="color: white; font-size:  large;"><b>Repite contraseña</b></label><br>
    <input type="password" placeholder="Repite Contraseña" class="form-control input-lg" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <button type="submit" class="btn btn-block btn-info" style="background-color: rgba(255,255,255,1);color:black; font-family: Lucida Calligraphy; font-size: large;" class="registerbtn">Registrarse</button>
    <br>
    <br>
    <div class="contenedor inicios">
    <p style="text-align: center; background-color: rgba(0,0,0,.5); color: white; border-radius: 15px; font-size: large;">¿Ya tienes una cuenta? <a href="#">Inicia Sesion</a>.</p>
    <br>
  </div>
  </div>
  
  
</body>
<?php
	include ("footer.html");
?>
</html>