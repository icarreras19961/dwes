<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$client_id = $_POST['client_id'];
$opcion = $_POST['opcion'];
$value = $_POST['valor'];

// print_r($client_id,$opcion,$value);

$sql =
  " UPDATE 034_clients
      SET $opcion = '$value'
    WHERE client_id = $client_id;
  ";
$resultado = mysqli_query($conn, $sql);
