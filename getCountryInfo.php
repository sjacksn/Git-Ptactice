<?php

$executionStartTime = microtime(true) / 1000;
try {
	//Country Info
	$url = "http://api.geonames.org/countryInfoJSON?formatted=true&lang=" . $_REQUEST["lang"] . "&country=" . $_REQUEST["country"] . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result_array['country_details'] = json_decode(curl_exec($ch), true)['geonames'][0];

	curl_close($ch);

	$executionStartTime = microtime(true) / 1000;

	

	


	
