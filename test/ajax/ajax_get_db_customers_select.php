<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/functions/php/front-end_layouts/showCustomer.php');


$solicitud = $_GET['q'];
$sql = "SELECT * FROM `034_clients` WHERE client_name LIKE '%$solicitud%'";

$resultado = mysqli_query($conn, $sql);
$customers = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>
<div class="d-flex justify-content-center align-items-center flex-wrap">
  <?php
  foreach ($customers as $customer) {
    showCustomer($customer);
  }
  ?>
</div>
