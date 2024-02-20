<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

// TODO acabar el ajax del review

$status = $_GET["q"];
$reservation_id = $_GET["r"];

echo $status . " " . $reservation_id;

$sql = "UPDATE 034_review
        SET `status` = $status
        WHERE $reservation_id = reservation_id";

if (mysqli_query($conn, $sql)) {
        echo 'Reserva confirmada';
} else {
        echo 'ni un insert enserio?';
}
