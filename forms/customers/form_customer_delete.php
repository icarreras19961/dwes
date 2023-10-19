<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<?php
if(isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

  $client_id = $_POST['client_id'];

  $sql = "SELECT * FROM 034_clients WHERE client_id = $client_id";
  $resultado = mysqli_query($conn, $sql);
  $muestra = mysqli_fetch_all($resultado, MYSQLI_NUM);

  print_r($muestra);
}
?>

<div class="m-4">
  <form action="/student034/dwes/forms/customers/form_customer_delete.php" method="post">

    <label><input type="submit" value="delete"></label>

  </form>
</div>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>