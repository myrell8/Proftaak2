$('#myModal').on('shown.bs.modal', function () {
	$('#myInput').trigger('focus')
})
$("#btn-search-flight-id").click(function () {
	FlightSearch = $("#input-search-flight-id").val();
	$.ajax({
		url: "https://api.schiphol.nl/public-flights/destinations/" + FlightSearch + "?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e",
		dataType: "json",
		headers: {
			"Accept": "application/json",
			"ResourceVersion": "v1"
		},
		type: "GET",
		contentType: "application/json",
		success: function (data) {
			var template = $("#generate-flights").html();
			var renderTemplate = Mustache.render(template, data.flights);
			mustache(data.flights, "#generate-flights", ".container-cards");
		}
	})
});

dataCounter = 0;

// Function to get all the coins which have been added to the portofolio
function getFlightInformation() {

	// ajax call is used to obtain base API
	$.ajax({
		url: "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&includedelays=false&page=0&sort=%2Bscheduletime",
		dataType: "json",
		headers: {
			"Accept": "application/json",
			"ResourceVersion": "v3"
		},
		type: "GET",
		contentType: "application/json",
		success: function (data) {
			console.log(data);
			flightnew = new Array();
			//checks for any search results if not skip the if question
			var flight = $(".flightName2").val();
			if (flight != "") {
				for (i = 0; i < data.flights.length; i++) {
					var controlling = data.flights[i].route.destinations[0];
					if (controlling.includes(flight)) {//checks for any flights that use the search term and pushes it into an array
						flightnew.push(data.flights[i]);
					}
				}
				if(flightnew.length == 0){
					$(".container").append(`
						<div class='w-100 h-100 d-flex flex-column align-items-center justify-content-center'><h2 class='mb-4 text-white'>No flights found... </h2><div class='w-50 d-flex justify-content-between'><a href='index.php' class="btn btn-secondary float-left">Back to home</a><a href='flights.php' class='btn btn-secondary float-right'>Show all flights</a></div></div>
					`);

				}else{
				mustache(flightnew, "#generate-flights", ".container-cards");
				}
			} else {//converts the array to an usable object that holds information
				mustache(data.flights, "#generate-flights", ".container-cards");
			}
		}

	})
}


// Function that allows mustache to be loaded multiple times. from any call
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

$(document).ready(function () {//everything what needs to be loaded when the document is ready, then it will be executed


	$(document).anysearch({//this is for an barcode scanner to check if it could scan a barcode
		checkIsBarcodeMilliseconds: 250,
		checkBarcodeMinLength: 18,
		searchFunc: function (search) {
			$.ajax({//if it found an barcode it can read the information and is used for an ajax call
				url: "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&flightname=" + search + "&includedelays=false&page=0&sort=%2Bscheduletime",
				dataType: "json",
				headers: {
					"Accept": "application/json",
					"ResourceVersion": "v3"
				},
				type: "GET",
				contentType: "application/json",
				success: function (data) {
					//switch to another page using window.location
					var template = $("#generate-flights").html();
					var renderTemplate = Mustache.render(template, data);
					mustache(data, "#generate-flights", ".container-cards");
					url = "http://localhost/Proftaak2/flight.php?flight=" + search;
					window.location.replace(url);

				}
			})
		}
	});
	$('#scanner').tooltip("show");
	$(document).on("click", "#closeModal", function () {
		$("#myModal").modal("hide");
	});
	$(document).on("click", ".btnGetValue", function () {
		var flightId = $(this).val();
		JsBarcode("#barcode", flightId, {
			width: 4,
			height: 40,
		});
		$(".modal-title").html(flightId);
		$(".btn-flight").val(flightId);
	});


	$(document).on("click", ".btn-flight", function () {
		flight = $(this).val();
		window.location = "/Proftaak2/flight.php?flight=" + flight + "";
	});
	getFlightInformation();

});
	// $(document).scannerDetection({
	// 	//https://github.com/kabachello/jQuery-Scanner-Detection
	// 	timeBeforeScanTest: 200, // wait for the next character for upto 200ms
	// 	avgTimeByChar: 40, // it's not a barcode if a character takes longer than 100ms
	// 	preventDefault: true,
	// 	endChar: [13],
	// 	onComplete: function (barcode, qty) {
	// 		validScan = true;
	// 		$('#scannerInput').val(barcode);
	// 	} // main callback function ,
	// 	,
	// 	onError: function (string, qty) {
	// 		$('#userInput').val($('#userInput').val() + string);
	// 	}
	// });
