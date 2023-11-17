<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<div style="width: 20%; margin:auto; margin-top:50px" class="shadow bg-white rounded p-3 ">
  <?php
  if (isset($_POST['submit'])) {
    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

    $room_id = $_POST['room_id'];

    $sql = "SELECT * FROM 034_rooms WHERE room_id = $room_id";
    $resultado = mysqli_query($conn, $sql);
    $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    echo 'Are you sure that you want to delete: ' . $muestra[0]['room_id'];
  }
  ?>

  <form action="/student034/dwes/db/rooms/db_rooms_delete.php" method="POST">
    <label><input  type="hidden" name="room_id" value="<?php echo $_POST['room_id']; ?>"></label>
    <label><input class="btn btn-danger border shadow" type="submit" name="submit" value="Yes"></label>
    <label><button class="btn btn-warning border shadow"><a href="/student034/dwes/index.php">No</a></button></label>

  </form>
</div>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>