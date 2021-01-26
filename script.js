	$('#btnRun').click(function() {

		$.ajax({
			url: "getCountryInfo.php",
			type: 'POST',
			dataType: 'json',
			data: {
				capital: $('#selCapital').val(),
				
			},
			success: function(result) {

				console.log(result);

				if (result.status.name == "ok") {

					$
					$('#txtCapital').html(result['data']['capital']);
					

				}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				// your error code
			}
		}); 
	

	});