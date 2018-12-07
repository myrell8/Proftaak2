<html>  
<head>
  <?php require 'includes/head.php'; ?>
</head>

<body>
  <div class="wrapper">
    <?php require 'includes/header.inc.php'; ?>
    <div class="container divHeight">
      <div class="templateContainer">
        
      </div>
        
    </div>
  </div>
  <?php require 'includes/footer.inc.php'; ?>
  <template id="nieuwsArtikel">
          {{#.}}
          <div class="card mt-5 mb-5">
          <h5 class="card-header">{{title}}</h5>
            <img src="{{urlToImage}}" alt="" class="card-img-top" style="height: 18rem; object-fit:cover">
            <div class="card-body">
           <p class="lead">{{content}} <a href="">lees meer...</a></p>
           </div>
           <div class="card-footer text-muted">Door: {{author}}</div>
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