<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
$date_in = $_POST['date_in'];
$date_out = $_POST['date_out'];
$room_id = $_POST['room_id'];
$user_id = $_POST['user_id'];
$room_price = $_POST['room_price'];

echo $date_in . $date_out . $room_id . $user_id . $room_price;

$sql = "INSERT INTO  	034_reservations(reservation_id,id_client_master,check_in,check_out,initial_price,room_id)
        VALUES
        (DEFAULT,$user_id,'$date_in','$date_out',$room_price,$room_id);";


if (mysqli_query($conn, $sql)) {
  echo 'Reserva confirmada';
} else {
  echo 'ni un insert enserio?';
}
header('Location: /student034/dwes/index.php');
