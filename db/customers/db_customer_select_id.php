<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$client_id = $_POST['client_id'];

$sql = "SELECT * FROM 034_clients WHERE client_id ='$client_id'";

  $resultado = mysqli_query($conn, $sql);
  $client_info = mysqli_fetch_all($resultado, MYSQLI_ASSOC);?>
