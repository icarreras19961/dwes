<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');


$name = $email = $pwd = "";
$error = array("email" => "", "name" => "", "pwd" => "");
$allOk = [true, true, true];
if (isset($_POST['submit'])) {
  // check name
  if (empty($_POST['name'])) {
    $error["name"] = "Please insert the name <br/>";
    $allOk[0] = false;
  } else {
    $name = $_POST['name'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
      $error["name"] = 'Name must be letters and spaces only';
      $allOk[0] = false;
    }
  }

  //Check email
  if (empty($_POST['email'])) {
    $allOk[1] = false;
    $error["email"] = "Please insert the email <br/>";
  } else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $allOk[1] = false;
      $error["email"] = 'email must be a valid email address';
    }
  }

  //Check password
  if (empty($_POST['pwd'])) {
    $pwd = $_POST['pwd'];
    $allOk[2] = false;
    $error["pwd"] = "Please insert the password <br/>";
  } else {
    $allOk[2] = false;
    $error["pwd"] = "The password its invalid";
  }
}

// equivalente al db_customer_insert
if ($allOk[0] = true && $allOk[1] = true && $allOk[2] = true) {

  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/customers/db_customer_insert.php');
}
?>

<div style="width: 25%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" action="/student034/dwes/forms/customers/form_customer_insert_db.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="m-2">Nombre <input class="form-control" type="text" name="name" <?php echo htmlspecialchars($name) ?>>
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
      <label class="m-2">Email<input class="form-control" type="text" name="email" <?php echo htmlspecialchars($email) ?>></label>
      <div style="color: red;"><?php echo $error["email"]; ?></div>
    </div>
    <div class="form-group">
      <label class="m-2">Password <input class="form-control" type="password" name="pwd" <?php echo htmlspecialchars($pwd) ?>></label>
      <div style="color: red;"><?php echo $error["pwd"]; ?></div>
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