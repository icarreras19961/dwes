<!-- El contenido -->
<div class="container my-2 " id="cuerpo">
  <div class="row">
    <form class="shadow" id="fechas" action="/student034/dwes/db/reservations/db_reservation_select.php" method="GET" style="width: 50%; margin-left: 25%; margin-top: 2rem;">
      <div class="row">
        <div class="col-lg-4">
          <h4>Date In</h4>
          <label><input type="date" name="date_in" value="<?php echo $_COOKIE["date_in"]?? null?>" required></label>
        </div>
        <div class="col-lg-4">
          <h4>Date out</h4>
          <label><input type="date" name="date_out" value="<?php echo $_COOKIE["date_out"]?? null ?>" required></label>
        </div>
        <div class="col-lg-4">
          <input class="btn btn-light border align-middle" type="submit" value="submit" name="submit">
        </div>
      </div>
    </form>
  </div>
</div>
<?php
?>