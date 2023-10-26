<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$dni = $_POST['dni'];
$phone = $_POST['phone'];

$sql =
  "INSERT 034_clients(client_id,client_name,client_surname,client_DNI,client_phone)
  VALUES
  (DEFAULT,'$name','$surname','$dni','$phone');
  ";
$resultado = mysqli_query($conn, $sql);
