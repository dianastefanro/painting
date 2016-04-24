<?php include('session.php'); ?>

<?php
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['PHP_SELF'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-logo" href="index.php">
        <!-- <img class="logo-img pull-left" src="Images/favicon-hands-lrg.ico" alt="logo"> -->
        <!-- <span class="text-red">V</span>
        <span class="text-orange">i</span>
        <span class="text-yellow">o</span>
        <span class="text-green">r</span>
        <span class="text-blue">i</span>
        <span class="text-indigo">c</span>
        <span class="text-violet">a</span> 
        <span class="text-red">R</span>
        <span class="text-orange">o</span>
        <span class="text-yellow">m</span>
        <span class="text-green">a</span>
        <span class="text-blue">s</span>
        <span class="text-indigo">c</span>
        <span class="text-violet">u</span>      
        <span class="text-logo-small">@art_studio<span> -->

        <img class="logo-img pull-left" src="Images/favicon-yoga-tree-lrg.ico" alt="logo">
        <span class="text-new">Vioica Romascu Art Gallery</span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">Home</a></li>
        <!--
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursuri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cursuri-pictura.html">Cursuri copii</a></li>
            <li><a href="cursuri-pictura.html">Cursuri adulti</a></li>
          </ul>
        </li>
        -->
        <li <?=echoActiveClassIfRequestMatches("cursuri")?>><a href="cursuri.php">Cursuri</a></li>
        <li <?=echoActiveClassIfRequestMatches("galerie")?>><a href="galerie.php">Galerie</a></li>
        <li <?=echoActiveClassIfRequestMatches("shop")?>><a href="shop.php">Magazin</a></li>
        <li <?=echoActiveClassIfRequestMatches("contact")?>><a href="contact.php">Contact</a></li>
        <li <?=echoActiveClassIfRequestMatches("basket")?>><a href="basket.php"><i class="fa fa-shopping-cart"></i> Cosul meu</a></li>       
<?php if(!isset($_SESSION['login_user'])){ ?>
        <!-- <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li <?=echoActiveClassIfRequestMatches("signup")?>><a href="signup.php"><i class="fa fa-user fa-fw"></i> Sign Up</a></li>
        <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        <li <?=echoActiveClassIfRequestMatches("login")?>><a href="login.php"><i class="fa fa-sign-in fa-fw"></i> Login</a></li>
<?php } else { ?>
        <!-- <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> -->
        <li <?=echoActiveClassIfRequestMatches("logout")?>><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
<?php } ?>
        </ul>
    </div>
  </div>
</nav>

<!--
<div class="text-sm-right m-t-100" style="position: absolute;">
    <p class="text-red">Welcome <?php echo $login_session; ?></p> 
</div>
--> 