<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<div class="m-2">
  <?php
  if (isset($_POST['submit'])) {
    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

    $reservation_id = $_POST['reservation_id'];

    echo 'Are you sure that you wanto to delete: ' . $reservation_id;
  }
  ?>
</div>

<div class="m-4">
  <form action="/student034/dwes/db/reservations/db_reservation_delete.php" method="POST">
    <label><input type="hidden" name="reservation_id" value="<?php echo $_POST['reservation_id']; ?>"></label>
    <label><input type="submit" name="submit" value="Si"></label>
    <label><button><a href="/student034/dwes/index.php">No</a></button></label>

  </form>
</div>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>