<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $login_user = $_POST['user'];
  $login_pwd = $_POST['pwd'];

  $sql = "SELECT * FROM 034_clients WHERE client_name = '$login_user' AND client_password = '$login_pwd';";

  $resultado = mysqli_query($conn, $sql);
  $customer = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

  if (empty($customer)) {
    echo 'Cliente no existente';
  } else {
    $_SESSION['user'] = $customer[0]['client_name'];
    $_SESSION['user_id'] = $customer[0]['client_id'];
    $_SESSION['user_role'] = $customer[0]['role'];
    // echo 'Hola ' . $customer[0]['client_name'];
    header('Location: /student034/dwes/index.php');
  }
}
