<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/functions/php/front-end_layouts/showMyReservations.php');

$sql = "
SELECT *FROM 034_reservations;";

$resultado = mysqli_query($conn, $sql);
$muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

showMyReservations($muestra);

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
