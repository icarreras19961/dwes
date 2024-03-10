<?php
// remoteHost
$servername="remotehost.es";
$database= "dwesdatabase";
$username="dwess1234";
$password ="test1234.";

//Localhost
// $servername = "localhost";
// $database = "hms";
// $username = "root";
// $password = "";

// Creando la conexion
$conn = mysqli_connect($servername, $username, $password, $database); //en este orden o no funciona

//Probar conexion
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}
