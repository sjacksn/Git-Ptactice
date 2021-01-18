	$('#btnRun').click(function() {

		$.ajax({
			url: "Countries.php",
			type: 'POST',
			dataType: 'json',
			data: {
				countryName: $('#selCountryName').val(),
				city: $('#selCity').val()
			},
			success: function(result) {

				console.log(result);

				if (result.status.name == "ok") {

					$('#txtCountryName').html(result['data']['countryname']);
					$('#txtCity').html(result['data']['city']);
					

				}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				// your error code
			}
		}); 
	

	});