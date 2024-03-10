<?php
setcookie("date_in", $_GET['date_in'], time() + 86400, "/");
setcookie("date_out", $_GET['date_out'], time() + 86400, "/");
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/functions/php/front-end_layouts/showRoom.php');

if (isset($_GET['submit'])) {
  //La consexion a la base de datos
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
  $date_in = $_GET['date_in'];
  $date_out = $_GET['date_out'];
  $room_price;

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
?>
  <div class="d-flex justify-content-center align-items-center flex-wrap">
    <?php
    foreach ($rooms as $room) {
      showRoom($room, true, $user_role, $user_id, $date_in, $date_out);
    } ?>
  </div>
<?php
}
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
