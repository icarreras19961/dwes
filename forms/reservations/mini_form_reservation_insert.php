<form action="/student034/dwes/db/reservations/db_reservation_insert.php" method="post">
  <input type="hidden" name="date_in" value="<?php echo $date_in; ?>">
  <input type="hidden" name="date_out" value="<?php echo $date_out; ?>">
  <input type="hidden" name="room_id" value="<?php print_r($room['room_id']); ?>">
  <input type="hidden" name="room_price" value="<?php echo $room_price; ?>">
  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
  <label><input type="submit" value="submit" name="submit"></label>
</form>