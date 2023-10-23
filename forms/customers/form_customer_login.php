<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<form class="m-5" action="/student034/dwes/db/customers/db_customer_login.php" method="POST" >
  Introduce tu nombre de usuario: <input type="text" name="user">
  Introduce tu contraseña: <input type="password" name="pwd">
  <label for=""><input type="submit" name="submit" id=""></label>
</form>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>