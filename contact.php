<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/head.php'; ?>
</head>
<body>

<?php require 'includes/header.inc.php'; ?>

	<div class="container">

		<p class="h1 mt-4 mb-4 w-100 text-center">Contact</p>
	
		<form class="mt-4">
		  <div class="form-group">
		    <label for="emailInput">Email address</label>
		    <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
		  </div>
		  <div class="form-group">
		    <label for="subjectInput">Subject</label>
		    <input type="text" class="form-control" id="subjectInput" placeholder="Subject...">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Example textarea</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows=8></textarea>
		  </div>
		  <button type="submit" class="btn btn-secondary w-100">Submit</button>
		</form>

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