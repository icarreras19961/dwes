<?php
$weather_file = "http://dataservice.accuweather.com/currentconditions/v1/2-305482_1_AL?apikey=8AdlYAD6G75jphAShx4Xhh03PJfC7ABt&details=true";
$weather_json = file_get_contents($weather_file);
$weather = json_decode($weather_json, true);

$date = date('Y-m-d');

// generar fichero con el json nuevo
copy($weather_file, $_SERVER['DOCUMENT_ROOT'] . "/student034/dwes/API/AcuWeather/Files/weather.json");
copy($weather_file, $_SERVER['DOCUMENT_ROOT'] . "/student034/dwes/API/AcuWeather/Files/weather_" . $date . ".json");

//guardar en db el json nuevo

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/db_connection.php');

$weather_json;
$date;
print_r($weather_json);
echo  $date;
$sql = 'INSERT INTO 034_api_weather(weather_id ,weather_date,weather_json)
VALUES(DEFAULT,"$date","$weather_json");';
if (mysqli_query($conn, $sql)) {
  echo 'Reserva confirmada';
} else {
  echo 'ni un insert enserio?';
}
//TODO: Falta maquetar el tiempo 