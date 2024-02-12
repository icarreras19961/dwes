<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');

$error = array("email" => "", "name" => "", "pwd" => "");

if (isset($_POST['submit'])) {
  // check name
  if (empty($_POST['name'])) {
    $error["name"] = "Please insert the name <br/>";
  } else {
    $name = $_POST['name'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
      $error["name"] = 'Name must be letters and spaces only';
    }
  }

  //Check email
  if (empty($_POST['email'])) {
    $error["email"] = "Please insert the email <br/>";
  } else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error["email"] = 'email must be a valid email address';
    }
  }

  //Check password
  if (empty($_POST['pwd'])) {
    $error["pwd"] = "Please insert the password <br/>";
  } else {
    $error["pwd"] = "The password its invalid";
  }
}

?>
<!-- TODO -->
<!-- net ninja video 21 minuto 6:27 -->
<!--se lo he quitado al form para k no haga cosas raras action="/student034/dwes/db/customers/db_customer_insert.php" -->
<div style="width: 25%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="m-2">Nombre <input class="form-control" type="text" name="name">
      </label>
      <div style="color: red;"><?php echo $error["name"]; ?></div>
    </div>
    <div class="form-group">
      <label class="m-2">Apellido <input class="form-control" type="text" name="surname"></label>
    </div>
    <div class="form-group">
      <label class="m-2">DNI<input class="form-control" type="text" name="dni"></label>
    </div>
    <div class="form-group">
      <label class="m-2">Email<input class="form-control" type="text" name="email"></label>
      <div style="color: red;"><?php echo $error["name"]; ?></div>
    </div>
    <div class="form-group">
      <label class="m-2">Password <input class="form-control" type="password" name="pwd"></label>
      <div style="color: red;"><?php echo $error["name"]; ?></div>
    </div>
    <div class="form-group">
      <label class="m-2">Foto dni <input class="form-control" type="file" name="foto" accept="image/png, image/jpg"></label>
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