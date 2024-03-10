<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/functions/php/front-end_layouts/showMyReservations.php');


$solicitud = $_POST['q'];

$sql = "SELECT * FROM `034_reservations` WHERE id_client_master LIKE '%$solicitud%'";

$resultado = mysqli_query($conn, $sql);
$reservas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>
<div class="d-flex justify-content-center align-items-center flex-wrap">
  <?php
  showMyReservations($reservas,$solicitud);
  ?>
</div>