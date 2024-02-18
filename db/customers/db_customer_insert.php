
<?php

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$dni = $_POST['dni'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
$foto = $_FILES['foto']['name'];
$ruta = $_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/imagenes/customers/DNI/' . $_FILES['foto']['name'];
$email = $_POST['email'];

$sql =
  "INSERT 034_clients(client_id,client_name,client_surname,client_DNI,client_phone,client_password,foto_dni,client_email)
  VALUES
  (DEFAULT,'$name','$surname','$dni','$phone','$pwd','$foto','$email');
  ";
$resultado = mysqli_query($conn, $sql);
move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);

if (mysqli_query($conn, $sql)) {
  echo 'Reserva confirmada';
  header('Location: /student034/dwes/index.php');
} else {
  echo 'ni un insert enserio?';
}
