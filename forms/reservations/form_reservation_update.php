<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/reservations/db_reservation_select_id.php');
?>

<div class="m-4 "  style="width: 17%; margin:auto; margin-top:50px">
    <form class="shadow bg-white rounded p-2" action="/student034/dwes/db/reservations/db_reservation_update.php" method="post">

        <p>Reservation Id</p><input class="form-control" type="text" name="reservation_id" value="<?php echo $client_info[0]['reservation_id']; ?>" readonly></input>
        <p>Id Cliente</p><input class="form-control" type="text" name="id_client_master" value="<?php echo $client_info[0]['id_client_master']; ?>"></input>
        <p>Check in</p><input class="form-control" type="text" name="check_in" value="<?php echo $client_info[0]['check_in']; ?>"></input>
        <p>Check out</p><input class="form-control" type="text" name="check_out" value="<?php echo $client_info[0]['check_out']; ?>"></input>
        <p>Room id</p><input class="form-control" type="text" name="room_id" value="<?php echo $client_info[0]['room_id']; ?>"></input>
        <p>Services</p><input class="form-control" type="text" name="services" value="<?php echo $client_info[0]['services']; ?>"></input>
        <p>initial Price</p><input class="form-control" type="text" name="initial_price" value="<?php echo $client_info[0]['initial_price']; ?>"></input>
        <p>Reservation Status</p>
        <select name="type_of_reservation" class="form-control">
            <?php if ($client_info[0]['type_of_reservation'] == 'booked') { ?>
                <option value="booked" selected="selected">Booked</option>
                <option value="check_in">Check In</option>
                <option value="check_out">Check Out</option>
                <option value="canceled">Canceled</option>
                <option value="absent">absent</option>
            <?php } elseif ($client_info[0]['type_of_reservation'] == 'check_in') { ?>
                <option value="booked">Booked</option>
                <option value="check_in" selected="selected">Check In</option>
                <option value="check_out">Check Out</option>
                <option value="canceled">Canceled</option>
                <option value="absent">absent</option>
            <?php } elseif ($client_info[0]['type_of_reservation'] == 'check_out') { ?>
                <option value="booked">Booked</option>
                <option value="check_in">Check In</option>
                <option value="check_out" selected="selected">Check Out</option>
                <option value="canceled">Canceled</option>
                <option value="absent">absent</option>
            <?php } elseif ($client_info[0]['type_of_reservation'] == 'canceled') { ?>
                <option value="booked">Booked</option>
                <option value="check_in">Check In</option>
                <option value="check_out">Check Out</option>
                <option value="canceled" selected="selected">Canceled</option>
                <option value="absent">absent</option>
            <?php } elseif ($client_info[0]['type_of_reservation'] == 'absent') { ?>
                <option value="booked">Booked</option>
                <option value="check_in">Check In</option>
                <option value="check_out">Check Out</option>
                <option value="canceled">Canceled</option>
                <option value="absent" selected="selected">absent</option>
            <?php } ?>
        </select>
        <input class="btn btn-primary" type="submit" name="submit" value="submit">

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>