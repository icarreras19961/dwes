<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$type = $_POST['opcion'];
echo $type;
$room_img;
if ($type == 1) {
  $room_img = 'room_1';
}elseif($type == 2){
  
  $room_img = 'room_2';
}else{
  $room_img = 'room_3';
}
$sql =
  "INSERT 034_rooms(room_id,type_of_reservation,`status`,room_img)
  VALUES
  (DEFAULT,$type,'Ready','$room_img');
  ";
$resultado = mysqli_query($conn, $sql);
