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
    <button onclick="showHint()">Tiempo jason</button>

  </main>

  <script>
    function showHint(string) {
      // if (string.length == 0) {
      //   document.getElementById("sugerencia").innerText = "bonitao";
      //   return
      // } else {
      var conexion = new XMLHttpRequest()
      conexion.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          let json = JSON.parse(this.responseText);
          console.log(json[0]);
        
        }
        // }
      }
      conexion.open("GET", "http://dataservice.accuweather.com/currentconditions/v1/2-305482_1_AL?apikey=8AdlYAD6G75jphAShx4Xhh03PJfC7ABt", true)
      conexion.send()
    }
  </script>

</body>

</html>