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
    <form class="bg-light m-2 p-2 rounded border" style="width: 500px; float:left;">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">

            <img src="../../imagenes/Rooms/<?php print_r($room['room_img'] . ".png") ?>" alt="" width="200px" height="200px">
          </div>
          <!-- room_id <?php print_r($room['room_id']) ?> -->
          <div class="col-lg-4">
            <ul>
              <li>Tele</li>
              <li>Pool</li>
              <li>Food</li>
            </ul>
          </div>
          <div class="col-lg-3">

            <?php if ($room['type_of_reservation'] == 'All') {
              echo "250";
            } elseif ($room['type_of_reservation'] == 'Half') {
              echo "200";
            } else {
              echo "120";
            }
            ?> €/night</div>
        </div>
      </div>
    </form>
<?php
  }
}
?>