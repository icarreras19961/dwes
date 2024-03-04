<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$client_id = $_POST["client_id"];
$reservation_id = $_POST["reservation_id"];
$review_score = $_POST["review_score"];
$review = $_POST["review"];
$review_date = date('Y-m-d H:i:s');

echo $client_id ." ". $reservation_id ." ". $review_score ." ". $review ." ". $review_date;

$sql = "INSERT INTO 034_review(`status`,client_id,reservation_id,inserted_on,`comment`,score)
VALUES
(2,$client_id,$reservation_id,'$review_date','$review', $review_score)";

$sql2 = "UPDATE 034_reservations SET reviewed = true WHERE reservation_id = $reservation_id";

if (mysqli_query($conn, $sql)) {
  echo 'Reserva confirmada';
} else {
  echo 'ni un insert enserio?';
}
if (mysqli_query($conn, $sql2)) {
  echo 'A la primera y sin mirar';
} else {
  echo 'ni un update enserio?';
}

header('Location: /student034/dwes/index.php');
