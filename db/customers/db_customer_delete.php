<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'].'/student034/dwes/db/db_connection.php');
  
  $client_id = $_POST['client_id'];

  $sql = "DELETE FROM 034_clients WHERE client_id = $client_id";
  if (mysqli_query($conn, $sql)){
    echo 'Cliente borrado correctamente'; 
  }else{
    echo 'Algo salio mal '. mysqli_error($conn);
  };
  

}
