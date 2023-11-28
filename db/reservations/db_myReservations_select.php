<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<?php
if (isset($_POST['submit'])) {
  //La consexion a la base de datos
  include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');
  $client_id = $_POST['client_id'];

  $sql = " SELECT * 
          FROM 034_reservations
          WHERE id_client_master = $client_id";

  $resultado = mysqli_query($conn, $sql);
  $myReservations = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>
  <table class="table my-2">
    <tr>
      <td><strong>reservation_id</strong></td>

      <td><strong>check_in</strong></td>
      <td><strong>check_out</strong></td>
      <td><strong>room_id</strong></td>
      <td><strong>services</strong></td>
      <td><Strong>Change services</Strong></td>
      <td><strong>initial_price</strong></td>
      <td><strong>Update</strong></td>
      <td><strong>Delete</strong></td>
    </tr>
    <?php
    foreach ($myReservations as $reserva) {


    ?>
      <tr>
        <td class="border"><?php print_r($reserva['reservation_id']) ?></td>
        <td class="border"><?php print_r($reserva['check_in']) ?></td>
        <td class="border"><?php print_r($reserva['check_out']) ?></td>
        <td class="border"><?php print_r($reserva['room_id']) ?></td>
        <td class="border"><?php
                            $extras = json_decode($reserva['services'], 1);
                            $services = array_keys($extras);
                            print_r($services);
                            echo '<br>';
                            foreach ($services as $service) {
                            ?>
            <select name="" id="">
              <option value="" style="width: auto;">
                <?php echo $service; ?>
              </option>
              <option value="">
                <?php print_r($extras[$service]); ?>
              </option>

            </select>
          <?php
                              // echo $service . ': ';
                              // print_r($extras[$service]);
                              // echo '<br>';
                            } ?>
        </td>
        <td class="border">
          <?php
          include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_service_update.php');
          ?>
        </td>
        <td class="border"><?php print_r($reserva['initial_price']) ?></td>

        <td>
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_update.php'); ?>
        </td>
        <td class="border"><?php include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_delete.php'); ?></td>
      </tr>
    <?php
    }
    ?>
  </table>

<?php
}
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
