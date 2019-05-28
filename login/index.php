<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>INF LOGIN</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script src="bootstrap/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		<div class="back">
			<a href="http://localhost/INFproject/">Powrót do strony internetowej</a>
		</div>
		<div class="app">
			<a href="http://localhost/INFproject/login/">INF APP</a>
		</div>
		<div class="right">

		</div>
	</div>

	<?php if( !empty($user) ): ?>

		<br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
		<a href="logout.php">Logout?</a>
		<br /><br />		

		<div class="container-fluid">
			<div class="row">

				
					<?php include 'product.php' ?>
				

				
					<?php include 'admin.php' ?>
				

			</div>
		</div>
	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>

</body>
</html>