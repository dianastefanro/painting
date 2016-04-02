<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-logo" href="index.html">
      	<span class="text-red">V</span>
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
      	<span class="text-logo-small">@art_studio<span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.html">Home</a></li>
        <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursuri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cursuri-pictura.html">Cursuri copii</a></li>
            <li><a href="cursuri-pictura.html">Cursuri adulti</a></li>
          </ul>
        </li> -->
        <li><a href="cursuri-pictura.html">Cursuri</a></li>
        <li><a href="galerie.html">Galerie</a></li>
        <li><a href="shop.html">Magazin</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <?php if(!isset($_SESSION['login_user'])){ ?>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } else { ?>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<!-- <div class="text-sm-right">
    <p class="text-red">Welcome <?php echo $login_session; ?></p> 
</div> -->