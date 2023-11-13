<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div  style="width: 15%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" action="/student034/dwes/db/customers/db_customer_insert.php" method="POST">
    <div class="form-group">
      <label class="m-2 form-group">Nombre <input class="form-control" type="text" name="name" required></label>
    </div>
    <div class="form-group">
      <label class="m-2">Apellido <input class="form-control" type="text" name="surname"></label>
    </div>
    <div class="form-group">
      <label class="m-2">Password <input class="form-control" type="password" name="pwd" required></label>
    </div>
    <div class="form-group">
      <label class="m-2">Dni <input class="form-control" type="text" name="dni"></label>
    </div>
    <div class="form-group">
      <label class="m-2">Telefono <input class="form-control" type="text" name="phone"></label>
    </div>
    <div class="form-group" style="text-align: center;">
      <label class="m-2"><input class="btn btn-primary" type="submit" value="submit" name="submit"></label>
    </div>
  </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>