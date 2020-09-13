<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'contactus');

$user = $_POST['user'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = " insert into contactdata (user, email, subject, message)
values ('$user', '$email', '$subject', '$message') ";

mysqli_query($con, $query);
 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<title>Cakes Bakery Restaurants</title>
 	<link rel="icon" type="image/png" href="images/logo.png">

 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta charset="UTF-8" />
 	<meta name="keywords" content="Cakes Bakery"/>

 	<script>
 		addEventListener("load", function () {
 			setTimeout(hideURLbar, 0);
 		}, false);

 		function hideURLbar() {
 			window.scrollTo(0, 1);
 		}
 	</script>

 	<link rel="stylesheet" href="css/bootstrap.css">

 	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

 	<link rel="stylesheet" href="css/fontawesome-all.css">

 	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
 	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
 	    rel="stylesheet">
 	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
 	<!-- //Web-Fonts -->

 </head>

 <body>
 	<div class="mian-content">
 		<!-- header -->
 		<header>
 			<nav class="navbar navbar-expand-lg navbar-light">
 				<div class="logo text-left">
 					<h1>
 						<a class="navbar-brand" href="index.html">
 							<img src="images/logo.png" alt="" class="img-fluid">Cakes Bakery</a>
 					</h1>
 				</div>
 				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
 				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 					<span class="navbar-toggler-icon">

 					</span>
 				</button>
 				<div class="collapse navbar-collapse" id="navbarSupportedContent">
 					<ul class="navbar-nav ml-lg-auto text-lg-right text-center">
 						<li class="nav-item">
 							<a class="nav-link" href="index.html">Home
 								<span class="sr-only">(current)</span>
 							</a>
 						</li>
 						<li class="nav-item active">
 							<a class="nav-link" href="about.html">About Us</a>
 						</li>
 						<li class="nav-item dropdown">
 							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
 							    aria-haspopup="true" aria-expanded="false">
 								Dropdown
 							</a>
 							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
 								<a class="dropdown-item scroll" href="#services">Services</a>
 								<a class="dropdown-item" href="index.html" title="">New Products</a>
 								<a class="dropdown-item" href="index.html" title="">Company News</a>
 								<a class="dropdown-item scroll" href="#team" title="">Team</a>
 							</div>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="gallery.html">Gallery</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="contact.html">Contact Us</a>
 						</li>
 					</ul>
 					<!-- menu button -->
 					<div class="menu">
 						<a href="#" class="navicon"></a>
 						<div class="toggle">
 							<ul class="toggle-menu list-unstyled">
 								<li>
 									<a href="index.html">Index Page</a>
 								</li>
 								<li>
 									<a href="index.html">New Products</a>
 								</li>
 								<li>
 									<a href="gallery.html">Latest Cakes</a>
 								</li>
 								<li>
 									<a href="index.html">Order Cake</a>
 								</li>
 								<li>
 									<a href="index.html">Faqs</a>
 								</li>
 								<li>
 									<a href="contact.html">Contact Us</a>
 								</li>

 							</ul>
 						</div>
 					</div>
 					<!-- //menu button -->
 				</div>
 			</nav>
 		</header>
 		<!-- //header -->

 		<!-- banner 2 -->
 		<div class="banner2-w3ls">

 		</div>
 		<!-- //banner 2 -->
 	</div>

 	<!-- about bottom -->
 	<div class="some-another some-another-page text-center py-5">
 		<div class="container py-xl-5 py-lg-3">
 			<h1 class="text-uppsecase font-weight-bold text-dark mt-4">Thank you for getting in touch!</h1>
      <br>
 			<h4>We appreciate that you contacted us at CakesBakery. Your response make us do even better!</h4>
      <br>
      <h4 class="aboutright about-right-2">Please wait for a while one of our colleagues will get back in touch with you soon!</h4>
      <br>
      <br>
      <h5 class="text-uppsecase font-weight-bold text-dark mt-4">Visit Again <a href="index.html">CakesBakery</a> !
 				<span class="text-secondary font-weight-normal">freshly served.</span>
 			</h5>
 		</div>
 	</div>
 	<!-- //about bottom -->

 	<!-- services -->
 	<div class="serives-agile py-5 bg-light border-top" id="services">
 		<div class="container py-xl-5 py-lg-3">
 			<div class="row support-bottom text-center">
 				<div class="col-md-4 support-grid">
 					<i class="far fa-heart"></i>
 					<h5 class="text-dark text-uppercase mt-4 mb-3">Made With Love</h5>
 					<p>Make every part of cake with love and create beautiful cakes!</p>
 				</div>
 				<div class="col-md-4 support-grid my-md-0 my-4">
 					<i class="fas fa-birthday-cake"></i>
 					<h5 class="text-dark text-uppercase mt-4 mb-3">Seasonal Pastries</h5>
 					<p>We offer many seasonal pastries as per customer needs and wants.</p>
 				</div>
 				<div class="col-md-4 support-grid">
 					<i class="far fa-calendar"></i>
 					<h5 class="text-dark text-uppercase mt-4 mb-3">Event Catering</h5>
 					<p>Kitty parties, farewells, birthdays and so on we server to all.</p>
 				</div>
 			</div>
 		</div>
 	</div>
  <br>
  <br>
 	<!-- //services -->
  <br>
  <br>
 	<footer>
 			<p class="text-center" style="color: black"> &copy; 2020 Cakes Bakery. All Rights Reserved</p>
 	</footer>

 	<!-- Js files -->
 	<!-- JavaScript -->
 	<script src="js/jquery-2.2.3.min.js"></script>
 	<!-- Default-JavaScript-File -->

 	<!-- stats -->
 	<script src="js/jquery.waypoints.min.js"></script>
 	<script src="js/jquery.countup.js"></script>
 	<script>
 		$('.counter').countUp();
 	</script>
 	<!-- //stats -->

 	<!-- menu-js -->
 	<script>
 		$('.navicon').on('click', function (e) {
 			e.preventDefault();
 			$(this).toggleClass('navicon--active');
 			$('.toggle').toggleClass('toggle--active');
 		});
 	</script>
 	<!-- //menu-js -->

 	<!-- smooth scrolling -->
 	<script src="js/SmoothScroll.min.js"></script>
 	<!-- move-top -->
 	<script src="js/move-top.js"></script>
 	<!-- easing -->
 	<script src="js/easing.js"></script>
 	<!--  necessary snippets for few javascript files -->
 	<script src="js/cakes-bakery.js"></script>

 	<script src="js/bootstrap.js"></script>
 	<!-- Necessary-JavaScript-File-For-Bootstrap -->

 	<!-- //Js files -->

 </body>

 </html>
