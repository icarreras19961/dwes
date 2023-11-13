<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<form class="m-5 p-4 shadow bg-white rounded"  action="/student034/dwes/db/customers/db_customer_login.php" method="POST">
  <div class="form-group">
    Introduce tu nombre de usuario: <input class="form-control m-2" type="text" name="user"></div>
  <div class="form-group">
    Introduce tu contraseña: <input class="form-control m-2" type="password" name="pwd"></div>
  <div class="form-group">
    <label for=""><input class="form-control m-2 btn btn-primary" type="submit" name="submit" id=""></label>
  </div>
</form>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>