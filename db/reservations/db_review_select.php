<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$sql = "SELECT * FROM 034_review";
$resultado = mysqli_query($conn, $sql);
$reviews = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>
<table class="table my-2 table-striped">
  <tr>
    <td><strong>Status</strong></td>
    <td><strong>Score</strong></td>
    <td><strong>Reservation_id</strong></td>
    <td><strong>Client_id</strong></td>
    <td><strong>Date</strong></td>
    <td><strong>Comment</strong></td>
  </tr>
  <?php
  foreach ($reviews as $review) { ?>
    <tr>
      <td>
        <?php
        if ($review['status'] == 'hidden') {
        ?>
          <select name="<?php echo $review['review_id'] ?>" id="<?php echo $review['review_id'] ?>" onselect="updateReview(this.value)">
            <option value="0">public</option>
            <option value="1" selected>hidden</option>
            <option value="3">not apropiated</option>
          </select>
        <?php
        } else if ($review['status'] == 'public') {
        ?>
          <select name="<?php echo $review['review_id'] ?>" id="<?php echo $review['review_id'] ?>" onselect="updateReview(this.value)">
            <option value=" 0" selected>public</option>
            <option value="1">hidden</option>
            <option value="3">not apropiated</option>
          </select>
        <?php
        } else if ($review['status'] == 'not_apropiate') {
        ?>
          <select name="<?php echo $review['review_id'] ?>" id="<?php echo $review['review_id'] ?>" onselect="updateReview(this.value)">
            <option value=" 0">public</option>
            <option value="1">hidden</option>
            <option value="3" selected>not apropiated</option>
          </select>
        <?php
        }
        ?>
      </td>
      <td><?php print_r($review['score']) ?></td>
      <td><?php print_r($review['reservation_id']) ?></td>
      <td><?php print_r($review['client_id']) ?></td>
      <td><?php print_r($review['inserted_on']) ?></td>
      <td style="width: 30%;"><?php print_r($review['comment']) ?></td>
    </tr>
  <?php
  }
  ?>

</table>
<script>
  function updateReview(string) {

    var conexion = new XMLHttpRequest()
    conexion.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
      }
    }
    conexion.open("GET", "/student034/dwes/db/ajax/ajax_customers_select.php?q=" + string, true)

    conexion.send()
  }
</script>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
