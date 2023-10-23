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
    echo 'Hola ' . $customer[0]['client_name'];
  }
}
