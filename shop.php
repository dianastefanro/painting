<?php //include('session.php'); ?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Magazin</title>
    <?php include('includes.php'); ?>
</head>

<body id="up">

<?php include('navbar.php'); ?>

<div id="myCarousel" class="carousel slide my-carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner my-carousel-body" role="listbox">
      <div class="item active">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">
        <!-- <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div> -->      
      </div>

      <div class="item">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">
        <!-- <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div> -->      
      </div>
    
      <div class="item">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">
        <!-- <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div> -->      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container m-t-100 m-b-50">
  <div class="panel panel-default text-center shop-panel">
    <div class="panel-body">
      
      <div class="btn-modal" data-toggle="modal" data-target="#myModal">
        <img  class="thumb" src="Images/thumbnails/thumb-maci.jpg" alt="Maci">
      </div>

      <div>
        <h4 class="turkuaz m-b-0">Maci pe malul marii</h4>
        <p>Diana Stefan</p>
      </div>

      <div class="m-t-10">
        <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Detalii</button>
        <button type="button" class="btn btn-info">Adauga in cos</button> -->
        <div class="btn-group">
          <a href="#" class="btn btn-default">200 RON</a>
          <a href="#" class="btn btn-pink"><i class="fa fa-shopping-cart"></i> Cumpara</a>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade shop-modal" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Detalii lucrare</h4>
            </div>
            <div class="modal-body">
              <div>
                <img src="Images/maci.jpg" alt="Maci">
              </div>
              <hr>
              <div class="row text-left product-info">
                <div class="col-xs-6">
                  <h4 class="turkuaz m-t-0">Maci pe malul marii</h4>
                  <p><b>Autor:</b> Diana Stefan</p>
                  <p><b>Categorie:</b> Peisaje, Flori</p>
                </div>
                <div class="col-xs-6">
                  <p><b>Tehnica:</b> tempera</p>
                  <p><b>Suport:</b> hartie</p>
                  <p><b>Dimensiune:</b> 29.7cm/42cm</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <div class="btn-group">
                <a href="#" class="btn btn-default">200 RON</a>
                <a href="#" class="btn btn-pink"><i class="fa fa-shopping-cart"></i> Cumpara</a>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>