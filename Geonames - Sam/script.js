	$('#btnRun').click(function() {

		$.ajax({
			url: "/Users/Sam/Documents/App Project/Geonames - Sam/Countries.php",
			type: 'POST',
			dataType: 'json',
			data: {
				countryName: $('#selCountryName').val(),
				city: $('#selCity').val()
			},
			success: function(result) {

				console.log(result);

				if (result.status.name == "ok") {

					$('#txtCountryName').html(result['data'][0]['countryname']);
					$('#txtCity').html(result['data'][0]['city']);
					

				}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				// your error code
			}
		}); 
	

	});