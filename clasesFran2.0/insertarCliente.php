<?php
$nombre = $segNombre = $apPaterno = $apMaterno = $direccion = $codigoPostal = $telLocal = $telMovil = $email = $pass = $passVerificacion = $matricula = $fecha = $ibero = $consulta = "";

if(isset($_POST['registro'])){
	$matricula = "00000";
	$ibero = 1;
	base();
}else if(isset($_POST['registroIbero'])){
	$matricula = test_input($_POST['matricula']);
	$ibero = 2;
	base();
}

function base(){
	get_data();
	validate_name();
	if(test_pass() && validate_postcode()){
		create_sql();
		insert_data();
	}
}

function insert_data(){
	global $consulta;
	include 'conexion.php';
	mysqli_query($conn,$consulta) or die (mysqli_error($conn));
	mysqli_close($conn);
	$consulta = "";
}

function create_sql(){
	global $nombre, $segNombre, $apPaterno, $apMaterno, $direccion, $codigoPostal, $telLocal, $telMovil, $email, $pass, $passVerificacion, $fecha, $matricula, $ibero, $consulta;

	$consulta = "INSERT INTO Cliente(Nombre, SegundoNombre, ApellidoMaterno, ApellidoPaterno, Direccion, CodigoPostal, TelefonoLocal, TelefonoMovil, Email, FechaRegistro, TipoCliente, Pass, Ibero) VALUES ('$nombre' , '$segNombre' , '$apMaterno' , '$apPaterno' , '$direccion' , '$codigoPostal' , '$telLocal' , '$telMovil' , '$email' , '$fecha' , '$matricula' , '$pass' , '$ibero')";

	$nombre = $segNombre = $apPaterno = $apMaterno = $direccion = $codigoPostal = $telLocal = $telMovil = $email = $pass = $passVerificacion = $matricula = $fecha = $ibero = "";
}

function get_data(){
	global $nombre, $segNombre, $apPaterno, $apMaterno, $direccion, $codigoPostal, $telLocal, $telMovil, $email, $pass, $passVerificacion, $fecha;
	$nombre = test_input($_POST['nombre']);
	$segNombre = test_input($_POST['segundo_nombre']);
	$apPaterno = test_input($_POST['apellido_paterno']);
	$apMaterno = test_input($_POST['apellido_materno']);
	$direccion = test_input($_POST['direccion']);
	$codigoPostal = test_input($_POST['codigo_postal']);
	$telLocal = test_input($_POST['telefono_local']);
	$telMovil = test_input($_POST['telefono_movil']);
	$email = test_input($_POST['email']);
	$pass = test_input($_POST['psw']);
	$passVerificacion = test_input($_POST['psw_repeat']);
	$fecha = date("y.m.d");
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}

function test_names($data){ #valida nombres con caracteres normales
	if (!preg_match("/^[a-zA-Z-' ]*$/",$data)) {
  		return  "Only letters and white space allowed";
	}
	return $data;
}

function test_pass(){
	global $pass, $passVerificacion;
	if($pass == $passVerificacion){ #verifica que sean iguales
		$pass = password_hash($pass, PASSWORD_BCRYPT);
		return true;
	}
	return false;
}

function validate_name(){
	global $nombre, $segNombre, $apPaterno, $apMaterno;
	$nombre = strtoupper($nombre);
	$segNombre = strtoupper($segNombre);
	$apPaterno = strtoupper($apPaterno);
	$apMaterno = strtoupper($apMaterno);
}

function validate_postcode(){
	global $codigoPostal;
	if(strlen($codigoPostal) == 5){
		return true;
	}
	return false;
}

?>