<?php
$date_in = $_POST['date_in'];
$date_out = $_POST['date_out'];
$room_id = $_POST['room_id'];
$user_id = $_POST['user_id'];

echo $date_in . $date_out . $room_id . $user_id;
//         INSERT INTO  	reservations(reservation_id,id_client_master,check_in,check_out,initial_price,room_id,type_of_reservation)
//         VALUES
//         (DEFAULT,var_client_id,var_check_in,var_check_out,var_initial_price,var_room_id,var_type);
