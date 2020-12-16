<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
?>
<body background="img/fondo2.jpg" style="background: url(img/fondo2.jpg) no-repeat center center fixed; background-size: cover;">
	<div class="row col-12" style="position: absolute;top:100px;margin: auto;">
		<label for="uname"><b>Usuario</b></label>
		<input type="text" placeholder="Ingrese Usuario" name="uname" required>
		<label for="psw"><b>Contraseña</b></label>
		<input type="password" placeholder="Ingrese Contraseña" name="psw" required>
		<button type="submit">Ingresar</button>
		<label>
		<input type="checkbox" checked="checked" name="Recuerdame"> Recuerdame
		</label>
		<span class="psw"> <a href="forgot.php">Olvide contraseña</a></span>
	</div>
</body>
<?php
	include ("footer.html");
?>
</html>