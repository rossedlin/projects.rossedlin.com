<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 18/08/2017
 * Time: 16:20
 */

use \Cryslo\Core\Utils;

require('../../../vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Ross Edlin">

	<title>Ross Edlin</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/new-age.css?v=<?= Utils::getFileModifyTime(__DIR__ . '/css/new-age.css') ?>" rel="stylesheet">

	<style>
		.img-circle
		{
			border-radius: 50%;
		}

		#img-ross-edlin
		{
			-webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.4);
			-moz-box-shadow:    0px 2px 5px 0px rgba(0, 0, 0, 0.4);
			box-shadow:         0px 2px 5px 0px rgba(0, 0, 0, 0.4);
		}
	</style>

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<a class="navbar-brand" href="#page-top">Ross Edlin</a>
	<button class="navbar-toggler navbar-toggler-right"
			type="button" data-toggle="collapse"
			data-target="#navbarResponsive"
			aria-controls="navbarResponsive"
			aria-expanded="false"
			aria-label="Toggle navigation">
		Menu
		<i class="fa fa-bars"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="http://www.rossedlin.com/" target="_blank">Business Website</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.rossedlin.com/cv" target="_blank">C.V.</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://www.rossedlin.com/contact" target="_blank">Contact</a>
			</li>
		</ul>
	</div>
</nav>

<header class="masthead" style="padding: 100px 0 40px 0;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-7">
				<div class="header-content mx-auto text-center">
					<h1 class="mb-5">
						I'm <span>Ross Edlin</span>, a web developer, check out my 
						<a href="http://www.rossedlin.com/portfolio" target="_blank">portfolio here</a>
						or have a browse of my business website.
					</h1>
					<a href="http://www.rossedlin.com/" target="_blank" class="btn btn-outline btn-xl">See My Business Website</a>
				</div>
			</div>
			<div class="col-xs-12 col-lg-5 text-center">
				<div class="container">
					<img id="img-ross-edlin" class="img-responsive img-thumbnail img-circle"
						 src="img/ross-edlin-casual-500.jpg">
				</div>
			</div>
		</div>
	</div>
</header>

<?php /*
<section class="download bg-primary text-center" id="download">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<h2 class="section-heading">Discover what all the buzz is about!</h2>
				<p>Our app is available on any mobile device! Download now to get started!</p>
				<div class="badges">
					<a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
					<a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>
*/ ?>

<?php /*
<section class="features" id="features">
	<div class="container">
		<div class="section-heading text-center">
			<h2>Unlimited Features, Unlimited Fun</h2>
			<p class="text-muted">Check out what you can do with this app theme!</p>
			<hr>
		</div>
		<div class="row">
			<div class="col-lg-4 my-auto">
				<div class="device-container">
					<div class="device-mockup iphone6_plus portrait white">
						<div class="device">
							<div class="screen">
								<!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
								<img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
							</div>
							<div class="button">
								<!-- You can hook the "home button" to some JavaScript events or just remove it -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 my-auto">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-item">
								<i class="icon-screen-smartphone text-primary"></i>
								<h3>Device Mockups</h3>
								<p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-item">
								<i class="icon-camera text-primary"></i>
								<h3>Flexible Use</h3>
								<p class="text-muted">Put an image, video, animation, or anything else in the
									screen!</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-item">
								<i class="icon-present text-primary"></i>
								<h3>Free to Use</h3>
								<p class="text-muted">As always, this theme is free to download and use for any
									purpose!</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-item">
								<i class="icon-lock-open text-primary"></i>
								<h3>Open Source</h3>
								<p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
*/ ?>

<?php /*
<section class="cta">
	<div class="cta-content">
		<div class="container">
			<h2>Stop waiting.<br>Start building.</h2>
			<a href="#contact" class="btn btn-outline btn-xl">Let's Get Started!</a>
		</div>
	</div>
	<div class="overlay"></div>
</section>
*/ ?>

<section class="contact bg-primary" id="contact">
	<div class="container">
		<h2>Connect with me</h2>
		<ul class="list-inline list-social">
			<li class="list-inline-item social-facebook">
				<a href="https://www.facebook.com/rossedlin" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li class="list-inline-item social-linkedin">
				<a href="https://www.linkedin.com/in/rossedlin/" target="_blank">
					<i class="fa fa-linkedin"></i>
				</a>
			</li>
			<li class="list-inline-item social-github">
				<a href="https://github.com/rossedlin/" target="_blank">
					<i class="fa fa-github"></i>
				</a>
			</li>
		</ul>
	</div>
</section>

<footer>
	<div class="container">
		<p>&copy; 2017 - <?= date('Y') ?> All Rights Reserved | Created By <a href="http://www.rossedlin.com/" target="_blank" style="color: rgba(255, 255, 255, 0.5);">Ross Edlin</a> </p>
	</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/new-age.min.js"></script>

</body>

</html>
