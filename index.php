<!DOCTYPE html>
<html>
    <?php 
        include 'header.php'; 
    ?>

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

    <div class="menu">
        <ul>
            <li><a class="menus active" href="index.php">HOME</a></li>
            <li><a class="menus" href="read-news.php">NEWS</a></li>
            <li><a class="menus" href="#">TEAMS</a></li>
            <li><a class="menus" href="#">PARTNERZY</a></li>
            <li><a class="menus" href="#">KONTAKT</a></li>
            <li><a class="login-button" href="#">ZALOGUJ</a></li>
        </ul>
    </div>
    <?php
        include 'social-icons.php';
    ?>
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
    <div class="container full-vh">
        <div class="row">
            <div class="col-lg-10 news-hello">
                <h1>OSTANIE NEWSY</h1>
                <h4>Bądz zawsze na bieżąco</h4>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-outline-primary btn-lg all-news">WSZYSTKIE NEWSY</button>
            </div>
            <div class="col-lg-6 news-top news1">
                <h1>Tytuł newsa CSGO</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
            <div class="col-lg-6 news-top news2">
                <h1>Pedro na podium</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 news-bottom news3">
                <h1>Tytuł newsa CSGO</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
            <div class="col-lg-4 news-bottom news4">
                <h1>Tytuł newsa CSGO</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
            <div class="col-lg-4 news-bottom news5">
                <h1>Tytuł newsa</h1>
                <p>Opis newsa wraz z krótkim rozwinięciem</p>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'facebook-box.php';
?>
</div>
<div class="container">
    <div class="row">
		<div class="col-lg-12 army">
            <div class="army-text">
                <h1>SPOTKAJ NASZĄ ARMIĘ</h1>
            </div>
		</div>
    </div>
    <div class="break"></div>
</div>

<div class="container">
    <div class="row">
		<div class="col-lg-4 army">
            <div class="">
                <h2 class="big-text">5<br>DRUŻYN</h2>
            </div>
		</div>
        <div class="col-lg-4 army">
            <div class="">
                <h2>21<br>GRACZY</h2>
            </div>
		</div>
        <div class="col-lg-4 army">
            <div class="">
                <h2>36<br>NAGRÓD</h2>
            </div>
		</div>
    </div>
    <div class="break"></div>
    <div class="row teams">
        <div class="col-lg-2">
            <div>
            <button type="button" class="btn btn-outline-primary btn-lg teams-link-button">WSZYSTKIE DRUŻYNY</button>
            </div>
        </div>
        <div class="col-lg-8 teams-link">
            <h1>NASZE DYWIZJE</h1>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>