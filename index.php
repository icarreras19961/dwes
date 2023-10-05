<!-- El header que al ser un include se puede reutilizar -->
<?php
include('header.php');
?>

<?php
//cuando se pulse el submit mostrara por pantallael date in date out
  if(isset($_GET['submit'])) {
    echo $_GET['date_in'];
    echo $_GET['date_out'];
  }
  ?>
<!-- El contenido -->
<div id="cuerpo">
  
  <div id="fechas">
    <section id="date_in">
      <h4>Date In</h4>
      <form action="index.php" method="GET">
        <label><input type="date" name="date_in"></label>
        <h4>Date out</h4>
        <label><input type="date" name="date_out"></label>
        <label> <input type="submit" value="submit" name="submit"></label>
      </form>

    </section>
  </div>

  <div id="habitaciones">
    <p>
      esto mostrara los resultados del las fechas con ls habitaciones y sus precios
    </p>
  </div>

</div>
<!-- El footer -->
<?php
include('footer.php');
?>