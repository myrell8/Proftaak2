<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/head.php'; ?>
	<link rel="stylesheet" href="css/home-page.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

<?php require 'includes/header.inc.php'; ?>


<div class="container-fluid d-flex justify-content-center align-items-center">	
		<div class="wrap w-50">
			<div class="text-center text-white mb-4">
				<h1>Welcome to FlightCheck!</h1><h3 class="mt-4">Enter the destination city code to find your flight!</h3>
			</div>
  		 	<div class="search w-75 m-auto">
			   <form action="flights.php" method="GET" class="mb-4">
		      		<input name="cityName" type="text" id="myInput" class="searchTerm" placeholder="What are you looking for?" onkeyup="myfunction()">
		      		<button type="submit" class="searchButton ml-2">
		      			<i class="fa fa-search"></i>
		     		</button>
		     	</form>
		     	<ul id="myUL" class="w-100 p-0">

				</ul>
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

<!-- kaas js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<!-- Custom js  -->
<!-- <script src="js/main.js"></script> -->
<script src="js/index.js"></script>
</html>