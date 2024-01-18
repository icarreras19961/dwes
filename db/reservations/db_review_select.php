<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$sql = "SELECT * FROM 034_review";
$resultado = mysqli_query($conn,$sql);
$reviews = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>
<table class="table my-2 table-striped">
  <tr>
    <td><strong>Score</strong></td>
    <td><strong>Reservation_id</strong></td>
    <td><strong>Client_id</strong></td>
    <td><strong>Date</strong></td>
    <td><strong>Comment</strong></td>
    <td><strong>Options</strong></td>
  </tr>
</table>