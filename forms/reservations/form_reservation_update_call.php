<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<form action="/student034/dwes/forms/reservations/form_reservation_update.php" method="post">
  Id del usuario al que quieres modificarle la reservations
  <input type="text" name="client_id">
  <input type="submit" name="submit" value="submit">
</form>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>