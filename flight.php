<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/head.php'; ?>
	<link href="css/flight.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php require 'includes/header.inc.php'; ?> 
	<div class="container d-flex flex-column justify-content-around align-items-center">

	<?php
        $url = $_GET['flight'];
        echo "<input class='flightName' type='hidden' value='".$url."'>";
    ?>

    <h1 class="text-white">Flight: <?php echo $url ?></h1>

	<div class="display-entries">
		<!-- Template will be displayed in here.. -->
	</div>
	<template id="generate-flights">
		{{#.}}
		<div class="container-flight">
			<div class="container-flight-left">
				<div><img class="city-img" src="img/background.jpg"></div>
				<ul class="list-group container-flight-left-ul">
					<a href="flights.php">
						<li class="list-group-item d-flex justify-content-between align-items-center container-flight-left-li">Go Back</li>
					</a>
				</ul>
			</div>
			<div class="container-flight-right">
				<div class="accordion h-100" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0 bg"><button aria-controls="collapseOne" aria-expanded="true" class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" type="button">Times, Dates</button></h5>
						</div>
						<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<div class="h1">
											Time
										</div>
									</li>
									<li class="list-group-item">Schedule Landing Time: {{scheduleTime}}</li>
									<li class="list-group-item">Expected Time On Belt: {{expectedTimeOnBelt}}</li>
									<li class="list-group-item">
										<div class="h1">
											Date
										</div>
									</li>
									<li class="list-group-item">Scheduled Landing Date: {{scheduleDate}}</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0"><button aria-controls="collapseTwo" aria-expanded="false" class="btn btn-link collapsed" data-target="#collapseTwo" data-toggle="collapse" type="button">Flight Name, Gate, Baggage Claim</button></h5>
						</div>
						<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample" id="collapseTwo">
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<div class="h1">
											Flight Name/Extra Info
										</div>
									</li>
									<li class="list-group-item">Flight Name: {{flightName}}</li>
									<li class="list-group-item">Flight Number: {{flightNumber}}</li>
									<li class="list-group-item">IATA Code: {{prefixIATA}}</li>
									<li class="list-group-item">Flight ID: {{id}}</li>
									<li class="list-group-item">
										<div class="h1">
											Gate/Baggage Claim
										</div>
									</li>
									<li class="list-group-item">Gate Number: {{gate}}</li>
									<li class="list-group-item">Baggage Claim Belt: {{baggageClaim.belts}}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{/.}}
	</template>
	<?php //require 'includes/footer.inc.php'; ?>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script> <!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
</script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
</script> <!-- Mustache JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js">
</script><!-- JsBarcode js -->
<script src="js/JsBarcode.all.min.js">
</script> <!-- Ajax js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js">
</script> <!-- Anysearch plugin -->
<script src="js/anysearch.js">
</script> <!-- Custom js  -->
<script src="js/flight.js">
</script>
</div>
<?php require 'includes/footer.inc.php'; ?>
</body>
</html>