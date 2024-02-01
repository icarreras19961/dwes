<?php
$wheather = $_SERVER['DOCUMENT_ROOT'] . "/student034/dwes/API/AcuWeather/Files/weather.json";
$fileWeather = fopen($wheather, "r");

if (file_exists($wheather)) {
  $theFile = json_decode(fread($fileWeather, filesize($wheather)), true);

?>
<br>
  <div style="display:flex; justify-content:center;">

    <div style="width:500px; background-color:aliceblue; border-radius:10px">
      <h1>El Tiempo</h1>
      <hr>
      <?php
      print_r(

        "Temperature " . $theFile[0]["Temperature"]["Metric"]["Value"] . " " . $theFile[0]["Temperature"]["Metric"]["Unit"] . " " . $theFile[0]["WeatherText"]
      );
      ?>

    </div>
  </div>
<?php
}
//TODO: Falta maquetar el tiempo 