<!DOCTYPE html>
<html>
    <?php 
        include 'header.php'; 
    ?>
<body onload="startTime(); swiper();">
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
        <li class="menus active"><a href="index.php">HOME</a></li>
        <li><a class="menus" href="news.php">NEWS</a></li>
        <li><a class="menus" href="teams.php">TEAMS</a></li>
        <li><a class="menus" href="partners.php">PARTNERZY</a></li>
        <li><a class="menus" href="contact.php">KONTAKT</a></li>
        <button class="login-button"><a href="login/login.php">ZALOGUJ</a></button>
        <button class="login-button"><a href="class/index.php">ZALOGUJ</a></button>
      </ul>
      
      <ul class="navbar-right">
      <?php
        include 'social-icons.php';
    ?>
      </ul>
    </div>
  </div>
</nav>

<div class="welcome-section content-hidden">
    <div class="content-wrap">
        <ul class="fly-in-text">
        <li>I</li>
        <li>N</li>
        <li>F</li>
        <li>R</li>
        <li>A</li>
        <li>C</li>
        <li>T</li>
        <li>I</li>
        <li>O</li>
        <li>N</li>
        <br>
        <li>G</li>
        <li>A</li>
        <li>M</li>
        <li>I</li>
        <li>N</li>
        <li>G</li>
        </ul>
        <div class="svg-wrapper enter-button">
            <svg height="39" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="shape" height="40" width="150" />
                <div id="text">
                    <a href="#" class="spot">ENTER</a>
                </div>
            </svg>
            </div>
    </div>
</div>

<div class="slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide shine"><img src="img/logoINF.png"></div>
        <div class="swiper-slide shine"><img src="img/pumaLogo.png"></div>
        <div class="swiper-slide shine"><img src="img/adidas.png"></div>
        <div class="swiper-slide shine"><img src="img/asus.png"></div>
        <div class="swiper-slide shine"><img src="img/intel.png"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div id="bialo" class="container-fluid">
    <div class="container display full-vh">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 news-hello">
                <h1>OSTANIE NEWSY</h1>
                <h4>Bądz zawsze na bieżąco</h4>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <a href="news.php"><button type="button" class="btn btn-outline-primary btn-lg all-news">WSZYSTKIE NEWSY</button></a>
            </div>
        </div>
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 news-top news1">
                <h1>Tytuł newsa CSGO</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 news-top news2">
                <h1>Pedro na podium</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 news-bottom news3">
                <h1>Tytuł newsa CSGO</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 news-bottom news4">
                <h1>Tytuł newsa CSGO</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 news-bottom news5">
                <h1>Tytuł newsa</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'facebook-box.php';
?>

<div class="container display">
    <div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 army">
            <div class="army-text">
                <h1>SPOTKAJ NASZĄ ARMIĘ</h1>
            </div>
		</div>
    </div>
    <div class="break"></div>
</div>

<div class="container display">
    <div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 army">
            <div class="">
                <h2 class="big-text">5<br>DRUŻYN</h2>
            </div>
		</div>
        <div class="col-lg-4 col-md-4 col-sm-4 army">
            <div class="">
                <h2>21<br>GRACZY</h2>
            </div>
		</div>
        <div class="col-lg-4 col-md-4 col-sm-4 army">
            <div class="">
                <h2>36<br>NAGRÓD</h2>
            </div>
		</div>
    </div>
    <div class="break"></div>
    <div class="row teams">
        <div class="col-lg-2 col-md-6 col-sm-4">
            <div>
            <a href="teams.php"><button type="button" class="btn btn-outline-primary btn-lg teams-link-button">WSZYSTKIE DRUŻYNY</button></a>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-4 teams-link">
            <h1>NASZE DYWIZJE</h1>
        </div>
        <div class="col-lg-2 col-md-0 col-sm-0">

        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>