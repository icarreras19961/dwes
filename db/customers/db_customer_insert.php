<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$dni = $_POST['dni'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];

$sql =
  "INSERT 034_clients(client_id,client_name,client_surname,client_DNI,client_phone,client_password)
  VALUES
  (DEFAULT,'$name','$surname','$dni','$phone',$pwd);
  ";
$resultado = mysqli_query($conn, $sql);
header("Location: /student034/dwes/index.php");