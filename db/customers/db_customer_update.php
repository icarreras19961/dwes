
<?php

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$client_id = $_POST['client_id'];
$client_name = $_POST['client_name'];
$client_surname = $_POST['client_surname'];
$foto_dni = $_FILES['foto_dni']['name'];
$ruta_dni = $_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/imagenes/customers/DNI/' . $_FILES['foto_dni']['name'];
$foto_avatar = $_FILES['client_avatar']['name'];
$ruta_avatar = $_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/imagenes/customers/avatar/' . $_FILES['client_avatar']['name'];
$client_email = $_POST['client_email'];
$client_phone = $_POST['client_phone'];
$credit_card = $_POST['credit_card'];
$client_country = $_POST['client_country'];
$client_birth = $_POST['client_birth'];

echo $client_id . $client_name . $client_surname . $client_DNI . $client_email . $client_phone . $credit_card . $client_country . $client_birth;

$sql =
  " UPDATE 034_clients
      SET client_name = '$client_name',client_surname='$client_surname',client_avatar = '$foto_avatar',client_DNI='$client_DNI',client_email='$client_email',client_phone='$client_phone',credit_card='$credit_card',client_country='$client_country',client_birth='$client_birth'
    WHERE client_id = $client_id;
  ";
$resultado = mysqli_query($conn, $sql);
move_uploaded_file($_FILES['foto_dni']['tmp_name'], $ruta_dni);
move_uploaded_file($_FILES['client_avatar']['tmp_name'], $ruta_avatar);


header('Location: /student034/dwes/forms/customers/form_customer_select.php');
