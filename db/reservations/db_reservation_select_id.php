<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$reservation_id = $_POST['reservation_id'];

$sql = "SELECT * FROM 034_reservations WHERE reservation_id ='$reservation_id'";

  $resultado = mysqli_query($conn, $sql);
  $client_info = mysqli_fetch_all($resultado, MYSQLI_ASSOC);?>
