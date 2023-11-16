<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$sql = "
SELECT * 
        FROM 034_reservations;";

$resultado = mysqli_query($conn, $sql);
$muestra = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>
<table class="table my-2"><tr>
      <td><strong>reservation_id</strong></td>
      <td><strong>id_client</strong></td>
      <td><strong>check_in</strong></td>
      <td><strong>check_out</strong></td>
      <td><strong>room_id</strong></td>
      <td><strong>services</strong></td>
      <td><strong>initial_price</strong></td>
      <td><strong>type_of_reservation</strong></td>
      <td><strong>UPDATE</strong></td>
      <td><strong>Delete</strong></td>
    </tr>
  <?php
  foreach ($muestra as $reserva) {
  ?>
    <tr>
      <td><?php print_r($reserva['reservation_id']) ?></td>
      <td><?php print_r($reserva['id_client_master']) ?></td>
      <td><?php print_r($reserva['check_in']) ?></td>
      <td><?php print_r($reserva['check_out']) ?></td>
      <td><?php print_r($reserva['room_id']) ?></td>
      <td><?php print_r($reserva['services']) ?></td>
      <td><?php print_r($reserva['initial_price']) ?></td>
      <td><?php print_r($reserva['type_of_reservation']) ?></td>
      <td>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_update.php');?>
      </td>
      <td><?php include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_delete.php');?></td>
    </tr>
  <?php
  }
  ?>
</table>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
