<?php
include($_SERVER['DOCUMENT_ROOT']. '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT']. '/student034/dwes/db/reservations/db_reservation_select_id.php');
?>

<div class="m-4">
    <form action="/student034/dwes/db/customers/db_customer_update.php" method="post">
        <input type="hidden" name="client_id" value="<?php echo $_POST['client_id']; ?>">
    
        <p>Reservation Id</p><input type="text" name="client_name" value="<?php echo $client_info[0]['client_name']; ?>"></input>
        <p>Id Cliente</p><input type="text" name="client_surname" value="<?php echo $client_info[0]['client_surname']; ?>"></input>
        <p>Check in</p><input type="text" name="client_DNI" value="<?php echo $client_info[0]['client_DNI']; ?>"></input>
        <p>Check out</p><input type="text" name="client_email" value="<?php echo $client_info[0]['client_email']; ?>"></input>
        <p>Room id</p><input type="text" name="client_phone" value="<?php echo $client_info[0]['client_phone']; ?>"></input>
        <p>Services</p><input type="text" name="credit_card" value="<?php echo $client_info[0]['credit_card']; ?>"></input>
        <p>initial Price</p><input type="text" name="client_country" value="<?php echo $client_info[0]['client_country']; ?>"></input>
        <p>Type of reservation</p><input type="text" name="client_birth" value="<?php echo $client_info[0]['client_birth']; ?>"></input>

        <input type="submit" name="submit" value="submit">

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>