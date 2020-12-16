<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
?>
<body background="img/fondo2.jpg" style="background: url(img/fondo2.jpg) no-repeat center center fixed; background-size: cover;">
	<div class="row col-12" style="position: absolute;top:100px;margin: auto;">
		<label for="email"><b>Ingrese el correo asociado a su cuenta</b></label>
		<input type="text" placeholder="Ingrese Correo" name="email" required>
		<button type="submit">Recuperar Contraseña</button>
	</div>
</body>
<?php
	include ("footer.html");
?>
</html>