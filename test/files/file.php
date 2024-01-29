<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');

$file = "readme.txt";
$fnaf = fopen($file, "a+");

fwrite($fnaf,"enrique 100 pres banca");

$fnaf2 = fopen($file, "a+");
if (file_exists($file)) {
  echo fread($fnaf2, filesize($file));
} else {
  echo "no file";
}

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
