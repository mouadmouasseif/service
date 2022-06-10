<?php
/*
Free Bootstrap Themes : https://www.Zerotheme.com
 */

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "mouadmouassief@gmail.com";
	$subject = "MouasseifMouad Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme dot com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>MouasseifMouad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tous vos services en ligne et on plain securite chez nous">
    <meta name="author" content="https://www.mouadmouasseif.com">

	<!-- styles -->
	
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.min.css">
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="wrapper">

	<!-- /////////////////////////////////////////Navigation -->
	<button id="mm-menu-toggle" class="mm-menu-toggle">Toggle Menu</button>
	<nav id="mm-menu" class="mm-menu">
		<div class="mm-menu__header">
			<h2 class="mm-menu__title">Mouasseif</h2>
		</div>
		<ul class="mm-menu__items">
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="index.html">
				<span class="mm-menu__link-text"><i class="fa fa-home"></i> Home</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="single.html">
				<span class="mm-menu__link-text"><i class="fa fa-inbox"></i> About</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="contact.html">
				<span class="mm-menu__link-text"><i class="fa fa-heart"></i> Contact</span>
			  </a>
			</li>
		</ul>
	</nav><!-- /nav -->
	
	<!-- /////////////////////////////////////////Header -->
	<div class="top-header">
		<div class="container">
			<ul class="list-inline top-social">
				<li><a href="https://wa.me/qr/ZA23Q2JFZGQWC1">Whatssap</a>
					<li><a href="https://www.instagram.com/mouadmouasseif/"><i class="fa fa-instagram"></i></a></li>
					<li><a href="mouadmouassief@gmail.com"><i class="fa fa-mail-forward"></i></a>
					<li><a href="https://twitter.com/MMouasseif"><i class="fa fa-twitter"></i></a>
					</li>
					
					<li><a href="https://www.facebook.com/profile.php?id=100008504346799"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a>
					</li>
			</ul>
		</div>
	</div>
	<div class="svg-container nav-svg svg-block">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1950 150">
		  <g transform="translate(0,-902.36218)"></g>
		  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
		  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
		  <path d="M 0,150 0,0 1925,0"></path>
		</svg>
	</div>
	<header id="masthead" class="site-header" role="banner" style="background-position: 50% -120px;">
		<div class="overlay"></div>
		<div class="container">
			<div class="site-branding">
				<a href="index.html" title="KOMPLEET"><img class="site-logo" src="images/logo.png" alt="KOMPLEET"></a>
			</div><!-- .site-branding -->
		</div>
		<div class="svg-container header-svg svg-block">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1890 150">
				<g transform="translate(0,-902.36218)"></g>
				  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
				  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
				  <path d="m 1925,0 0,150 -1925,0"></path>
			</svg>
		</div>		
	</header><!-- #masthead -->
	<!-- Header -->
	
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="sub-page">
		
		<!-- //////////// -->
		<article class="box-content container" >
			<div class="svg-container single-post-svg svg-block">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1890 150">
					<g transform="translate(0,-902.36218)"></g>
					  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
					  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
					  <path d="m 1925,0 0,150 -1925,0"></path>
				</svg>
			</div>
			<div class="post">
				<h1 class="entry-title">Contact</h1>
				<!--Warning-->
				<center><?php echo $text;?></center>
				<!---->
				<div id="contact_form">
					<form name="form1" id="ff" method="post" action="">
						<div class="row">
							<div class="col-md-4">
								<label>
								<input type="text"  name="name" id="name" placeholder="Your Name" required>
								</label>
							</div>
							<div class="col-md-4">
								<label>
								<input type="email"  name="email" id="email" placeholder="Your Email" required>
								</label>
							</div>
							<div class="col-md-4">
								<label>
								<input type="text"  name="subject" id="subject" placeholder="Subject">
								</label>
							</div>
						</div>
						<label>
						<textarea name="message" id="message" placeholder="Your message" ></textarea>
						</label>
						<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
					</form>
				</div>
			</div>
			<div class="embed-container maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
			</div>
			<div class="svg-container single-post-svg single-svg-bottom svg-block">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1920 150">
				  <g transform="translate(0,-902.36218)"></g>
				  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
				  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
				  <path d="M 0,150 0,0 1925,0"></path>
				</svg>
			</div>
			
			
		</article>
	</div>
	
	<div class="svg-container footer-svg svg-block">
		
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1890 150">
			<g transform="translate(0,-902.36218)"></g>
			  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
			  <path d="m 898.41609,-33.21176 0.01,0 -0.005,-0.009 -0.005,0.009 z"></path>
			  <path d="m 1925,0 0,150 -1925,0"></path>
		</svg>
		</div>
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">  Designed by <a href="index.html">MouasseifMouad</a></span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="https://wa.me/qr/ZA23Q2JFZGQWC1">Whatssap</a>
							<li><a href="https://www.instagram.com/mouadmouasseif/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="mouadmouassief@gmail.com"><i class="fa fa-mail-forward"></i></a>
							<li><a href="https://twitter.com/MMouasseif"><i class="fa fa-twitter"></i></a>
							</li>
							
							<li><a href="https://www.facebook.com/profile.php?id=100008504346799"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Top Slider -->
    <script src="js/jquery.js"></script>
   
	<!-- Menu Js -->
	<script src="js/materialMenu.js"></script>
	<script>
	  var menu = new Menu;
	</script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>