<!DOCTYPE html>
<html>
<head>
	<title>Barcode Scanner</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/flight.css" rel="stylesheet" type="text/css">
	<link href="css/anysearch.css" rel="stylesheet">
</head>
<body>
<?php require 'includes/header.inc.php'; ?> 
	<?php
	        $url = $_GET['flight'];
	        echo "<input class='flightName' type='hidden' value='".$url."'>";
	    ?>
	<div class="display-entries">
		<!-- Template will be displayed in here.. -->
	</div>
	<template id="generate-flights">
		{{#.}}
		<div class="container-flight">
			<div class="container-flight-left">
				
				<ul class="list-group container-flight-left-ul">
					<li class="list-group-item d-flex justify-content-between align-items-center container-flight-left-li" id="li-1">Flight Information <span class="badge badge-primary badge-pill">14</span></li>
					<li class="list-group-item d-flex justify-content-between align-items-center container-flight-left-li" id="li-2">Aircraft Information <span class="badge badge-primary badge-pill">2</span></li>
					<li class="list-group-item d-flex justify-content-between align-items-center container-flight-left-li" id="li-3">Flight Status <span class="badge badge-primary badge-pill">1</span></li>
				</ul>
				<ul class="list-group container-flight-left-ul">
					<a href="http://localhost/Proftaak2/">
						<li class="list-group-item d-flex justify-content-between align-items-center container-flight-left-li">Go Back</li>
					</a>
				</ul>
			</div>
			<div class="container-flight-right">
				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0"><button aria-controls="collapseOne" aria-expanded="true" class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" type="button">Times, Dates</button></h5>
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
</body>
</html>