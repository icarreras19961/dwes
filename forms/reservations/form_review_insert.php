<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<div style="width: 30%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" action="/student034/dwes/db/reservations/db_review_insert.php" method="POST">


    <label class="m-2"> <input class="form-control" type="text" value="<?php print_r($_POST["client_id"]) ?>" name="client_id" hidden></label>

    <label class="m-2"> <input class="form-control" type="text" value="<?php print_r($_POST["reservation_id"]) ?>" name="reservation_id" hidden></label>

    <div class="form-group">
      <label class="m-2">Score <input class="form-control" type="number" max="10" min="1" name="review_score" required></label>
    </div>
    <div class="form-group">
      <label class="m-2">Comment <br>
        <textarea name="review" cols="70" rows="10" maxlength="500"></textarea>
      </label>
    </div>
    <div class="form-group" style="text-align: center;">
      <label class="m-2"><input class="btn btn-primary" type="submit" value="submit" name="submit"></label>
    </div>
  </form>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>