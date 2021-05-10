<?php

//Weather Info
$url = "http://api.geonames.org/weatherJSON?formatted=true&lang=" . $_REQUEST["lang"] . "&username=sjacksn12&style=full";

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

$weather = json_decode(curl_exec($ch), true)['weatherObservations'];

curl_close($ch);

$result_array['weather'] = $weather;
$result_array['temperature'] = $temperature;
$result_array['humidity'] = $humidity;
$result_array['clouds'] = $clouds;