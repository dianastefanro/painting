<?php //include('session.php'); ?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Contact</title>
    <?php include('includes.php'); ?>
</head>

<body id="up">

  <?php include('navbar.php'); ?>

  <!-- Container (Contact Section) -->
  <div id="contact" class="container bg-grey m-t-100">
    <p class="section-important turkuaz m-b-20">Contactati-ne si va vom raspunde in maxim 2 zile lucratoare!</p>
    <div class="row">
      <div class="col-sm-5">
        <p class="m-b-20">Suntem receptivi la propuneri si sugestii de imbunatatire, deschisi catre colaborari si va raspundem cu drag la intrebari. Nu ezitati sa ne contactati!</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Aviator Petre Cretu 65, Bucuresti, Romania</p>
        <p><span class="glyphicon glyphicon-phone"></span> +40 740 878 933</p>
        <p><span class="glyphicon glyphicon-envelope"></span> contact@viorica-romascu-artgallery.ro</p>    
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nume" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Mesaj" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Trimite</button>
          </div>
        </div>  
      </div>
    </div>

    <div id="googleMap" style="height:400px;width:100%;" class="m-b-30"></div>
  </div>

  <!-- Add Google Maps -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
  var myCenter = new google.maps.LatLng(44.468081, 26.069273);

  function initialize() {
  var mapProp = {
    center:myCenter,
    zoom:15,
    scrollwheel:false,
    draggable:false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };

  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker = new google.maps.Marker({
    position:myCenter,
    });

  marker.setMap(map);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
  </script>

  <?php include('footer.php'); ?>
</body>
</html>