<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Viorica Romascu Art Gallery</title>
    
    <?php
    include('includes.php');
    ?>
</head>

<body id="up">

<?php include('navbar.php'); ?>

<div id="myCarousel" class="carousel slide my-carousel m-b-50" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">    
      </div>

      <div class="item">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">     
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
      <i class="fa fa-chevron-left glyphicon-chevron-left"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
      <i class="fa fa-chevron-right glyphicon-chevron-right"></i>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center m-t-100 m-b-100">
                <h1 class="h1-primary">Bine ati venit!</h1>
                <p class="lead">Pictura si desenul inseamna comunicare sufleteasca, exprimarea trairilor interioare, bucurie, materializarea viselor, sansa de a-ti cultiva talentul. Mai mult decat toate, pictura si desenul pot insemna o lectie de iubire si de regasire interioara! Va asteptam sa exploram impreuna, magia culorilor si misterul marilor capodopere ale lumii!</p> 
            </div>
        </div>   
    </div>

    <hr />

    <div class="row">
        <div class="col-md-4">
            <div class="text-center m-t-50 m-b-50">
                <img src="Images/VioricaRomascu.jpg" alt="Viorica Romascu" width="200" height="200" class="img-circle">
                <h3 class="h3-succes m-t-20">Despre Viorica Romascu</h3>
                <p class="big-text-only-lrg"><cite>Debutul meu in arta dateaza inca din copilarie, etapa din viata in care se nasc visele. Toti stim inca din copilarie ceea ce avem sa devenim. Putini insa sunt constanti in aceasta. Eu am reusit sa fiu constanta, ducandu-mi visul pana la capat.</cite></p>
                <p class="read-more"><a href="/viorica-romascu" class="text-danger">Citeste mai mult &#8594;</a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center m-t-50 m-b-50">
                <img src="Images/cursuri-pictura.jpg" alt="Cursuri pictura" width="200" height="200" class="img-circle">
                <h3 class="h3-succes m-t-20">Cursuri de pictura</h3>
                <p class="big-text-only-lrg">Va propunem o serie de cursuri de arte plastice : pictura, desen, istoria artelor, ateliere creative de confectionat papusi, modelat lut si multe altele. Cursurile se adreseaz&#259; tuturor categoriilor de varst&#259; si sunt adaptate in functie de varsta si nivelul cursantilor.</p>
                <p class="read-more"><a href="cursuri-pictura.html" class="text-danger">Citeste mai mult &#8594;</a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center m-t-50 m-b-50">
                <img src="Images/magazin.jpg" alt="Magazin" width="200" height="200" class="img-circle">
                <h3 class="h3-succes m-t-20">Magazin online</h3>
                <p class="big-text-only-lrg">Suntem mandrii sa va anuntam ca acum puteti achizitiona online lucrari ale cursantilor de la scoala de pictura Viorica Romascu, dar si lucrari ale fostilor cursanti, acum artisti consacrati si chiar lucrari ale pictoritei Viorica Romascu.</p>
                <p class="read-more"><a href="/shop" class="text-danger">Citeste mai mult &#8594;</a></p>
            </div>
        </div>    
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>   