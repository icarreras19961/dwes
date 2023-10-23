
<?php
if (isset($_GET['submit'])) {
   //La consexion a la base de datos
   include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
   $_date_in = $_GET['date_in'];
   $_date_out = $_GET['date_out'];

echo $_date_in;

   $sql = "SELECT * FROM 034_reservations WHERE '$_date_in'>=check_in AND '$_date_out'<=check_out" ;
   $resultado = mysqli_query($conn, $sql);
   $muestra = mysqli_fetch_all($resultado, MYSQLI_NUM);


   print_r($muestra[0]); //el print_r es para array el echo par aun unico dato
}
?>