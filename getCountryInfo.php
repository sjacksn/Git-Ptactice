<?php

$executionStartTime = microtime(true) / 1000;
try {
	//Country Info
	$url = "http://api.geonames.org/countryInfoJSON?formatted=true&lang=" . $_REQUEST["lang"] . "&country=" . $_REQUEST["country"] . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result_array['country_detials'] = json_decode(curl_exec($ch), true)['geonames'][0];

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
	$url = "http://api.geonames.org/weatherJSON?formatted=true&lang=" . $_REQUEST["lang"] . "&north=" . ($result_array['country_detials']['north']) . "&east=" . ($result_array['country_detials']['east']) . "&west=" . ($result_array['country_detials']['west']) . "&south=" . ($result_array['country_detials']['south']) . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$weather = json_decode(curl_exec($ch), true)['weatherObservations'];

	curl_close($ch);

	$t = array_filter(array_column($weather, 'temperature'));
	if (count($t) == 0) {
		$temperature = 'Data not Available';
	} else {
		$temperature = round(array_sum($t) / count($t)) . ' &#8451;';
	}
	$h = array_filter(array_column($weather, 'humidity'));
	if (count($h) == 0) {
		$humidity = 'Data not Available';
	} else {
		$humidity = round(array_sum($h) / count($h)) . '%';
	}
	$cl = array_count_values(array_column($weather, 'clouds'));
	arsort($cl);
	$clouds = array_slice(array_keys($cl), 0, 1);

	$result_array['weather'] = $weather;
	$result_array['temperature'] = $temperature;
	$result_array['humidity'] = $humidity;
	$result_array['clouds'] = $clouds;

	// Wikipedia Info
	$url = "http://api.geonames.org/wikipediaSearchJSON?maxRows=1&formatted=true&lang=" . $_REQUEST["lang"] . "&title=" . urlencode($result_array['country_detials']["countryName"]) . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$wiki = json_decode(curl_exec($ch), true)['geonames'][0] ?? [];

	curl_close($ch);
	$result_array['wiki'] = $wiki;

	// Exchange Rates
	$url = "https://openexchangerates.org/api/latest.json?app_id=543dcdfcacc54690a843756e48967697";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$exch_rate = json_decode(curl_exec($ch), true)['rates'][$result_array['country_detials']['currencyCode']] ?? [];
	curl_close($ch);
	$result_array['exchrate'] = $exch_rate;


	echo (json_encode($result_array));
} catch (\Exception $th) {
	echo ('{"error":"Sorry, unable to find data"}');
}
