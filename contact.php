<!DOCTYPE html>
<html>
<head>
	<?php require 'includes/head.php'; ?>
	<link rel="stylesheet" href="css/contact.css">
</head>
<body>

<?php require 'includes/header.inc.php'; ?>

	<div class="container text-white">

		<p class="h1 mt-4 mb-4 w-100 text-center text">Contact</p>
	
		<form class="form d-flex flex-column align-items-center mt-4">
			<div class="form-group w-75">
		    <label for="nameInput">Name</label>
		    <input type="text" class="form-control" id="nameInput" placeholder="Enter name here" name="cf_name">
		  </div>
		  <div class="form-group w-75">
		    <label for="emailInput">Email address</label>
		    <input type="email" class="form-control" id="emailInput" placeholder="Enter email here" name="cf_email">
		  </div>
		  <div class="form-group w-75">
		    <label for="subjectInput">Subject</label>
		    <input type="text" class="form-control" id="subjectInput" placeholder="Enter subject here" name="cf_subject">
		  </div>
		  <div class="form-group w-75">
		    <label for="contactmessage">Message</label>
		    <textarea class="form-control" id="contactmessage" rows=10 name="cf_message"></textarea>
		  </div>
		  <button type="submit" class="btn btn-secondary w-75" id="submitFormBtn">Submit</button>
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

<script src="js/JsBarcode.all.min.js"></script>
<!-- Custom js  -->
<script src="js/mail.js"></script>
</html>