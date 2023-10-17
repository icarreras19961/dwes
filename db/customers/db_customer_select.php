<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'].'/student034/dwes/db/db_connection.php');
  
  $sql = 'SELECT * FROM 034_clients';
  $resultado = mysqli_query($conn, $sql);
  $muestra = mysqli_fetch_all($resultado, MYSQLI_NUM);

  print_r($muestra);

}
?>