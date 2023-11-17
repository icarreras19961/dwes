<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div style="width: 20%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded p-3 " action="/student034/dwes/forms/rooms/form_rooms_delete.php" method="POST">
    <p>With room do you want to delete?</p>
    <input type="text" name="room_id">
    <label><input class="btn btn-primary border shadow" type="submit" value="submit" name="submit"></label>
  </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>