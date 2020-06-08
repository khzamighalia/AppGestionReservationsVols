
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SKY FLIGHT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li class="dropdown">
          <a href="profil.php">Profil</a>
          
        </li>
        <li><a href="reservations.php">Reservations</a></li>
        <li><a href="index.php">Vols</a></li>
	  </ul>
	  
      <ul class="nav navbar-nav navbar-right">
	  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['fullname']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Deconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
