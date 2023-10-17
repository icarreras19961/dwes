<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $type = $_POST['opcion'];

  $sql =
    "INSERT 034_room(room_id,type_of_reservation,`status`)
  VALUES
  (DEFAULT,$type,'Ready');
  ";
  $resultado = mysqli_query($conn, $sql);
