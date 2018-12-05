<html>  
<head>
  <title>FlightCheck News</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="wrapper">
    <?php include('includes/header.inc.php'); ?>
    <div class="container divHeight">
      <div class="templateContainer">
        
      </div>
        <template id="nieuwsArtikel">
          {{#.}}
          <div class="card mt-5">
          <h5 class="card-header">{{title}}</h5>
            <img src="{{urlToImage}}" alt="" class="card-img-top" style="height: 18rem; object-fit:cover">
            <div class="card-body">
           <p class="lead">{{content}} <a href="">lees meer...</a></p>
           </div>
           <div class="card-footer text-muted">Door: {{author}}</div>
          </div>
          {{/.}}
        </template>
    </div>
  </div>
  <?php include('includes/footer.inc.php'); ?>
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

<!-- nieuws.js -->
<script src="js/nieuws.js"></script>
</html>