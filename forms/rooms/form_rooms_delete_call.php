<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div>
  <form action="/student034/dwes/forms/rooms/form_rooms_delete.php" method="POST">
    Que room quieres eliminar?
    <input type="text" name="room_id">
    <label><input type="submit" value="submit" name="submit"></label>
  </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>