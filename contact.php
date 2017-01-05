<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'example@bootstrapbay.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Xiyi Li</title>
    <link rel="shortcut icon" href="images/icon.PNG" type="image/png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/parallax.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

        <!--      NAV BAR-->
        <nav class="navbar navbar-default" style="margin-bottom:0px;">
          <!-- navbar-fixed-top -->
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" style="margin-top:33px;">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden-md hidden-lg hidden-sm visible-xs" href="https://lixiyi512.github.io"><img src="images/xs_logo.jpg" class="img-responsive" style="width:100px" alt="website logo"></a>
          </div>
          <div><a href="https://lixiyi512.github.io"><img src="images/md_logo.jpg" class="img-responsive hidden-xs visible-md visible-sm visible-lg" alt="website logo"  style="width:200px; margin:0 auto;"></a></div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse text-center" id="navbar-collapse" style="width:100%;">
              <ul class="nav navbar-nav" id="horizontal-style" >
                              <li> <a href="index.html">HOME</a></li>
                              <li> <a href="projects.html">MY PROJECT</a></li>
                              <li> <a href="resume.html">RESUME</a></li>
                              <li> <a href="about.html">ABOUT ME </a></li>
                              <li> <a href="gallery.html">GALLERY</a></li>
                              <li class="active"> <a href="connect.html">LET'S CONNECT</a></li>
              </ul>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
    <!-- panel1 -->
     
    <section class="homepage-panel homepage-panel-d fixed-height" id="panel-1" style="background-image:url(images/pinkShade1.JPG);">
      <div class="row">
            <div class="hidden-xs hidden-sm col-md-10 col-md-offset-2">
               <p style="color:#FFFFFF;font-family:GothamBook,Arial; font-size:25px;line-height:30px;margin-top:30%;margin-bottom:5%;text-align:left;">
                    I Dream<br/>
                    I never think it's too old to DREAM<br/>
                    BLAHBLAHBLAH<br/>
                    Nunc orci leo, sagittis nec molestie ut.
                </p>
               
            </div>
      </div>
    </section>
    <!-- project detail -->
      <div class="container-fluid"> 
    <div class="row" style="background-color:">
      <div class="col-md-offset-2 col-md-8 project text-center" >

        <img src="images/contact.jpg" class="img-responsive" alt="contact" style="width:40%;margin:auto;">
        
          
          <form class="form-horizontal" role="form" method="post" action="connect.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>	
		</div>
	</div>
</form> 
          

    </div>
    </div>
  
    

    
      </div>

<!--
    <section  style="background-image:url(images/guitar.JPG);background-position:center;background-repeat:no-repeat;background-size:100%;min-height:100px;">
      <div class="row">

      </div>
    </section>
-->
      
    <!-- </section> -->





<!-- footer -->
<div class="container-fluid text-center subfooter" style="margin-top:10%;">
    <div class="row">
        <div class="col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5 col-sm-offset-1 col-sm-5 col-xs-offset-4 col-xs-8">
         
          <a href="#" target="_blank"><img src="images/linkedin.png" class="img-responsive footericon" alt="linkedin logo"></a>
          <a href="#" target="_blank"><img src="images/instagram.png" class="img-responsive footericon" alt="instagram logo"></a>
          <a href="#" target="_blank"><img src="images/youtube.png" class="img-responsive footericon" alt="youtube logo"></a>
          <a href="#" target="_blank"><img src="images/email.jpeg" class="img-responsive footericon" alt="email logo"></a>
        </div>

        <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-3 col-sm-offset-2 col-sm-3 col-xs-offset-1 col-xs-10"><p>Copyright 2016 Xiyi Li.</p></div>
    </div>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
