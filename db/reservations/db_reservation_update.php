<?php
// include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');


$reservation_id = $_POST['reservation_id'];
$id_client_master = $_POST['id_client_master'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$room_id = $_POST['room_id'];
// $services = $_POST['services'];
$initial_price = $_POST['initial_price'];
$type_of_reservation = $_POST['type_of_reservation'];

echo $reservation_id . $id_client_master . $check_in . $check_out . $room_id  . $initial_price . $type_of_reservation;

$sql = "UPDATE 034_reservations
          SET  reservation_id ='$reservation_id',
          id_client_master = '$id_client_master',
          check_in = '$check_in',
          check_out = '$check_out',
          room_id = '$room_id',
          initial_price = '$initial_price',
          type_of_reservation = '$type_of_reservation'
        WHERE reservation_id = $reservation_id;
        ";
if (mysqli_query($conn, $sql)) {
  echo 'mu bien';
} else {
  echo 'mu mal';
}

header('Location: /student034/dwes/index.php');
