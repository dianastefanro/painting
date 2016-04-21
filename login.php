<?php //include('session.php'); ?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Login</title>
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
          <h3>My title</h3>
          <p>My text</p>
        </div> -->      
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

<div class="container m-t-50 m-b-5
0">
  <h2>Intra in cont</h2>
  <form role="form" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Parola:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
    <!-- <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div> -->
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <div id="err-login" class="m-b-20 m-t-10 text-red"></div>
</div>

<?php include('footer.php'); ?>

<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

      $email = mysqli_real_escape_string($db,$_POST['email']);
      $pwd = mysqli_real_escape_string($db,$_POST['pwd']); 
      
      $sql = "SELECT prenume FROM Users WHERE email = '$email' and parola = '$pwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $prenume = $row['prenume'];
//echo "$sql <br />"; 
//echo "$prenume <br />"; 
      $count = mysqli_num_rows($result);
//echo "count: $count" . "<br />";
      if($count == 1) {
//echo "intra in if";
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: index.php");
      } else {
//echo "intra in else";
         $error = "Email-ul sau parola introuduse sunt incorecte!";
?>

<script>
    $("#err-login").html("Email-ul sau parola introuduse sunt incorecte!");
</script>

<?php
      }
    }
    mysqli_close($db);
?>

</body>
</html>