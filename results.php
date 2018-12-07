<!DOCTYPE html>
<html>
<head>
	<title>FlightCheck</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/anysearch.css" rel="stylesheet">
</head>
<body>

<?php require 'includes/header.inc.php'; ?>
	

<div class="container">
 	<div class="col-xs-12 mx-auto">
	 <div class="col-sm-12 mx-auto m-5">
    <div class="card-columns container-cards">
      <!-- Template will be displayed in here.. -->
    </div>
	</div>
</div>
    <template id="generate-flights">
    {{#.}}
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="img/flight1.gif" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">Flight to: <span id="flightId">{{flightName}}</span></h5>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btnGetValue" data-toggle="modal" data-target=".modal" value="{{flightName}}">
		  Generate barcode
		</button>	
		</div>
	</div>


	<div class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">{{id}}</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
				<svg id="barcode"></svg>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
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

<!-- Moment js  -->
<!-- <script src="js/moment.min.js"></script> -->

<!-- JsBarcode js -->
<script src="js/JsBarcode.all.min.js"></script>

<!-- kaas js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<!-- Barcode Search Plugin -->
<script src="js/anysearch.js"></script>

<!-- Custom js  -->
<script src="js/main.js"></script>
</html>