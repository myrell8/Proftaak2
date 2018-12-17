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

flightName = $(".flightName").val();

function retrieveFlight(){
$.ajax({
	url: "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&flightname="+flightName+"&includedelays=false&page=0&sort=%2Bscheduletime",
	dataType: "json",
	headers: {
	"Accept": "application/json",
	"ResourceVersion": "v3"
},
	type: "GET",
	contentType: "application/json",
	success: function(data) {
		console.log(data.flights[0]);
		var template = $("#generate-flights").html();
		var renderTemplate = Mustache.render(template, data.flights[0]);
		mustache(data.flights[0], "#generate-flights", ".display-entries");
}
})
}

function getCityImg(){

	$.ajax({
	url: "https://api.teleport.org/api/urban_areas/slug:san-francisco-bay-area/",
	dataType: "json",
	headers: {
	"Accept": "application/json",
	},
		type: "GET",
		contentType: "application/json",
		success: function(data) {
			console.log(data);
	}
	})
};

retrieveFlight();
getCityImg();

$(document).on("click",".container-flight-left-li",function(){
 	if ($(this).attr("id") == "li-1") {
 		 $("#li-1").addClass( "flight-active" );
 		 $("#li-2").removeClass("flight-active");
 		 $("#li-3").removeClass("flight-active");
 	}
 	else if($(this).attr("id") == "li-2"){
 		 $("#li-1").removeClass( "flight-active" );
 		 $("#li-2").addClass("flight-active");
 		 $("#li-3").removeClass("flight-active");
 	}
 	else{
 		 $("#li-1").removeClass( "flight-active" );
 		 $("#li-2").removeClass("flight-active");
 		 $("#li-3").addClass("flight-active");
 	}
});