<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
?>
<body background="img/fondo2.jpg" style="background: url(img/fondo2.jpg) no-repeat center center fixed; background-size: cover; font-family: Lucida Calligraphy;">
	<div class="row col-12" style="position: absolute;top:100px;margin: auto;">
		<div class=" col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="background-image: url(img/fondo.jpg); opacity: 0.85; filter: alpha(opacity=85); border-radius: 15px; margin:auto; text-align:center;">

		<label for="uname" class="col-form-label" style="font-size:  large; color: white;"><b>Usuario</b></label>
		<br>
		<input type="text" class="form-control input-lg" placeholder="Ingrese Usuario" name="uname" required>
		<br>
		<label for="psw" class="col-form-label" style="font-size:  large; color: white;"><b>Contraseña</b></label>
		<br>
		<input type="password" class="form-control input-lg" placeholder="Ingrese Contraseña" name="psw" required>
		<br>
		<br>
		<button class="btn btn-block" style="background-color: rgba(255,255,255,1);color:black; font-family: Lucida Calligraphy; font-size: large;"type="submit">Ingresar</button>
		<br>
		<label style="background-color: rgba(0,0,0,.5); color: white; font-size: large; border-radius: 5px;">
		<input type="checkbox" style="height: 25px; width: 25px;" checked="checked" name="Recuerdame"> Recuerdame
		<span class="psw"> <a href="forgot.php">Olvide contraseña</a></span>
		</label>
		
		</div>
	</div>
</body>
<?php
	include ("footer.html");
?>
</html>