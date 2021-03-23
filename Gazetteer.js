// I have to pull API data from multiple API links but they should all work when clicking on BtnRun1

// Link for `Capital City & Area in SqM
$('#btnRun1').click(function() {

	$('#xtCapitalCity').html();
	$('#txtAreaInSqKm').html();


	$.ajax({
		url: "Gazatteer.php",
		type: 'POST',
		dataType: 'json',
		data: {
			options: $('#selCountry').val(),
			
		},
		success: function(result) {

			console.log(result);

			if (result.geonames[0]) {

				$('#txtCapitalCity').html(result.geonames[0].capital);
				$('#txtAreaInSqKm').html(result.geonames[0].areaInSqKm);
				

			}

	
		
		},
		error: function(jqXHR, textStatus, errorThrown) {
			
		}
	});

});

//link for currency Exchange Rate

$('#btnRun1').click(function() {

	$('#txtCurrencyExchange').html();



	$.ajax({
		url: "Gazatteer.php",
		type: 'POST',
		dataType: 'json',
		data: {
			options: $('#selCountry').val(),
			
		},
		success: function(result) {

			console.log(result);

			if (result.currencyexchange) {

			
				$('#txtCurrencyExchange').html(result.currencyexchange);
				
			
			}

			
		
		},
		error: function(jqXHR, textStatus, errorThrown) {
			
		}
	});

});



$('#btnRun1').click(function() {

	$('#txtCurrency').html();



	$.ajax({
		url: "Gazatteer.php",
		type: 'POST',
		dataType: 'json',
		data: {
			options: $('#selCountry').val(),
			
		},
		success: function(result) {

			console.log(result);

			if (result.currency) {

			
				$('#txtCurrency').html(result.currency);
				
			
			}

			
		
		},
		error: function(jqXHR, textStatus, errorThrown) {
			
		}
	});

});

// link for temperature

$('#btnRun1').click(function() {

	

	
	$('#txtTemperature').html(); 


	$.ajax({
		url: "Gazatteer.php",
		type: 'POST',
		dataType: 'json',
		data: {
			ICAO: $('#selIcao').val(),
			
		},
		success: function(result) {

			console.log(result);

			if (result.weatherObservation) {

				
				$('#txtTemperature').html(result.weatherObservation.temperature); 
			
				

			}
		
		},
		error: function(jqXHR, textStatus, errorThrown) {
			
		}
	});

});

// This iniates the map. How do I get the map to update location depnding on user location? Normally you get a pop up to say 'Do you want app to use your location'.
//Secondly - how do I get the map to update the coordinates depnding on which country is selected?

    var mymap = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoic2phY2tzbjEyIiwiYSI6ImNrbWhwanZoNDA5cDIycHFrcjM4NXNhdXUifQ.qjrXXxVEDpgAMOEBXpIO2w'
}).addTo(mymap);






