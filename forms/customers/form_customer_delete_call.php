<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<div class="m-4">
  <form action="/student034/dwes/forms/customers/form_customer_delete.php" method="POST">
    <label>ID del usuario a eliminar<input type="text" name="client_id"></label>
    <label><input type="submit" name="submit" value="submit"></label>

  </form>
</div>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>