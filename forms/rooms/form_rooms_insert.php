<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<div style="width: 15%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" action="/student034/dwes/db/rooms/db_rooms_insert.php" method="POST">
    <select  class="form-select" name="opcion">
      <option value="1">All</option>
      <option value="2">Half</option>
      <option value="3">Just Room</option>
    </select>
    <label><input class="btn btn-primary  border shadow" type="submit" value="submit"></label>
  </form>
</div>


<!-- El footer -->
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>