
<?php
if (isset($_GET['submit'])) {
   //La consexion a la base de datos
  include('C:\xampp\htdocs\student034\dwes\db\db_connection.php');
  $_date_in = $_GET['date_in'];
  $_date_out = $_GET['date_out'];

  $sql = 'SELECT * FROM 034_reservations';
  $resultado = mysqli_query($conn, $sql);
  $muestra = mysqli_fetch_all($resultado, MYSQLI_NUM);

  
     print_r($muestra[0]) ;//el print_r es para array el echo par aun unico dato
  
  
}
?>