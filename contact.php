<?php require_once 'submit.php'; ?>
<!DOCTYPE html>
<html>
    <?php 
        include 'header.php'; 
    ?>
<script type="text/javascript">
        function validate() {
            var valid = true;

            $(".info").html("");
            var userName = document.forms["mailForm"]["userName"].value;
            var userEmail = document.forms["mailForm"]["userEmail"].value;
            var subject = document.forms["mailForm"]["subject"].value;
            var userMessage = document.forms["mailForm"]["userMessage"].value;
            
            if (userName == "") {
                $("#userName-info").html("(required)");
                $("#userName").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("(required)");
                $("#userEmail").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("(invalid)");
                $("#userEmail").css('background-color', '#FFFFDF');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("(required)");
                $("#subject").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (userMessage == "") {
                $("#userMessage-info").html("(required)");
                $("#userMessage").css('background-color', '#FFFFDF');
                valid = false;
            }
            return valid;
        }
        
        function addMoreAttachment() {
            $(".attachment-row:last").clone().insertAfter(".attachment-row:last");
            $(".attachment-row:last").find("input").val("");
        }
</script>

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
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>

        <!-- Display contact form -->
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Name" required="">
            </div>
            <div class="form-group">
            <div>
                <input type="radio" id="huey" name="drone" value="huey">
                <label for="huey">Kobieta</label>
                </div>

                <div>
                <input type="radio" id="dewey" name="drone" value="dewey">
                <label for="dewey">Mężczyzna</label>
            </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Email address" required="">
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" placeholder="Subject" required="">
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Write your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="attachment" class="form-control">
            </div>
            <div class="form-group">
                <input type="checkbox" id="horns" name="horns">
                <label for="horns">Wyrażam zgodę na przesyłanie danych zawarych w formularzu.</label>
            </div>
            <div class="submit">
                <input type="submit" name="submit" class="btn" value="SUBMIT">
            </div>
        </form>

	</div>
</div>


<?php
include 'footer.php';
?>
</body>
</html>