<?php
 	    $pdo = null;
    	    function connect_to_db()
    	    {
   		    	$dbengine = 'mysql';
    		    $dbhost = 'localhost';
   		        $dbuser = 'root';
    		    $dbpassword = 'toor';
    		    $dbname = 'inf';
   
   		    try{
    			    $pdo = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
					return $pdo;
    		    }  
    		    catch (PDOException $e){
    			    $e->getMessage();
    		    }
    	    }