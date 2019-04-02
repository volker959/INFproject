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
        <a href="#" class="enter-button">ENTER</a>
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

<div class="news-box">
<?php
           
            $dbh = connect_to_db();
            $news = fetchNews($dbh);
        ?>

        <?php if ( $news && !empty($news) ) :?>

        <?php foreach ($news as $key => $article) :?>
        <h2><a href="read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
        <p><?= stripslashes($article->news_short_desc) ?></p>
        <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
        <?php endforeach?>

        <?php endif?>


</div>
<?php 
    include 'facebook-box.php';
/*
    include 'content.php';
    include 'footer.php'; 
*/
?>

<div class="army">
    <div class="army-text">
        <h1>MEET OUR ARMY</h1>
    </div>
</div>

<div class="break"></div>

<div class="cerafix">
    <div calss="box">
        <h2>5<br>TEAMS</h2>
    </div>
    <div calss="box">
        <h2>21<br>PLAYERS</h2>
    </div>
    <div calss="box">
        <h2>36<br>AWARDS</h2>
    </div>
</div>


<!--
    <div class="content">
        <div class="box">
            tutej jakas zawartosc zrobimy
        </div>
        <div class="sidebar">
            tutaj zrobimy jakies obrazki
        </div>
    </div>
    <div class="footer">
        zawartosc stopki
    </div>
-->

</body>
</html>