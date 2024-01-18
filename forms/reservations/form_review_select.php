<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>
<form class="shadow bg-white rounded p-2" style="width: 20%; margin:auto; margin-top:50px" action="/student034/dwes/db/reservations/db_review_select.php" method="POST">
    
    <div class="form-group">
      <label>
        <input class="btn btn-primary" type="submit" value="View All" name="submit">
      </label>
    </div>
  </form>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>