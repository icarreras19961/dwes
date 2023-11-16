<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div  style="width: 15%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" action="/student034/dwes/db/reservations/db_reservation_insert.php" method="POST">
    <div class="form-group">
      <label class="m-2 form-group">Client id<input class="form-control" type="text" name="user_id" ></label>
    </div>
    <div class="form-group">
      <label class="m-2">Date in <input class="form-control" type="date" name="date_in" required></label>
    </div>
    <div class="form-group">
      <label class="m-2">Date out <input class="form-control" type="date" name="date_out" required></label>
    </div>
    <div class="form-group">
      <label class="m-2">Room id <input class="form-control" type="text" name="room_id"></label>
    </div>
    <div class="form-group">
      <label class="m-2">Initial price <input class="form-control" type="text" name="room_price"></label>
    </div>
    
    <div class="form-group" style="text-align: center;">
      <label class="m-2"><input class="btn btn-primary" type="submit" value="submit" name="submit"></label>
    </div>
  </form>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>