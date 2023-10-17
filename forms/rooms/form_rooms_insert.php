<?php
include('C:/xampp/htdocs/student034/dwes/header.php');
?>
<div>
  <form action="/student034/dwes/db/rooms/db_rooms_insert.php" method="POST">
    <select name="opcion">
      <option value="1">All</option>
      <option value="2">Half</option>
      <option value="3">Just Room</option>
    </select>
    <label><input type="submit" value="submit"></label>
  </form>
</div>


<!-- El footer -->
<?php
include('C:/xampp/htdocs/student034/dwes/footer.php');
?>