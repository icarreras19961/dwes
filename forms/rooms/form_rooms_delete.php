<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<div class="m-2">
  <?php
  if (isset($_POST['submit'])) {
    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

    $room_id = $_POST['room_id'];

    $sql = "SELECT * FROM 034_rooms WHERE room_id = $room_id";
    $resultado = mysqli_query($conn, $sql);
    $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    echo 'Seguro que quieres eliminar la habitacion: '.$muestra[0]['room_id'];
  }
  ?>
</div>

<div class="m-4">
  <form action="/student034/dwes/db/rooms/db_rooms_delete.php" method="POST">
    <label><input type="hidden" name="room_id" value="<?php echo $_POST['room_id']; ?>"></label>
    <label><input type="submit" name="submit" value="Si"></label>
    <label><button><a href="/student034/dwes/index.php">No</a></button></label>

  </form>
</div>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>