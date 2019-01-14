<html>  
<head>
  <?php require 'includes/head.php'; ?>
  <link rel="stylesheet" href="css/news.css">
</head>

<body>
<!-- header required -->
  <?php require 'includes/header.inc.php'; ?>

  <div class="container">
    <div class="wrapper">

        <!-- all templates will be outputted in the .templatecontainer class -->
        <div class="templateContainer">
          
        </div>
          
    </div>
  </div>
<!-- footer required -->
    <?php require 'includes/footer.inc.php'; ?>
  <!-- Mustache Template output through javascript -->
    <template id="nieuwsArtikel">
      {{#.}}
      <div class="article w-100  mt-4 mb-4">
        <div class="card articleText w-100">
          <h5 class="card-header">{{title}}</h5>
          <div class="card-body d-flex justify-content-center align-items-center">
            <img src="{{urlToImage}}" alt="" class="img-thumbnail articleImg mr-4">
            <p class="lead">{{content}}<br><br><a href="{{url}}" target="_blank" class="btn btn-secondary">Lees meer...</a></p>
          </div>
          <div class="card-footer text-muted">Door: {{author}}</div>
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

<!-- JsBarcode js -->
<script src="js/JsBarcode.all.min.js"></script>

<!-- JsBarcode js -->
<script src="js/plugin.js"></script>

<!-- kaas js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<!-- nieuws.js -->
<script src="js/news.js"></script>
</html>