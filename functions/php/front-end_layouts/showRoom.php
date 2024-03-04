<?php
function showRoom($room, $showReservationBoton, $user_role,$user_id,$date_in,$date_out){?>
  <div class="bg-light m-2 p-2 rounded border shadow " style="width: 300px;height:350px;">
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
    <?php
    if ($showReservationBoton) {
      if ($user_role == 'user' || $user_role == 'admin') {
        include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_insert.php');
      }
    }
    ?>
  </div>
<?php
}
