<?php
$servername="localhost";
$database= "hms";
$username="root";
$password ="";

// Creando la conexion
$conn = mysqli_connect($servername,$username,$password,$database);//en este orden o no funciona

//Probar conexion
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

echo "Conexion establecida";

?>