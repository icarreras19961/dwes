<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax</title>
</head>

<body>
  <main>
    Search: <input type="text" onkeyup="showHint(this.value)">
    <p>Sugestions: <span id="sugerencia"></span></p>

  </main>

  <script>
    function showHint(string) {
      if (string.length == 0) {
        document.getElementById("sugerencia").innerText = "bonitao";
        return
      } else {
        var conexion = new XMLHttpRequest()
        conexion.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("sugerencia").innerHTML = this.responseText;

          }
        }
      }
      conexion.open("GET", "/student034/dwes/test/ajax/ajax_get_db_customers_select.php?q=" + string, true)
      
      conexion.send()
    }
  </script>

</body>

</html>