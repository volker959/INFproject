<!DOCTYPE html>
<html>
    <?php 
        include 'header.php'; 
    ?>
    <div class="menu">
        <ul>
            <li><a class="menus" href="index.php">HOME</a></li>
            <li><a class="menus active" href="read-news.php">NEWS</a></li>
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
    <div class="container">

        <div class="welcome">
            <h1>Latest news</h1>
            <p>Welcome to the demo news site.</p>
            <a href="index.php">return to home page</a>
        </div>

        <div class="news-box">

            <div class="news">
                <?php
                    // get the database handler
                    $dbh = connect_to_db(); // function created in dbconnect, remember?
                    
                    $id_article = (int)$_GET['newsid'];

                    if ( !empty($id_article) && $id_article > 0) {
                        // Fecth news
                        $article = getAnArticle( $id_article, $dbh );
                        $article = $article[0];
                        echo "Sa posty";
                    }else{
                        $article = false;
                        echo "<strong>Wrong article!</strong>";
                    }

                    $other_articles = getOtherArticles( $id_article, $dbh );

                ?>

                <?php if ( $article && !empty($article) ) :?>

                <h2><?= stripslashes($article->news_title) ?></h2>
                <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                <div>
                    <?= stripslashes($article->news_full_content) ?>
                </div>
            <?php else:?>

                <?php endif?>
            </div>

            <hr>
            <h1>Other articles</h1>
            <div class="similar-posts">
                <?php if ( $other_articles && !empty($other_articles) ) :?>

                <?php foreach ($other_articles as $key => $article) :?>
                <h2><a href="read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
                <p><?= stripslashes($article->news_short_desc) ?></p>
                <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                <?php endforeach?>

                <?php endif?>

            </div>

        </div>

    </div>
</body>
</html>