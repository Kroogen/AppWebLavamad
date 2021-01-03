<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
?>
<body background="img/fondo2.jpg" style="background: url(img/fondo2.jpg) no-repeat center center fixed; background-size: cover; font-family: Lucida Calligraphy;">
    <br>
    <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="background-image: url(img/fondo.jpg); opacity: 0.85; filter: alpha(opacity=85); border-radius: 15px; margin:auto; text-align:center;">

<h1 style="color: white; font-family: Lucida Calligraphy">Registrarse</h1>
    <p style="color: white;">Ingresa tus datos para el registro</p>
    <hr>

<form method="POST">
    <label for="nombre" style="color: white; font-size:  large;"><b>*Nombre</b></label><br>
    <input type="text" placeholder="Ingresa Nombre" class="form-control input-lg" name="nombre" id="nombre" required><br>

    <label for="segundo_nombre" style="color: white; font-size:  large;"><b>Segundo Nombre</b></label><br>
    <input type="text" placeholder="Ingresa Segundo Nombre" class="form-control input-lg" name="segundo_nombre" id="segundo_nombre"><br>

    <label for="apellido_paterno" style="color: white; font-size:  large;"><b>*Apellido Paterno</b></label><br>
    <input type="text" placeholder="Ingresa Apellido Paterno" class="form-control input-lg" name="apellido_paterno" id="apellido_paterno" required><br>

    <label for="apellido_materno" style="color: white; font-size:  large;"><b>*Apellido Materno</b></label><br>
    <input type="text" placeholder="Ingresa Apellido Materno" class="form-control input-lg" name="apellido_materno" id="apellido_materno" required><br>

    <label for="direccion" style="color: white; font-size:  large;"><b>*Dirección</b></label><br>
    <input type="text" placeholder="Ingresa Dirección" class="form-control input-lg" name="direccion" id="direccion" required><br>

    <label for="codigo_postal" style="color: white; font-size:  large;"><b>*Código Postal</b></label><br>
    <input type="number" placeholder="Ingresa Código Postal" class="form-control input-lg" name="codigo_postal" id="codigo_postal" required><br>

    <label for="telefono_local" style="color: white; font-size:  large;"><b>*Teléfono Local (222-222-2222)</b></label><br>
    <input type="tel" placeholder="222-222-2222" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control input-lg" name="telefono_local" id="telefono_local" required><br>

    <label for="telefono_movil" style="color: white; font-size:  large;"><b>*Teléfono Movil (2222-22-2222)</b></label><br>
    <input type="tel" placeholder="2222-22-2222" pattern="[0-9]{4}-[0-9]{2}-[0-9]{4}" class="form-control input-lg" name="telefono_movil" id="telefono_movil" required><br>

    <label for="email" style="color: white; font-size:  large;"><b>*Correo</b></label><br>
    <input type="email" placeholder="Ingresa Correo" class="form-control input-lg" name="email" id="email" required><br>

    <label for="psw" style="color: white; font-size:  large;"><b>*Contraseña</b></label><br>
    <input type="password" placeholder="Ingresa Contraseña" class="form-control input-lg" name="psw" id="psw" required><br>

    <label for="psw-repeat" style="color: white; font-size:  large;"><b>*Repite contraseña</b></label><br>
    <input type="password" placeholder="Repite Contraseña" class="form-control input-lg" name="psw_repeat" id="psw-repeat" required><br>

    <br>
    <button type="submit"  class="btn btn-block btn-info" name="registro" style="background-color: rgba(255,255,255,1);color:black; font-family: Lucida Calligraphy; font-size: large;" class="registerbtn" >Registrarse</button>
</form>
    <br>
    <br>
    <div class="contenedor inicios">
    <p style="text-align: center; background-color: rgba(0,0,0,.5); color: white; border-radius: 15px; font-size: large;">¿Ya tienes una cuenta? <a href="#">Inicia Sesion</a>.</p>
    <br>
  </div>
  </div>
  <br>
  <br>
  
</body>

<?php
    include ("insertarCliente.php");
?>

<?php
	include ("footer.html");
?>
</html>