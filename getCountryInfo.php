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

	// Capital Info
	$url = "https://restcountries.eu/rest/v2/capital/" . $result_array['country_detials']["capital"];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = json_decode(curl_exec($ch), true);

	curl_close($ch);
	$result_array['capital_details'] = $result[0] ?? [];

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


	// Exchange Rates
	$url = "https://openexchangerates.org/api/latest.json?app_id=543dcdfcacc54690a843756e48967697";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$exch_rate = json_decode(curl_exec($ch), true)['rates'][$result_array['country_details']['currencyCode']] ?? [];
	curl_close($ch);
	$result_array['exchrate'] = $exch_rate;


	echo (json_encode($result_array));
} catch (\Exception $th) {
	echo ('{"error":"Sorry, unable to find data"}');
}
