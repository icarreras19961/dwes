<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');


if (isset($_POST['submit'])) {

  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $room_id = $_POST['room_id'];
  $type_of_reservation = $_POST['opcion'];

  $sql = "  UPDATE 034_rooms
            SET type_of_reservation = $type_of_reservation
            WHERE $room_id = room_id";
  if (mysqli_query($conn, $sql)) {
    header('Location: /student034/dwes/index.php');
  } else {
    echo 'error';
  }
}

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
