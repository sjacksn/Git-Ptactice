<?php

// Capital Info


	$url = "https://restcountries.eu/rest/v2/capital/" . $result_array['country_detials']["capital"];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = json_decode(curl_exec($ch), true);

	curl_close($ch);
	$result_array['capital_details'] = $result[0] ?? [];

