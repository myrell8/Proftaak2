<!DOCTYPE html>
<html>
<head>
	<title>Barcode Scanner</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container mt-4">

		<div class="input-group">
		  <input type="text" class="form-control" aria-label="Text input with dropdown button">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search options</button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">Filter op stad</a>
		      <a class="dropdown-item" href="#">Filter op land</a>
		      <a class="dropdown-item" href="#">Filter op IATA code</a>
		    </div>
		  </div>
		</div>
	</div>

	<input id="userInput" type="text"  autofocus/>
	<br>
	<div class="test">

	    <input id="scannerInput" type="text" value="barcodescan" autofocus/>
	</div>


    <div class="card-columns container-cards">
      <!-- Template will be displayed in here.. -->
    </div>

    <template id="generate-flights">
      {{#.}}
      
<div class="container">
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="img/flight1.gif" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">Flight to: {{id}}</h5>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" value="{{}}">
		  Generate barcode
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <svg id="barcode"></svg>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	  </div>
	</div>
</div>

{{/.}}
</template>
</body>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Mustache JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>

<!-- Moment js  -->
<script src="js/moment.min.js"></script>

<!-- JsBarcode js -->
<script src="js/JsBarcode.all.min.js"></script>

<!-- JsBarcode js -->
<script src="js/plugin.js"></script>

<!-- kaas js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<!-- Custom js  -->
<script src="js/main.js"></script>
</html>