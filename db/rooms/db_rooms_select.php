<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $sql = 'SELECT * FROM 034_rooms';
  $resultado = mysqli_query($conn, $sql);
  $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

  foreach ($muestra as $room) { ?>
    <form class="bg-light m-2 p-2 rounded border" style="width: 300px; float:left;">
        <img src="../../imagenes/Rooms/<?php print_r($room['room_img'] . ".png") ?>" alt="" width="200px" height="200px">
        room_id <?php print_r($room['room_id']) ?>
        <ul>
          <li>Tele</li>
          <li>Swimming pool</li>
          <li>Food</li>
        </ul>
        <p>
          <?php if ($room['type_of_reservation'] == 'All') {
            echo "250";
          } elseif ($room['type_of_reservation'] == 'Half') {
            echo "200";
          } else {
            echo "120";
          }
          ?> €/night</p>
    </form>
<?php
  }
}
?>