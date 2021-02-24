<?php
    // link: http://api.geonames.org/countryInfoJSON?formatted=true&lang=it&country=DE&username=sjacksn12&style=full
    // username: sjacksn

	$executionStartTime = microtime(true) / 1000;
    
    $url="http://api.geonames.org/countryInfoJSON?formatted=true&country=" . $_REQUEST["country"] . "username=sjacksn12&style=full";

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
    
// link https://restcountries.eu/#api-endpoints
// I am not sure how to put in the variable parameter in this one so when you select country the currency pulls through

    $url="https://restcountries.eu/rest/v2/currency/{currency}";

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
    
    //link https://docs.openexchangerates.org/docs/
    // https://openexchangerates.org/account/app-ids/?yep=app_id_created
    // email: sjacksn@hotmail.com
    //Password: Valencia12
    // Again, not sure re. variable parameter - can it be put at the end like this?

    $url="https://openexchangerates.org/api/latest.json?app_id=9e0bf575739c4d379c12ff7cb93a7b19" . $REQUEST["country"];
    ;

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

// http://api.geonames.org/weatherJSON?formatted=true&north=44.1&south=-9.9&east=-22.4&west=55.2&username=sjacksn12&style=full
// username: sjacksn12

	$url="http://api.geonames.org/countryInfoJSON?formatted=true&" . $_REQUEST["country"] . "&username=sjacksn12&style=full";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);

	$result=curl_exec($ch);

	curl_close($ch);


	echo $result; 

?>

