$('#btnRun').click(function() {

	$('#txtCapital').html();
	$('#txtGeonameId').html();
	$('#txtCountryCode').html(); 
	$('#txtCurrencyCode').html();
	$('#txtPopulation').html();
	$('txtAreaInSqKm').html();

	$.ajax({
		url: "getCountryInfo.php",
		type: 'POST',
		dataType: 'json',
		data: {
			country: $('#selCountry').val(),
			lang: $('#selLanguage').val()
		},
		success: function(result) {

			console.log(result);

			if (result.geonames[0]) {

				$('#txtCapital').html(result.geonames[0].capital);
				$('#txtGeonameId').html(result.geonames[0].geonameId);
				$('#txtCountryCode').html(result.geonames[0].countryCode); 
				$('#txtCurrencyCode').html(result.geonames[0].currencyCode);
				$('#txtPopulation').html(result.geonames[0].population);
				$('#txtAreaInSqKm').html(result.geonames[0].areaInSqKm);
				

			}
		
		},
		error: function(jqXHR, textStatus, errorThrown) {
			// your error code
		}
	});

});


	$('#btnRun2').click(function() {

		$('#txtICAO').html();
		$('#txtClouds').html();
		$('#txtTemperature').html(); 
		$('#txtHumidity').html();
		$('#txtWeatherCondition').html();
		$('txtStationName').html();
	
		$.ajax({
			url: "getCountryInfo.php",
			type: 'POST',
			dataType: 'json',
			data: {
				ICAO: $('#selIcao').val(),
				
			},
			success: function(result) {
	
				console.log(result);
	
				if (result.weatherObservation[0]) {
	
					$('#txtICAO').html(result.weatherObservation[0].ICAO);
					$('#txtClouds').html(result.weatherObservation[0].clouds);
					$('#txtTemperature').html(result.weatherObservation[0].temperature); 
					$('#txtHumidity').html(result.weatherObservation[0].humidity);
					$('#txtWeatherCondition').html(result.weatherObservation[0].weatherCondition);
					$('#txtStationName').html(result.weatherObservation[0].stationName);
					
	
				}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				// your error code
			}
		});

	});



	$('#btnRun3').click(function() {

		$('#txtSummary').html();
		$('#txtThumbnailImg').html();
		$('#txtWikipediaURL').html(); 
	
	
		$.ajax({
			url: "getCountryInfo.php",
			type: 'POST',
			dataType: 'json',
			data: {
				ICAO: $('#selCity').val(),
				
			},
			success: function(result) {
	
				console.log(result);
	
				if (result.geonames[0]) {
	
					$('#txtSummary').html(result.geonames[0].summary);
					$('#txtThumbnailImg').html(result.geonames[0].thumbnailImg);
					$('#txtWikipediaUrl').html(result.geonames[0].wikipediaUrl); 
				
					
	
				}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				// your error code
			}
		});

	});
