<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');


if (isset($_POST['submit'])) {

  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $room_id = $_POST['room_id'];

  $sql = "  DELETE 
            FROM 034_rooms
            WHERE room_id = $room_id";
            
  if (mysqli_query($conn, $sql)) {
    header('Location: /student034/dwes/index.php');
  } else {
    echo 'error';
  }
}

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
