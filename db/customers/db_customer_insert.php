<?php

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$type = $_POST['opcion'];

$sql =
  "INSERT 034_clients(client_id,client_name,client_surname,client_DNI,client_phone)
  VALUES
  (DEFAULT,$type,'Ready');
  ";
$resultado = mysqli_query($conn, $sql);
