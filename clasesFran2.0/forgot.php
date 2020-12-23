<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
?>
<body background="img/fondo2.jpg" style="background: url(img/fondo2.jpg) no-repeat center center fixed; background-size: cover;">
	<div class="row col-12" style="position: absolute;top:100px;margin: auto;">
		<div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="background-image: url(img/fondo.jpg); opacity: 0.85; filter: alpha(opacity=85); border-radius: 15px; margin:auto; text-align:center;">
		<label for="email" class="col-form-label" style="font-size:  large; color: white; font-family: Lucida Calligraphy"><b>Ingrese el correo asociado a su cuenta</b></label><br>
		<input type="text" class="form-control input-lg" placeholder="Ingrese Correo" name="email" required><br><br><br>
		<button type="submit" class="btn btn-block" style="background-color: rgba(255,255,255,1);color:black; font-family: Lucida Calligraphy; font-size: large;">Recuperar Contraseña</button><br>
	</div>
	</div>
</body>
<?php
	include ("footer.html");
?>
</html>