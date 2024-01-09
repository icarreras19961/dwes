<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/functions/php/front-end_layouts/showCustomer.php');
?>
<?php
// if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $sql = 'SELECT * FROM 034_clients ORDER BY client_surname ASC';
  $resultado = mysqli_query($conn, $sql);
  $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>
<div class="d-flex justify-content-center align-items-center flex-wrap">
  <?php foreach ($muestra as $customer) { 
    showCustomer($customer);
  }
?>
</div>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>