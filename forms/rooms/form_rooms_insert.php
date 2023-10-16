<?php
include('C:/xampp/htdocs/student034/dwes/header.php');
?>
<div>
  <form action="/student034/dwes/db/rooms/db_rooms_insert.php" method="POST">
    <select value="opcion">
      <option value="all">All</option>
      <option value="half">Half</option>
      <option value="just_room">Just Room</option>
    </select>
    <label><input type="submit" value="submit"></label>
  </form>
</div>


<!-- El footer -->
<?php
include('C:/xampp/htdocs/student034/dwes/footer.php');
?>