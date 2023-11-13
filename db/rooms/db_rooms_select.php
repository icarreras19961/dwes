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
    <div class="bg-light m-2 p-2 rounded border shadow" style="width: 300px; float:left;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <img src="../../imagenes/Rooms/<?php print_r($room['room_img'] . ".png") ?>" alt="" class="img-fluid rounded">
          </div>
          <!-- room_id <?php print_r($room['room_id']) ?> -->
          <div class="col-lg-12">
            <ul>
              <li>TV</li>
              <li>Swimming Pool</li>
              <li>Mini Bar</li>
            </ul>
          </div>

        </div>
        <hr>
        <div style="width: 100px; float:left;">

          <?php if ($room['type_of_reservation'] == 'All') {
            echo "250";
            $room_price = 250;
          } elseif ($room['type_of_reservation'] == 'Half') {
            echo "200";
            $room_price = 200;
          } else {
            echo "120";
            $room_price = 120;
          }
          ?> €/night</div>
      </div>
    </div>
<?php
  }
}
// include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>
