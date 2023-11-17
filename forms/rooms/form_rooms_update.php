<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div style="width: 20%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded p-3 " action="/student034/dwes/db/rooms/db_rooms_update.php" method="POST">
    <p> Witch room do you want to change?</p>
    <input class="form-control my-3" type="text" name="room_id">
    <select class="form-select my-3" name="opcion">
      <option value="1">All</option>
      <option value="2">Half</option>
      <option value="3">Just Room</option>
    </select>
    <label><input class="btn btn-primary border shadow" type="submit" value="submit" name="submit"></label>
  </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>