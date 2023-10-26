<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<?php
if (isset($_GET['submit'])) {
   //La consexion a la base de datos
   include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
   $date_in = $_GET['date_in'];
   $date_out = $_GET['date_out'];

   // echo $date_in;

   $sql = "SELECT * 
            FROM 034_rooms 
            WHERE room_id NOT IN (
               SELECT room_id
               FROM 034_reservations
               WHERE check_in <= '$date_out' AND check_out >= '$date_in')";

   $resultado = mysqli_query($conn, $sql);
   $rooms = mysqli_fetch_all($resultado, MYSQLI_ASSOC);


   // print_r($muestra[0]); //el print_r es para array el echo par aun unico dato
   foreach ($rooms as $room) {
      print_r($room);
      echo "<br>";
   }
}
?>