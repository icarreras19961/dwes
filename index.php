<!-- El header que al ser un include se puede reutilizar -->
<?php
include('header.php');
?>
<!-- Formulario de date_in date_out -->
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/form_reservation_select.php');
// The time
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/API/AcuWeather/db/db_acuweather.php');

?>
<!-- El footer -->
<?php
include('footer.php');
?>