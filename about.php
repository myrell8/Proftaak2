<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/head.php'; ?>
 <link rel="stylesheet" href="css/about.css">
</head>
	<body>
	<?php require 'includes/header.inc.php'; ?>
   <div class="container text-white">
      <div class="w-100 d-flex flex-column align-items-center pt-4">
      	<img id="aboutLogo" src="img/Logo.png">
         <div class="w-75">  	
			<h1 class="w-100 text-center mt-4">About</h1>
			<p>
				FlightCheck is a webapplication that helps passengers find all the info they need about their flights. It uses Schiphol's Flight API to
				gather and distribute data. Users can also use a barcode scanner to scan their printed tickets and find their flight that way.<br>
				FlightCheck is created and maintained by three students from ROC Ter AA in Helmond, The Netherlands for a group project. We had alot
				of fun creating this website and also learned alot in the process. We'd like to thank our teachers from ROC Ter AA for guiding and helping
				us with this project.
			</p>
		</div>

		<h1 class="w-100 text-center mt-4">Our Team</h1>
		<div class="w-100 d-flex justify-content-around text-dark">
			<div class="card" style="width: 18rem;">
			  <img class="dev-img w-50 m-auto p-2" src="img/user.png">
			  <div class="card-body">
			    <p class="card-text text-center">Myrell Richardson</p>
			  </div>
			</div>

			<div class="card" style="width: 18rem;">
			  <img class="dev-img w-50 m-auto p-2" src="img/user.png">
			  <div class="card-body">
			    <p class="card-text text-center">Joey vd Looverbosch</p>
			  </div>
			</div>

			<div class="card" style="width: 18rem;">
			  <img class="dev-img w-50 m-auto p-2" src="img/user.png">
			  <div class="card-body">
			    <p class="card-text text-center">Remco vd Linden</p>
			  </div>
			</div>
		</div>
	  </div>
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
</html>