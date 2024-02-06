<?php
$weather_file = $_SERVER['DOCUMENT_ROOT'] . "/student034/dwes/API/AcuWeather/Files/weather.json";;
$icons = $_SERVER['DOCUMENT_ROOT'] . "/student034/dwes/API/AcuWeather/Files/weather_Icon.json";


$weather_json = file_get_contents($weather_file);
$weather = json_decode($weather_json, true);
$theFileIcons = json_decode(file_get_contents($icons), true);


?>
<br>
<div style="display:flex; justify-content:center;">
  <div style="width:500px; background-color:aliceblue; border-radius:10px">
    <h1>The weather</h1>
    <hr>
    <div style="background-color: white;border-radius:10px;margin: 5px; text-align:center;">
      <?php
      foreach ($theFileIcons as $theFileIcon) :
        if ($weather[0]["WeatherIcon"] == $theFileIcon["IconNumber"]) {
      ?>
          <img src="<?php echo $theFileIcon["icon"]; ?>" alt="">
      <?php
        }
      endforeach;
      echo "Temperatura" . $weather[0]["Temperature"]["Metric"]["Value"] . " " .  "º" . $weather[0]["TemperatureSummary"]["Past6HourRange"]["Maximum"]["Metric"]["Unit"];
      echo "</br>";
      echo "Max " . $weather[0]["TemperatureSummary"]["Past6HourRange"]["Maximum"]["Metric"]["Value"] . " " .  "º" . $weather[0]["TemperatureSummary"]["Past6HourRange"]["Maximum"]["Metric"]["Unit"];
      echo "</br>";
      echo "Min " . $weather[0]["TemperatureSummary"]["Past6HourRange"]["Minimum"]["Metric"]["Value"] . " " . "º" .  $weather[0]["TemperatureSummary"]["Past6HourRange"]["Minimum"]["Metric"]["Unit"];
      ?>
    </div>
  </div>
</div>
<?php

//TODO: Falta maquetar el tiempo 