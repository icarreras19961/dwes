<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'].'/student034/dwes/db/db_connection.php');
  
  $sql = 'SELECT * FROM 034_rooms';
  $resultado = mysqli_query($conn, $sql);
  $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

 foreach($muestra as $room){?>
  <div>
    <img src="../../imagenes/Rooms/<?php print_r($room['room_img'].".png")?>" alt="">
  </div>
  <!-- print_r($room);
  echo "<br>"; -->
 <?php
 }

}
?>