<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<form action="/student034/dwes/forms/reservations/form_reservation_update.php" method="post">
  Id de la reserva a la que quieres modificar
  <input type="text" name="reservation_id">
  <input type="submit" name="submit" value="submit">
</form>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>