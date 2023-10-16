<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'].'/student034/dwes/db/db_connection.php');
  
 $type = $_POST['opcion'];

  $sql = 
  'INSERT 034_rooms(room_id,type_of_reservation,`status`)
  VALUES
  (DEFAULT,opcion,"Ready");
  ';
  $resultado = mysqli_query($conn, $sql);
}
