<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Viorica Romascu @art_studio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- 
    <link rel="stylesheet" type="text/css" href="slick-1.5.9/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick-1.5.9/slick/slick-theme.css"/> -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mycss.css">
    <!-- 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->

</head>

<body id="up">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-logo" href="home.html"><!-- <img src="Images/logo-sml.png" style="margin-right:10px;"/> -->Viorica Romascu <span class="text-logo-small">@art_studio<span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="home.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursuri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cursuri-pictura.html">Cursuri copii</a></li>
            <li><a href="cursuri-pictura.html">Cursuri adulti</a></li>
          </ul>
        </li>
        <li><a href="galerie.html">Galerie</a></li>
        <li><a href="shop.html">Magazin</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container m-t-100 m-b-100">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <form role="form" id="cont-nou" method="post">
        <div class="form-group">
          <label for="nume">Nume:</label>
          <input type="text" class="form-control" id="nume" name="nume">
        </div>
        <div class="form-group">
          <label for="prenume">Prenume:</label>
          <input type="text" class="form-control" id="prenume" name="prenume">
        </div>
        <div class="form-group">
          <label for="adresa">Adresa:</label>
          <input type="text" class="form-control" id="adresa" name="adresa">
        </div>
        <div class="form-group">
          <label for="adresa">Telefon:</label>
          <input type="text" class="form-control" id="telefon" name="telefon">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Parola:</label>
          <input type="password" class="form-control" id="pwd" name="pwd">
        </div>
        <div class="form-group">
          <label for="pwd-conf">Confirmare parola:</label>
          <input type="password" class="form-control" id="pwdconf" name="pwdconf">
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="termeni"> Am citit si sunt de acord cu <a href="term-si-cond.html">termenii si conditiile </a></label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="newsletter"> Aboneaza-ma la newsletter</label>
        </div>
        <button type="submit" class="btn btn-primary"> Creaza cont </button>
      </form>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>

<footer class="container-fluid text-center bg-1 myFooter">
    <div>
        <div class="m-t-20 m-b-20">
            <a href="#up" title="To Top">
                <span class="glyphicon glyphicon-chevron-up text-red"></span>
            </a>
        </div>
        <div class="m-b-10">
            <a class="btn btn-social-icon btn-facebook">
                <span class="fa fa-facebook"></span>
            </a>
            <a class="btn btn-social-icon btn-instagram">
                <span class="fa fa-instagram"></span>
            </a>
            <a class="btn btn-social-icon btn-pinterest">
                <span class="fa fa-pinterest"></span>
            </a>
        </div>
        <div class="m-t-20 m-b-50 big-text-only-lrg">
            <small>Cursurile de pictura se tin pe toata durata anului, astfel incat va puteti alatura oricand unei grupe, in limita locurilor disponibile.</small><br />
            <small>Completati <a href="/contact">formularul de inscriere</a> sau sunati la <strong>0740 878 933</strong> pentru a afla detalii despre locurile disponibile.</small>
        </div>   
    </div>
</footer>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "PicturaDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$adresa=$_POST['adresa'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql = "INSERT INTO Users (nume, prenume, adresa, telefon, email, parola)
VALUES ('$nume', '$prenume', '$adresa', '$telefon', '$email', '$pwd')";

// echo 'Nume: ' . $_POST['nume'] . "<br>";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
