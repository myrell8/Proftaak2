<!DOCTYPE html>
<html>
<head>
	<title>Barcode Scanner</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-light bg-light navbar-expand">
<a href="#" class="navbar-brand">NavBar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<ul class="navbar-nav mr-auto">
<li class="nav-item"><a href="#" class="nav-link">Home</a></li>
<li class="nav-item"><a href="#" class="nav-link">Flights</a></li>
<li class="nav-item"><a href="#" class="nav-link">News</a></li>
</ul>
<div class="pull-right">
<div class="input-group">
		  <input type="text" class="form-control" aria-label="Text input with dropdown button">
		  <div class="input-group-append">
		    <button class="btn btn-outline-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search options</button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">Filter op stad</a>
		      <a class="dropdown-item" href="#">Filter op land</a>
		      <a class="dropdown-item" href="#">Filter op IATA code</a>
		    </div>
		  </div>
			</div>
		</div>

</nav>


	

<div class="container">
 	<div class="col-xs-12 mx-auto">
	 <div class="col-sm-4 mx-auto m-5">
	 <div class="d-flex flex-column justify-content-center mt-5">
	 	<input id="userInput" class="form-control" type="text"  autofocus/>
		<input id="scannerInput" class="form-control" type="text" value="barcodescan" autofocus/>
	 </div>
	</div>
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
	    <h5 class="card-title">Flight to: <span id="flightId">{{id}}</span></h5>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btnGetValue" data-toggle="modal" data-target=".modal" value="{{id}}">
		  Generate barcode
		</button>	
		</div>
	</div>
{{/.}}
</template>
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<svg id="barcode"></svg>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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

<!-- JsBarcode js -->
<script src="js/plugin.js"></script>

<!-- kaas js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<!-- Custom js  -->
<script src="js/main.js"></script>
</html>