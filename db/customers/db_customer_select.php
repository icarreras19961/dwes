<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $sql = 'SELECT * FROM 034_clients';
  $resultado = mysqli_query($conn, $sql);
  $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);


  foreach ($muestra as $customer) { ?>
    <div class="bg-light m-2 p-2 rounded border" style="width: 500px; float:left; ">
      <h2><?php print_r($customer['client_name'] . ' ' . $customer['client_surname']) ?></h2>
      <hr>
      <h5>Customer settings</h5>

      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/customers/mini_form_customer_update.php');
      ?>
    </div>
<?php
  }
}
?>