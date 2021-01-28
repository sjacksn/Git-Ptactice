$('#btnRun').click(function() {

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

			if (result.status.name == "ok") {
				
				$('#txtCapital').html(result['data']['capital']);
				$('#txtGeonameId').html(result['data']['geonameId']);
				$('#txtCountryCode').html(result['data']['countryCode']);
				$('#txtCurrencyCode').html(result['data']['currencyCode']);

			}
		
		},
		error: function(jqXHR, textStatus, errorThrown) {
			// your error code
		}
	}); 


});