<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$index = 0;
$randomColor = array(
	'blue',
	'orange',
	'green',
	'pink',
	'red',
	'purple',
	'blue'
);
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Welcome to My Website</title>

	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- CSS -->
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="index.html" class="logo d-flex align-items-center">
			<img src="<?php echo base_url();?>assets/img/logo.png" alt="">
			<span>FlexStart</span>
		</a>

		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
				<li><a class="nav-link scrollto" href="#offices">Offices</a></li>
				<li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
				<li><a class="nav-link scrollto" href="#team">Team</a></li>
				<li><a class="nav-link scrollto" href="blog.html">Blog</a></li>
				<li class="dropdown "><a href="#"><span class="nav-link scrollto">Drop Down</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="#">Drop Down 1</a></li>
						<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="#">Deep Drop Down 1</a></li>
								<li><a href="#">Deep Drop Down 2</a></li>
								<li><a href="#">Deep Drop Down 3</a></li>
								<li><a href="#">Deep Drop Down 4</a></li>
								<li><a href="#">Deep Drop Down 5</a></li>
							</ul>
						</li>
						<li><a href="#">Drop Down 2</a></li>
						<li><a href="#">Drop Down 3</a></li>
						<li><a href="#">Drop Down 4</a></li>
					</ul>
				</li>
				<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				<li><a class="getstarted scrollto" href="http://localhost/tugas-crud/index.php/admin">Admin</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

	</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
				<div data-aos="fade-up" data-aos-delay="600">
					<div class="text-center text-lg-start">
						<a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
							<span>Get Started</span>
							<i class="bi bi-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
				<img src="<?php echo base_url();?>assets/img/hero-img.png" class="img-fluid" alt="">
			</div>
		</div>
	</div>

</section><!-- End Hero -->

<!-- ======= Services Section ======= -->
<section id="offices" class="services">
	<div class="container" data-aos="fade-up">
		<header class="section-header">
			<h2>Office</h2>
			<p>Our office location</p>
		</header>

		
		<div class="row gy-4">
			<?php foreach ($office as $key => $Of) : ?>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="service-box <?php echo $randomColor[$index++] ?>">
						<i class="ri-discuss-line icon"></i>
						<h3><?php echo $Of->city?> / <?php echo $Of->country?></h3>
						<p><?php echo $Of->addressLine1?></p>
						<p>Phone: <?php echo $Of->phone?></p>
						<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		
	</div>
	

</section><!-- End Services Section -->

<!-- Js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
