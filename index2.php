<?php
 	    $pdo = null;
    	    function connect_to_db()
    	    {
   		    	$dbengine   = 'mysql';
    		    $dbhost     = 'localhost';
   		        $dbuser     = 'root';
    		    $dbpassword = 'toor';
    		    $dbname     = 'inf';
   
   		     try{
                $pdo = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                return $pdo;
            }  
            catch (PDOException $e){
                $e->getMessage();
    		    }
            }
?>

<?php
function fetchNews( $conn )
    {

        $request = $conn->prepare("SELECT news_id, news_title, news_short_desc, news_author, news_published_on FROM info_news ORDER BY news_published_on DESC ");
        return $request->execute() ? $request->fetchAll() : false; 
    }


    function getAnArticle( $id_article, $conn )
    {

        $request =  $conn->prepare("SELECT news_id,  news_title, news_full_content, news_author, news_published_on FROM info_news  WHERE news_id = ? ");
        return $request->execute(array($id_article)) ? $request->fetchAll() : false; 
    }


    function getOtherArticles( $differ_id, $conn )
    {
        $request =  $conn->prepare("SELECT news_id,  news_title, news_short_desc, news_full_content, news_author, news_published_on FROM info_news  WHERE news_id != ? ");
        return $request->execute(array($differ_id)) ? $request->fetchAll() : false; 
    }
?>

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