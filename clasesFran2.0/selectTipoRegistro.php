<!DOCTYPE html>
<meta charset="utf-8">

<html>
 <?php
    include("header.html");
?>
<body background="img/fondoi.jpeg" style="background: url(img/fondoi.jpeg) no-repeat center center fixed; background-size: cover; font-family: Lucida Calligraphy;">
    <br>
    <div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="background-image: url(img/fondo.jpg); opacity: 0.85; filter: alpha(opacity=85); border-radius: 15px; margin:auto; text-align:center;">

<h1 style="color: white; font-family: Lucida Calligraphy">Registrarse</h1>
    <p style="color: white;">Ingresa tus datos para el registro</p>
    <hr>

<form action="register.php" style="align-content: center; width: 100%; " >    
    <div>

        <button type="submitCliente" class="btn btn-block btn-info" name="registroCliente" style=" background-color: rgba(255,255,255,1);color:black; font-family: Lucida Calligraphy; font-size: large; width:100%; height:100px;" class="registerbtn" >Registrarse</button>
</form>
        <br>

<form action="registroIbero.php" style="align-content: center; width: 100%; " >   
        <button type="submitIbero"  class="btn btn-block btn-info" name="registroIbero" style="background-color: rgba(255,255,255,1);color:black; font-family: Lucida Calligraphy; font-size: large; width:100%; height:100px;" class="registerbtn" >  IBERO</button>

    </div>
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
	include ("footer.html");
?>
</html>