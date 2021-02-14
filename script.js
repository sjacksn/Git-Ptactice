$('#btnRun').click(function() {

	$('#txtCapital').html();
	$('#txtGeonameId').html();
	$('#txtCountryCode').html(); 
	$('#txtCurrencyCode').html();
	$('#txtPopulation').html();
	$('txtAreaInSqKm').html();

	$.ajax({
		url: "getCountryInfo_btnrun.php",
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
			url: "getCountryInfo_btnRun2.php",
			type: 'POST',
			dataType: 'json',
			data: {
				ICAO: $('#selIcao').val(),
				
			},
			success: function(result) {
	
				console.log(result);
	
				if (result.weatherObservation) {
	
					$('#txtICAO').html(result.weatherObservation.ICAO);
					$('#txtClouds').html(result.weatherObservation.clouds);
					$('#txtTemperature').html(result.weatherObservation.temperature); 
					$('#txtHumidity').html(result.weatherObservation.humidity);
					$('#txtWeatherCondition').html(result.weatherObservation.weatherCondition);
					$('#txtStationName').html(result.weatherObservation.stationName);
					
	
				}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				
			}
		});

	});



	$('#btnRun3').click(function() {

		$('#txtSummary').html();
		$('#txtThumbnailImg').html();
		$('#txtWikipediaURL').html(); 
	
	
		$.ajax({
			url: "getCountryInfo_btnRun3.php",
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
				
			}
		});

	});
