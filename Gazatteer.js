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




