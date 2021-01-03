<?php

$servername = "31.22.4.101";
$username = "lavamadb";
$password = "8Sj+a@48EgrB8S";
$database = "lavamadb_control";

$conn = new mysqli($servername, $username, $password, $database  );

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error );
}

?>