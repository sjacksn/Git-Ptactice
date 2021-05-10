<?php

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