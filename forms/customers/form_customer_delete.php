<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<div style="width: 20%; margin:auto; margin-top:50px" class="shadow bg-white rounded p-3 ">
  <?php
  if (isset($_POST['submit'])) {
    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

    $client_id = $_POST['client_id'];

    $sql = "SELECT * FROM 034_clients WHERE client_id = $client_id";
    $resultado = mysqli_query($conn, $sql);
    $muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    echo 'Are you sure that you want to delete: ';
    echo $muestra[0]['client_name'].' '.$muestra[0]['client_surname'];
  }
  ?>

  <form  action="/student034/dwes/db/customers/db_customer_delete.php" method="POST">
    <label><input  type="hidden" name="client_id" value="<?php echo $_POST['client_id']; ?>"></label>
    <label><input class="btn btn-danger border shadow"  type="submit" name="submit" value="Yes"></label>
    <label><button class="btn btn-warning border shadow"><a href="/student034/dwes/index.php">No</a></button></label>

  </form>
</div>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>