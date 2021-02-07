<?php

	$executionStartTime = microtime(true) / 1000;

	$url="http://api.geonames.org/countryInfoJSON?formatted=true&lang=" . $_REQUEST["lang"] . "&country=" . $_REQUEST["country"] . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);

	$result=curl_exec($ch);

	curl_close($ch);

	/* $decode = json_decode($result,true);	

	$output['status']['code'] = "200";
	$output['status']['name'] = "ok";
	$output['status']['description'] = "mission saved";
	$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
	$output['data'] = $decode['geonames'];
	
	header('Content-Type: application/json; charset=UTF-8'); */

	echo $result; 

?>


<?php

	$executionStartTime = microtime(true) / 1000;

	$url="http://api.geonames.org/weatherIcaoJSON?formatted=true&ICAO=" . $_REQUEST["ICAO"] . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);

	$result=curl_exec($ch);

	curl_close($ch);

	


	echo $result; 

?>





<?php

	$executionStartTime = microtime(true) / 1000;

	$url="http://api.geonames.org/wikipediaSearchJSON?formatted=true&q=" . $_REQUEST["q"] . "&username=sjacksn12&style=full";
/* I wasn't sure what parameter to put in the URL - because the URL had 'q=' I though this was the paramneter */

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);

	$result=curl_exec($ch);

	curl_close($ch);

	


	echo $result; 

?>




