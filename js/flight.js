// Function that allows mustache to be loaded multiple times.
function mustache(data, template, outerTemplate) {
	if ($(outerTemplate).data('template')) {
		var template = $(outerTemplate).data('template');
	} else {
		var template = $(template).html();
		$(outerTemplate).data('template', template);
	}
	var renderTemplate = Mustache.render(template, data);
	$(outerTemplate).html(renderTemplate);
}

// Retrieve the value of a hidden input to search for a specific flight
flightName = $(".flightName").val();

// This function will retrieve all info of the flight that was selected
function retrieveFlight(){

// Ajax call to the Schiphol api that retrieves data of one flight
$.ajax({
	url: "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&flightname="+flightName+"&includedelays=false&page=0&sort=%2Bscheduletime",
	dataType: "json",
	headers: {
	"Accept": "application/json",
	"ResourceVersion": "v3"},
	type: "GET",
	contentType: "application/json",
	success: function(data) {

		// Put the destination where the flight is coming from/ going too in a variable for easy use
		flightDestination = data.flights[0].route.destinations[0];

			// Ajax call to the Schiphol API to retrieve the flights destination
			$.ajax({
				url: "https://api.schiphol.nl/public-flights/destinations/"+ flightDestination +"?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e",
				dataType: "json",
				headers: {
				"Accept": "application/json",
				"ResourceVersion": "v1"
				},
				type: "GET",
				contentType: "application/json",
				success: function(data) {
					city = data.city.toLowerCase();
					console.log(city);

					// Ajax call to the Teleport API to retrieve a img based on the city the flight is going too/ coming from
					$.ajax({
						url: "https://api.teleport.org/api/urban_areas/slug:"+ city +"/images",
						dataType: "json",
						type: "GET",
						contentType: "application/json",
						success: function(data) {

							// Put the img source from the Teleport API in a variable for easy use
							imgSrc = data.photos[0].image.web;

							// Change the .city-img src attribute to the img url
							$(".city-img").attr('src', imgSrc);
						}
					})
				}
			})
			
		// Tell mustache.js what element the template should be rendered on
		var template = $("#generate-flights").html();

		// Render 
		var renderTemplate = Mustache.render(template, data.flights[0]);
		mustache(data.flights[0], "#generate-flights", ".display-entries");
}
})
}

// All code in this function will be executed when the page is fully loaded
$( document ).ready(function() {

	// Execute the retrieveFlight function
	retrieveFlight(); 

});

