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
        <li><a class="menus active" href="news.php">NEWS</a></li>
        <li><a class="menus" href="teams.php">TEAMS</a></li>
        <li><a class="menus" href="partners.php">PARTNERZY</a></li>
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

<div class="container news-container">
        <div class="row news-row-margin">
            <div class="col-lg-12 col-md-12 col-sm-12 news-open-text">
                <h1>OSTANIE NEWSY</h1>
                <h4>Bądz zawsze na bieżąco</h4>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
            
            </div>
        </div>
        
        <div class="row news-row-margin">
            <div class="col-lg-6 col-md-6 col-sm-6 news-padding">
                <img src="img/cgoNews.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Tytuł newsa</h1>
                <p>Opis newsa</p>
            </div>
        </div>

        <div class="row news-row-margin">
            <div class="col-lg-6 col-md-6 col-sm-6 news-right-text">
                <h1>Tytuł newsa</h1>
                <p>Opis newsa</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 news-padding">
                <img src="img/fifaNews.png">
            </div>
        </div>

        <div class="row news-row-margin">
            <div class="col-lg-6 col-md-6 col-sm-6 news-padding">
                <img src="img/lolNews.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Tytuł newsa</h1>
                <p>Opis newsa</p>
            </div>
        </div>

        <div class="row news-row-margin">
            <div class="col-lg-6 col-md-6 col-sm-6 news-right-text">
                <h1>Tytuł newsa</h1>
                <p>Opis newsa</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 news-padding">
                <img src="img/lolNews.png">
            </div>
        </div>

        <div class="row news-row-margin">
            <div class="col-lg-6 col-md-6 col-sm-6 news-padding">
                <img src="img/cgoNews.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>Tytuł newsa</h1>
                <p>Opis newsa</p>
            </div>
        </div>

</div>

<?php
    include 'footer.php';
?>
</body>
</html>