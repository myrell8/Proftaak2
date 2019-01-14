<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/head.php'; ?>
	<link rel="stylesheet" href="css/flights.css">
</head>
<body>

<?php require 'includes/header.inc.php'; ?>
<?php 
	$i = 0;
	if(isset($_GET['cityName'])){ 
		$url = $_GET['cityName'];
		echo "<input class='flightName2' type='hidden' value='".$url."'>"; 
		}else{
			echo "<input class='flightName2' type='hidden' value=''>"; 
		} 
?>
<div class="container color-screen">

	<div class="container-cards">
  		<!-- Template will be displayed in here.. -->
	</div>

	<div class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="table">
    			<div class="table-header">
	    	
	    		</div>
	    	</div>
	  		<svg id="barcode"></svg>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	
<template id="generate-flights">
    {{#.}}
	<div class="card w-100 mt-4 mb-4">
		<div class="card-header">
		    <h5 class="card-title">Flight: <span id="flightId">{{flightName}}</span></h5>
	  	</div>
	  <div class="card-body d-flex flex-column align-items-center">
	  	<table class="table table-borderless">
		  <thead>
		    <tr>
		      <th scope="col">Date</th>
		      <th scope="col">Estimated time</th>
		      <th scope="col">FlightNumber</th>
		      <th scope="col">Arriving / Departing</th>
		      <th scope="col">From / To</th>
		      <th scope="col">Gate</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>{{scheduleDate}}</td>
		      <td>{{scheduleTime}}</td>
		      <td>{{flightNumber}}</td>
		      <td>{{flightDirection}}</td>
		      <td>{{#route}}{{destinations}}{{/route}}</td>
		      <td>{{gate}}</td>

		    </tr>
		  </tbody>
		</table>
	    <div class="w-100 d-flex justify-content-around">
		    <button type="button" class="btn btn-primary btn-flight w-25" value="{{flightName}}">View flight</button>
			<button type="button" class="btn btn-secondary btnGetValue w-25" data-toggle="modal" data-target=".modal" value="{{flightName}}">View ticket barcode</button>
		</div>
		</div>
	</div>
	{{/.}}
</template>

</div>
<?php require 'includes/footer.inc.php'; ?>
</body>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Mustache JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>

<!-- JsBarcode js -->
<script src="js/JsBarcode.all.min.js"></script>

<!-- kaas js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<!-- Barcode Search Plugin -->
<script src="js/anysearch.js"></script>

<!-- Custom js  -->
<script src="js/main.js"></script>
</html>