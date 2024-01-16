<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div>
  <form action="/student034/dwes/db/customers/db_customer_select.php" method="POST">
    <label><input class="btn btn-primary" type="submit" value="View All" name="submit"></label>
    Search: <input type="text" onkeyup="showHint(this.value)">
  </form>

  <!-- Ajax customers -->
  <h1>customers</h1>
  <div id="customers">
  </div>
</div>

<script>
  function showHint(string) {
    if (string.length == 0) {
      document.getElementById("customers").innerText = "No se han encontrado resultados";

      return
    } else {
      var conexion = new XMLHttpRequest()
      conexion.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("customers").innerHTML = this.responseText;

        }
      } 
    }

    conexion.open("GET", "/student034/dwes/test/ajax/ajax_get_db_customers_select.php?q=" + string, true)

    conexion.send()
  }
  
  
</script>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>