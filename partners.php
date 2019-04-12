<!DOCTYPE html>
<html>
    <?php 
        include 'header.php'; 
    ?>
<body onload="startTime()">
<?php include 'functions.php' ?>

<nav id="home-back" class="navbar navbar-inverse header">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand logo" href="index.php"><img  src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav menu">
        <li class="menus"><a href="index.php">HOME</a></li>
        <li><a class="menus" href="news.php">NEWS</a></li>
        <li><a class="menus" href="teams.php">TEAMS</a></li>
        <li><a class="menus active" href="partners.php">PARTNERZY</a></li>
        <li><a class="menus" href="contact.php">KONTAKT</a></li>
        <button class="login-button"><a href="login.php">ZALOGUJ</a></button>
      </ul>
      
      <ul class="navbar-right">
      <?php
        include 'social-icons.php';
    ?>
      </ul>
    </div>
  </div>
</nav>

<div id="bialo" class="container-fluid">
    <div class="container partners-margin">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 partners-container">
                <h1>PARTNERZY</h1>
                <h4>LISTA NASZYCH PARTNERÓW</h4>
                <a href="contact.php"><button type="button" class="btn btn-outline-primary btn-lg partner-button">STAŃ SIĘ PARTNEREM</button></a>
            </div>
        </div>

        <div class="row partners">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="img/adidasLogo.png">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h1>NAZWA PARTNERA</h1>
                <p>Opis partnera</p>
            </div>
        </div>

        <div class="row partners">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="img/intel.png">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h1>NAZWA PARTNERA</h1>
                <p>Opis partnera</p>
            </div>
        </div>

        <div class="row partners">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="img/asus.png">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h1>NAZWA PARTNERA</h1>
                <p>Opis partnera</p>
            </div>
        </div>

        <div class="row partners">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="img/pumaLogo.png">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h1>NAZWA PARTNERA</h1>
                <p>Opis partnera</p>
            </div>
        </div>

    </div>
</div>



<?php
include 'footer.php';
?>
</body>
</html>