<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/head.php'; ?>
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
					} ?>
<div class="container">
 	<div class="col-xs-12 mx-auto">
	 	<div class="col-sm-12 mx-auto m-5">
	    	<div class="card-columns container-cards">
	      		<!-- Template will be displayed in here.. -->
	    	</div>
		</div>
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
	      	<button type="button" class="btn btn-primary btn-flight">Go to flight</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	
    <template id="generate-flights">
    {{#.}}
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title">Flight name: <span id="flightId">{{flightName}}</span></h5>
	    <p class="card-text">{{scheduleDate}} {{scheduleTime}} {{flightNumber}}
			{{flightDirection}}
			{{#route}}
			 {{destinations}}
			{{/route}}
				</p>
	    <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btnGetValue" data-toggle="modal" data-target=".modal" value="{{flightName}}">
		  View flight info
		</button>	
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