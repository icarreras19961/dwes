<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');

$file = "readme.txt";
$fnaf = fopen($file, "a+");

$json = "http://dataservice.accuweather.com/currentconditions/v1/2-305482_1_AL?apikey=8AdlYAD6G75jphAShx4Xhh03PJfC7ABt";

fwrite($fnaf,"enrique 100 pres banca");

$fnaf2 = fopen($file, "a+");
if (file_exists($file)) {
  echo fread($fnaf2, filesize($file));
} else {
  echo "no file";
}

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');