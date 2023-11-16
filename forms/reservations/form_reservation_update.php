<?php
include($_SERVER['DOCUMENT_ROOT']. '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT']. '/student034/dwes/db/reservations/db_reservation_select_id.php');
?>

<div class="m-4">
    <form action="/student034/dwes/db/reservations/db_reservation_update.php" method="post">
    
        <p>Reservation Id</p><input type="text" name="reservation_id" value="<?php echo $client_info[0]['reservation_id']; ?>" readonly></input>
        <p>Id Cliente</p><input type="text" name="id_client_master" value="<?php echo $client_info[0]['id_client_master']; ?>"></input>
        <p>Check in</p><input type="text" name="check_in" value="<?php echo $client_info[0]['check_in']; ?>"></input>
        <p>Check out</p><input type="text" name="check_out" value="<?php echo $client_info[0]['check_out']; ?>"></input>
        <p>Room id</p><input type="text" name="room_id" value="<?php echo $client_info[0]['room_id']; ?>"></input>
        <p>Services</p><input type="text" name="services" value="<?php echo $client_info[0]['services']; ?>"></input>
        <p>initial Price</p><input type="text" name="initial_price" value="<?php echo $client_info[0]['initial_price']; ?>"></input>
        <p>Type of reservation</p><input type="text" name="type_of_reservation" value="<?php echo $client_info[0]['type_of_reservation']; ?>"></input>

        <input type="submit" name="submit" value="submit">

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>