<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div>
  <form class="shadow bg-white rounded p-2" style="width: 20%; margin:auto; margin-top:50px" action="/student034/dwes/db/customers/db_customer_select.php" method="POST">
    <div class="form-group">
      <h4>Search:</h4><input class="form-group" type="text" onkeyup="showHint(this.value)">
    </div>
    <hr>
    <div class="form-group">
      <label>
        <input class="btn btn-primary" type="submit" value="View All" name="submit">
      </label>
    </div>
  </form>
  <!-- Ajax customers -->
  <h1>Customers</h1>
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

    conexion.open("GET", "/student034/dwes/db/ajax/ajax_customers_select.php?q=" + string, true)

    conexion.send()
  }
</script>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>