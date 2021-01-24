$('#btnRun').click(function() {

    $.ajax({
        url: "Countries.php",
        type: 'POST',
        dataType: 'json',
        data: {
            
        },
        success: function(result) {

            console.log(result);

            if (result.status.name == "ok") {

                $('#txtNeighbourhoods').html(result['data']['city']);
                
                

            }
        
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // your error code
        }
    }); 


});



$('#btnRunTwo').click(function() {

    $.ajax({
        url: "Countries.php",
        type: 'POST',
        dataType: 'json',
        data: {
            
        },
        success: function(result) {

            console.log(result);

            if (result.status.name == "ok") {

                $('#txtName').html(result['data']['name']);
                
                

            }
        
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // your error code
        }
    }); 


});


$('#btnRunThree').click(function() {

    $.ajax({
        url: "Countries.php",
        type: 'POST',
        dataType: 'json',
        data: {
            
        },
        success: function(result) {

            console.log(result);

            if (result.status.name == "ok") {

                $('#txtCountryName').html(result['data']['countryName']);
                
                

            }
        
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // your error code
        }
    }); 


});
