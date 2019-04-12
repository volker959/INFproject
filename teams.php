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
        <li><a class="menus active" href="teams.php">TEAMS</a></li>
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

<div class="container-fluid teams-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 teams-main">
                    <h1>NASZE DYWIZJE</h1>
                    <h4>Nasze powody do dumy</h4>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 team-csgo team-csgo-img">
                <div class="col-lg-3 col-md-3 col-sm-3 team-csgo">
                    <h2>Counter Strike Global Offensive</h2>
                    <h4>TEAM CSGO</h4>
                    <button onclick="showCSGO()" type="button" class="btn btn-outline-primary btn-lg button-tems-show-players">Pokaż graczy</button>
                </div>
                <div id="tem1" class="col-lg-8 col-md-8 col-sm-8 team-csgo display-team">
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 team-csgo team-fifa-img">
                <div class="col-lg-3 col-md-3 col-sm-3 team-csgo">
                    <h1>FIFA 19</h1>
                    <h4>TEAM FIFA</h4>
                    <button onclick="showFIFA()" type="button" class="btn btn-outline-primary btn-lg button-tems-show-players">Pokaż graczy</button>
                </div>
                <div id="tem2" class="col-lg-8 col-md-8 col-sm-8 team-csgo display-team ">
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 team-csgo team-lol-img">
                <div class="col-lg-3 col-md-3 col-sm-3 team-csgo">
                    <h1>LEAGUE OF LEGENDS</h1>
                    <h4>TEAM LOL</h4>
                    <button onclick="showLOL()" type="button" class="btn btn-outline-primary btn-lg button-tems-show-players">Pokaż graczy</button>
                </div>
                <div id="tem3" class="col-lg-8 col-md-8 col-sm-8 team-csgo display-team">
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 team-csgo team-hs-img">
                <div class="col-lg-3 col-md-3 col-sm-3 team-csgo">
                    <h1>HEARTHSTONE</h1>
                    <h4>TEAM HEARTHSTONE</h4>
                    <button onclick="showHS()" type="button" class="btn btn-outline-primary btn-lg button-tems-show-players">Pokaż graczy</button>
                </div>
                <div id="tem4" class="col-lg-8 col-md-8 col-sm-8 team-csgo display-team">
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 player-img">
                        <div class="player-img-bg">
                            <img src="img/playerimg.png">
                        </div>
                        <h2>Imie "Nick" Nazwisko</h2>
                    </div> 
                </div>
            </div>
        </div>

</div>






<?php
    include 'footer.php';
?>
</body>
</html>