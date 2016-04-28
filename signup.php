<?php //include('session.php'); ?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Cont nou</title>
    <?php include('includes.php'); ?>
</head>

<body id="up">

<?php include('navbar.php'); ?>

<div class="container m-t-100 m-b-50">
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

      <div id="err-signup" class="m-t-10 text-red"></div>
      <div id="msg-signup" class="text-green"></div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>

<?php include('footer.php'); ?>

<!--
<?php
/*
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "PicturaDB";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
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
*/
?>
-->
<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $nume = mysqli_real_escape_string($db,$_POST['nume']);
      $prenume = mysqli_real_escape_string($db,$_POST['prenume']); 
      $adresa = mysqli_real_escape_string($db,$_POST['adresa']); 
      $telefon = mysqli_real_escape_string($db,$_POST['telefon']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $pwd = mysqli_real_escape_string($db,$_POST['pwd']); 
      
      $sql = "INSERT INTO Users (nume, prenume, adresa, telefon, email, parola)
              VALUES ('$nume', '$prenume', '$adresa', '$telefon', '$email', '$pwd')";

      if ($db->query($sql) === TRUE) {
          //echo "New record created successfully.";
?>
          <script>
              $("#msg-signup").html("Contul s-a creat cu succes!");
          </script>
<?php
      } else {
?>
          <script>
              $("#err-signup").html("Ne pare rau, dar contul nu s-a putut crea! Va rugam sa incercati mai tarziu sau contactati-ne prin email sau telefon. Nu uitati, puteti comanda produse din magazinul online si fara a avea cont pe site!");
          </script>
<?php
          //echo "Error: " . $sql . "<br>" . $conn->error;
      }
   }

   mysqli_close($db);
?>

</body>
</html>
