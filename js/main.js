
	$('#myModal').on('shown.bs.modal', function () {
			$('#myInput').trigger('focus')
		})

$( "#btn-search-flight-id" ).click(function() {
  
  FlightSearch = $("#input-search-flight-id").val();

  $.ajax({
    url: "https://api.schiphol.nl/public-flights/destinations/"+FlightSearch+"?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e",
    dataType: "json",
    headers:{"Accept": "application/json", "ResourceVersion": "v1"},
    type: "GET",
    contentType: "application/json",
    success: function(data){

	

    	console.log(data);

		// $.each(data, function (index, value) {
		//   alert("dikke steen");
		// });

		var template = $("#generate-flights").html();

		var renderTemplate = Mustache.render(template, data.flights);

		mustache(data.flights, "#generate-flights", ".container-cards");

    } 	
})
});

dataCounter = 0;

// Function to get all the coins which have been added to the portofolio
function getFlightInformation() {

	// Ajax function that gets data from get_coins_db.php
    $.ajax({
    url: "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&includedelays=false&page=0&sort=%2Bscheduletime",
    dataType: "json",
    headers:{"Accept": "application/json", "ResourceVersion": "v3"},
    type: "GET",
    contentType: "application/json",

    success: function(data){

		$('#myModal').on('shown.bs.modal', function () {
			$('#myInput').trigger('focus')
		})

		console.log(data);

    	flightId = data.flights[0].id;

    	dataCounter++;

        // amountOfFlights = data.flights.length;

        // console.log("Amount of flights: " + amountOfFlights);

		var template = $("#generate-flights").html();

		var renderTemplate = Mustache.render(template, data.flights);

		mustache(data.flights, "#generate-flights", ".container-cards");

		

    }
})
}


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

$(document).ready(function(){
	$(document).on("click","#closeModal", function(){
		$("#myModal").modal("hide");
	});
$(document).on("click",".btnGetValue",function(){
	var flightId =  $(this).val();
	console.log(flightId);
	JsBarcode("#barcode", flightId, {
		width: 4,
		height: 40,
	});
	$(".modal-title").html(flightId);
});

	getFlightInformation();

	$(document).scannerDetection({

    //https://github.com/kabachello/jQuery-Scanner-Detection

    timeBeforeScanTest: 200, // wait for the next character for upto 200ms
    avgTimeByChar: 40, // it's not a barcode if a character takes longer than 100ms
    preventDefault: true,

    endChar: [13],
    onComplete: function(barcode, qty){
        validScan = true;


        $('#scannerInput').val (barcode);

    } // main callback function ,
    ,
    onError: function(string, qty) {

        $('#userInput').val ($('#userInput').val()  + string);


    }


});



});
