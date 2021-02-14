<?php

	$executionStartTime = microtime(true) / 1000;

	$url="http://api.geonames.org/countryInfoJSON?formatted=true&lang=" . $_REQUEST["lang"] . "&country=" . $_REQUEST["country"] . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);

	$result=curl_exec($ch);

	curl_close($ch);


	echo $result; 

?>


