
    
$(document).ready(() => { 
    var items = [];
    $.ajax({
		url: "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&includedelays=false&page=0&sort=%2Bscheduletime",
        dataType: "json",
        contentType: "application/json",
		headers: {
			"Accept": "application/json",
			"ResourceVersion": "v3"
        },
        success: function(data){
            for(i = 0; i < data.flights.length  - 1; i++){
                var current  = data.flights[i].route.destinations;
                $.each(current, function(index, info){
                    $("ul").append("<li><a>"+ info +"<a></li>");
                });
            }
        }
    });
});

  
    