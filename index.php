<?php

require 'vendor/autoload.php';

use Hannalackner\Weather\Day;
use Hannalackner\Weather\History;

$history = new History();
$history->addDay(new Day("2024-05-04", "sunny"));
$history->addDay(new Day("2024-05-05", "cloudy"));

//$date = "2024-05-03";
$date = $_GET['date']; //mit Benutzereingabe sonst die obere Zeile
$weather = $history->getWeatherDate($date);
echo "Weather on $date was $weather";
?>