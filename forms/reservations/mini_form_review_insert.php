<form action="/student034/dwes/forms/reservations/form_review_insert.php" method="post">
  <input type="text" name="client_id" value="<?php echo $client_id; ?>" hidden>
  <input type="text"name="reservation_id" value="<?php print_r($reserva['reservation_id'])  ?>" hidden>
  <input class="btn btn-light mx-4 border shadow" type="submit" name="submit" value="Review">
</form>