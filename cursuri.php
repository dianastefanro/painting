<?php //include('session.php'); ?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Cursuri pictura</title>
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
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center m-t-100 m-b-100">
                <h1 class="h1-primary">Oda bucuriei, prin desen si pictura!</h1>
                <p class="lead"><span class="text-danger">Motto:</span>
                <i class="fa fa-quote-right text-grey small"></i> <i>Arta - poate cea mai desavarsita a fost conceputa in timpul copilariei umanitatii. Caci omul primitiv uita de grijile cele domestice si lucra cu multa voiosie. Copiii poseda aceasta bucurie primordiala... Arta ar trebui să fie numai bucurie!... De aceea, nu exista "artisti", ci numai oameni care simt nevoia sa lucreze, intru bucurie!</i> <i class="fa fa-quote-left text-grey small"></i> <small>Constantin Brancusi</small></p> 
            </div>
        </div>   
    </div>

    <hr />

    <h3 class="h3-succes m-t-30">Descrierea cursurilor</h3>
    <div class="center-block m-b-50">
        <p class="big-text-only-lrg">Modulul unui curs cuprinde 12 sedinte, iar fiecare sedinta dureaza 2 ore.</p>
        <div class="row">
            <div class="col-sm-6">
                <ul class="big-text-only-lrg">
                    <li><b>Modulul 1</b>
                        <ul>
                            <li> Gramatica imaginii. Morfologia și sintaxa imaginii</li>
                            <li> Studiu asupra elementelor de limbaj plastic: culoare, forma, pata picturala, pata decorativa, linie, punct, textura</li>
                            <li> Studiu asupra compozitiilor plastice</li>
                            <li> Tipuri de compozitii plastice</li>
                            <li> Spatialitate si perspectiva</li>
                        </ul>
                    </li>
                    <li><b>Modulul 2</b>
                        <ul>
                            <li> Studiul formelor in culoare si desen</li>
                            <li> Experimentarea contrastelor de culoare</li>
                            <li> Natura statica</li>
                            <li> Valoratie</li>
                        </ul>
                    </li>
                    <li><b>Modulul 3</b>
                        <ul>
                            <li> Anatomie artistica</li>
                            <li> Compozitii cu personaje in desen si culoare</li>
                            <li> Crochiu</li>
                        </ul>
                    </li>
                    <li><b>Modulul 4</b>
                        <ul>
                            <li> Studiul și executia reproducerilor după marile opere de artă</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="big-text-only-lrg">
                    <li><b>Modulul 5</b>
                        <ul>
                            <li> Istoria artelor I &ndash; Perioada antica</li>
                        </ul>
                    </li>
                    <li><b>Modulul 6</b>
                        <ul>
                            <li> Istoria artelor II &ndash; Perioada bizantina, romanica, gotica</li>
                        </ul>
                    </li>
                    <li><b>Modulul 7</b>
                        <ul>
                            <li> Istoria artelor III &ndash; Perioada Renasterii, Barocului</li>
                        </ul>
                    </li>
                    <li><b>Modulul 8</b>
                        <ul>
                            <li> Istoria artelor IV &ndash; Perioada sec XVIII - XIX &ndash; Rococo, Veduta italiana, Clasicismul francez, Neoclasicismul, Romantismul, Realismul, Impresionismul, Postimpresionismul</li>
                        </ul>
                    </li>
                    <li><b>Modulul 9</b>
                        <ul>
                            <li> Istoria artelor V &ndash; Perioada Fovista, Cubista, Futurista, Expresionista, Arta abstracta, Suprarealismul, Dadaismul, Orfismul, Op-art, Dripingul, Pop art</li>
                        </ul>
                    </li>
                    <li><b>Modulul 10</b>
                        <ul>
                            <li> Istoria artelor VI &ndash; Arta romaneasca sec XIX - XX</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lead text-danger m-b-0">Fiecare modul se adapteaza in functie de varsta cursantului.</div>
        <p class="big-text-only-lrg m-t-0">Culorile si pensulele sunt incluse in pretul cursurilor!</p>
    </div>

</div>

<?php include('footer.php'); ?>

</body>
</html>