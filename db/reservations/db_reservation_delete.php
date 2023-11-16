<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$reservation_id = $_POST['reservation_id'];

$sql = "DELETE 
FROM 034_reservations
WHERE reservation_id = $reservation_id;";

$resultado = mysqli_query($conn, $sql);

header("Location: /student034/dwes/index.php");