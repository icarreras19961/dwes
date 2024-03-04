<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/functions/php/front-end_layouts/showMyReservations.php');

if (isset($_POST['submit'])) {
  //La consexion a la base de datos
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $client_id = $_POST['client_id'];

  $sql = " SELECT * 
          FROM 034_reservations
          WHERE id_client_master = $client_id";

  $resultado = mysqli_query($conn, $sql);
  $myReservations = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

  showMyReservations($myReservations, $client_id);
}
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
