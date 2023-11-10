<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div>
  <form action="/student034/dwes/db/rooms/db_rooms_update.php" method="POST">
    Que room quieres cambiar?
    <input type="text" name="room_id">
    <select name="opcion">
      <option value="1">All</option>
      <option value="2">Half</option>
      <option value="3">Just Room</option>
    </select>
    <label><input type="submit" value="submit" name="submit"></label>
  </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>