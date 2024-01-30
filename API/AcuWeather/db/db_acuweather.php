<?php
$wheather = $_SERVER['DOCUMENT_ROOT'] . "/student034/dwes/API/AcuWeather/Files/weather.json";
$fileWeather = fopen($wheather, "r");

if (file_exists($wheather)) {
  $theFile = json_decode(fread($fileWeather, filesize($wheather)), true);
  print_r("Temperature " . $theFile[0]["Temperature"]["Metric"]["Value"] . " " . $theFile[0]["Temperature"]["Metric"]["Unit"] . " " . $theFile[0]["WeatherText"]);
}
