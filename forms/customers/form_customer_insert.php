<?php
include('C:/xampp/htdocs/student034/dwes/header.php');
?>


<div class="m-5">
  <form action="/student034/dwes/db/customers/db_customer_select.php" method="POST">
    <label class="m-2">Nombre<input type="text" name="name"></label>
    <label class="m-2">Apellido<input type="text" name="surname"></label>
    <label class="m-2">Dni<input type="text" name="dni"></label>
    <label class="m-2">Telefono<input type="text" name="phone"></label>
    <label class="m-2"><input type="submit" value="submit" name="submit"></label>
  </form>
</div>



<?php
include('C:/xampp/htdocs/student034/dwes/footer.php');
?>