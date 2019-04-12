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
        <li><a class="menus" href="partners.php">PARTNERZY</a></li>
        <li><a class="menus active" href="contact.php">KONTAKT</a></li>
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

<div class="container contact-form1">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 contact-open">
            <h1>KONTAKT</h1>
            <h4>NAPISZ DO NAS</h4>
        </div>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 m-auto">
			<div class="contact-form">
                <h1>Zostań w kontakcie</h1>
                
				<form id="dane" name="dane" method="post" onsubmit="return validateForm()">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Imie</label>
								<input id="imie" name="imie" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input id="mails" name="mails" type="email" class="form-control" >
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputSubject">Temat</label>
						<input id="temat" name="temat" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="inputMessage">Wiadomość</label>
						<textarea id="tesc" name="tresc"  class="form-control" rows="5"></textarea>
					</div>
					<div class="text-center">
						<button id="submit"  type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Wyślij</button>
					</div>            
                </form>
                <div id="form-status" class="col-sm-12">
                    <h2 class="status-text"></h2>
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