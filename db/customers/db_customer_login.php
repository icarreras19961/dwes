<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/functions/php/formValidation.php');

  $login_user = validateInput($_POST['user']);
  $login_pwd = validateInput($_POST['pwd']);

  $sql = "SELECT * FROM 034_clients WHERE client_name = '$login_user' AND client_password = '$login_pwd';";

  $resultado = mysqli_query($conn, $sql);
  $customer = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

  if (empty($customer)) {
?>
    <div class="bg-white p-4 rounded shadow" style="width: 25%; margin:auto;margin-top:50px">
      <h1>The User name or the password are not correct</h1>
      <div class="container">
        <div class="row">
          <div class="col-6" style="text-align: center;">
            <button class="btn btn-warning shadow"><a class="col" href="/student034/dwes/forms/customers/form_customer_login.php">Sign in</a></button>
          </div>
          <div class="col-6" style="text-align: center;">
            <button class="btn btn-light  border shadow"><a href="/student034/dwes/forms/customers/form_customer_insert.php">Register</a>
            </button>
          </div>

        </div>
      </div>
    </div>
<?php
  } else {
    $_SESSION['user'] = $customer[0]['client_name'];
    $_SESSION['user_id'] = $customer[0]['client_id'];
    $_SESSION['user_role'] = $customer[0]['role'];
    $_SESSION['user_foto'] = $customer[0]['client_avatar'];
    header('Location: /student034/dwes/index.php');
  }
}
