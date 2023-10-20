<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<div class="m-2">
  <?php
  if (isset($_POST['submit'])) {
    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

    $client_id = $_POST['client_id'];

    $sql = "SELECT * FROM 034_clients WHERE client_id = $client_id";
    $resultado = mysqli_query($conn, $sql);
    $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    echo 'Seguro que quieres eliminar a: ';
    echo $muestra[0]['client_name'].' '.$muestra[0]['client_surname'];
  }
  ?>
</div>

<div class="m-4">
  <form action="/student034/dwes/db/customers/db_customer_delete.php" method="POST">
    <label><input type="hidden" name="client_id" value="<?php echo $_POST['client_id']; ?>"></label>
    <label><input type="submit" name="submit" value="Si"></label>
    <label><button><a href="/student034/dwes/index.php">No</a></button></label>

  </form>
</div>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>