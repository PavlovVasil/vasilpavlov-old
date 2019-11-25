<?php
  $a = rand(1,10);
  $b = rand(1,10);
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form';
		$to = 'admin@vasilpavlov.com';
		$subject = 'Message from Contact Demo ';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		// if (!$_POST['name']) {
		// 	$errName = 'Please enter your name';
		// }

		// Check if email has been entered and is valid
		// if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		// 	$errEmail = 'Please enter a valid email address';
		// }

		//Check if message has been entered
		// if (!$_POST['message']) {
		// 	$errMessage = 'Please enter your message';
		// }
		//Check if simple anti-bot test is correct
		// if ($human !== ($a + $b)) {
		// 	$errHuman = 'Your anti-spam is incorrect';
		// }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success text-center">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger text-center">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <title>Vasil Pavlov's Portfolio Webpage</title>

        <meta name="description" content="Welcome to my portfolio webpage. I will be uploading some of my future projects here - mostly the ones related to JavaScript and front-end web development.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- always include this file last -->
        <link rel="stylesheet" href="css/style.css">
    </head>

<body>
<!-- This is the top navigation bar -->

<header>
    <div class="navbar navbar-default navbar-fixed-top" id="top-navigation">
      <div class="container">
        <div class="navbar-header">
          <a href="javascript:;" class="navbar-brand" id="vasil-pavlov">Vasil Pavlov</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example" id="collapse-button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="example">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home-container" id="home">Home</a></li>
            <li><a href="#about-container" id="about">About</a></li>
            <li><a href="#portfolio-container" id="portfolio">Portfolio</a></li>
            <li><a href="#contact-container" id="contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
</header>

<!-- This is the "Home" section -->

<section class="ss-style-bigtriangle">
<div id="home-container" class="jumbotron">
      <h1 class="text-center" id="heading"><strong>My Portfolio Webpage</strong></h1>
 </div>
</section>
<svg id="bigTriangleColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
				<path d="M0 0 L50 100 L100 0 Z" />
			</svg>

<!-- This is the "About" section-->

<div id="about-container" class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="container">
        <h1 class="text-center">~ About Me ~</h1>
      </div>
    </div>
    <div class="col-md-8 col-xs-12">
	<div id="laptop-container" class="text-center">
    <i class="fa fa-laptop" id="laptop" aria-hidden="true"></i></div>
  <p id="bio" class="text-center">Just started the third year of my Bachelor of Computer Science degree at New Bulgarian University. Interested in participating in various projects and trying new technologies. The purpose of this website is to showcase some of my work for everyone to see. I have some experience with Java as a general - purpose language, as well as Javascript/HTML/CSS/Bootstrap for the front - end programming.</p>
    </div>
    <div class="col-md-4 col-md-offset-0 col-xs-8 col-xs-offset-2">
      <img id="my-photo" src="img/my-photo.jpg" class="img img-responsive img-center ">
    </div>
  </div>
</div>

<!-- This is the "Portfolio" section -->

<svg id="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path d="M0 100 C 20 0 50 0 100 100 Z"/>
			</svg>
<div id="portfolio-container" class="jumbotron">
  <h1 class="text-center heading">~ Portfolio ~</h1>

  <!-- Thumbnail gallery -->

  <div id="gallery-container" class="container">
    <div class="row">
      <a href="https://github.com/PavlovVasil/docx-to-xlsx-converter" target="_blank">
       <div class="col-lg-4 col-sm-6 col-xs-12">
         <div class="thumbnail thumb-correction">
         <img src="img/docx-to-xlsx-converter.jpg" class="img-responsive">
           <div class="caption text-center">
             <h4>Java 'docx' to 'xlsx' converter</h4>
           </div>
          </div>
        </div>
      </a>

<!-- End of thumbnail gallery -->
    </div>
  </div>
</div>
<svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path d="M0 0 C 50 100 80 100 100 0 Z"/>
			</svg>

<!-- This is the "Contact" section -->

<div id="contact-container" class="jumbotron">
  	<h1 class="text-center" id="contact-heading">~ Contact ~</h1>

<!-- The contact form -->

<div class="outer-form-container">
<form role="form" method="post" action="index.php">
  <div id="form-container">
    <div id="form-head">
      <h2>Send me a message</h2>
    </div>
    <input type="text" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>"><?php echo "<p class='text-danger'>$errName</p>";?><br />

    <input type="email" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>"><?php echo "<p class='text-danger'>$errEmail</p>";?><br />

    <textarea type="text" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea><?php echo "<p class='text-danger'>$errMessage</p>";?><br />

	<input type="text" name="human" placeholder="<?php echo $a. " + ".$b." = ?";?>"/><?php echo "<p class='text-danger'>$errHuman</p>";?><br />
    <button id="submit" name="submit" type="submit" value="Send">
      <strong>SEND</strong>
  	</button>
  </div>
</form>
</div>

<!-- <?php echo $result; ?> -->

<h2 class="text-center">You can also find me on the following social networks :</h2>

<!-- Here come the social networks buttons -->

<div class="container-fluid text-center" id="soc-btn-list" >
  <ul>
	<li><a href="https://www.facebook.com/pavlov.vasil" class="soc-btn" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

	<li><a href="https://twitter.com/Vasil_Pavlov" class="soc-btn" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

	<li><a href="https://github.com/PavlovVasil" class="soc-btn" target="_blank"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
  </ul>
</div>

</div>
<div class="container-fluid" id="contact-bottom"><a href="javascript:void(0)"  target="_black">
  <h4 class="text-center">Design and Code by Vasil Pavlov © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</h4></a>
</div>

<!-- This is the top-scroll button -->

  <a id="top-scroll" href="#" class="btn btn-primary btn-lg" role="button" title="Click to scroll back to the top" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<!-- Loading the scripts -->

<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/scrollOffset.js"></script>

<!-- This is the scrollspy - it activates the top navigation buttons -->
<script>
$('body').scrollspy({target: '.navbar-fixed-top', offset : 55});
</script>

<!--This is the top-scroll button-->
<script>
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#top-scroll').fadeIn(1000);
            } else {
                $('#top-scroll').fadeOut(1000);
            }
        });

// scroll body to 0px on click
        $('#top-scroll').click(function () {
            $('#top-scroll').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });

        $('#top-scroll').tooltip('show');

});
</script>

<!--this changes the color of the gallery thumbnails on hover -->
<script>
$(document).ready(function(){
    $('.thumbnail').hover(function(){
        $(this).find('h4').css({"color":"#f37937","transition":"all 0.5s ease-in-out"});
    }, function(){
        $(this).find('h4').css({"color":"#333333","transition":"all 0.5s ease-in-out"});
    });
});
</script>

</body>
</html>
