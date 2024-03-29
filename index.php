<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

	if($user_data) {
		if($user_data['user_role'] == 'trainer') {
		  header('Location: Trainer.php');
		} else if ($user_data['user_role'] == 'trainee') {
			header('Location: TraineeHome.php');
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>oneshot killers</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
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
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<!-- nav -->
				<nav class="py-lg-4 py-3 px-xl-5 px-lg-3 px-2">
					<div id="logo">
						<h1><a class="" href="index.php"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mt-2">
						<li class="active"><a href="index.html">Home</a></li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="#about">About Us</a></li>
						<li><a href="#services">Services</a></li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1">
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle toogle-2">Classes <span class="fa fa-angle-down" aria-hidden="true"></span>
							</label>
							<a href="#">Classes <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul>
								<li><a href="#gallery" class="drop-text">Gallery</a></li>
								<li><a href="#price" class="drop-text">Pricing Plans</a></li>
								<li><a href="#features" class="drop-text">Features</a></li>
								<li><a href="#stats" class="drop-text">Statistics</a></li>
								<li><a href="#testi" class="drop-text">Testimonials</a></li>
							</ul>
						</li>
						<li><a href="#contact">Contact Us</a></li>
						<li><a href="./Login.php">Login</a></li>

					</ul>
				</nav>
				<!-- //nav -->
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="main">
			<div class="container">
				<div class="style-banner text-center">
					<h3 class="mb-2">EXCEPTIONAL LIFE FITNESS</h3>
					<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- about -->
	<div class="popular-wthree py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<h3 class="col-lg-6 tittle">Welcome to Our Gym <br>Website</h3>
				<p class="col-lg-6 mt-lg-0 mt-4">Our newly remodeled and expanded 25,000 square foot facility now offers more services, equipment, and classes than ever! Come and check out the club today! Let us be the strongest part of your day.</p>
			</div>
			<div class="row mt-5 pt-lg-5 text-center">
				<div class="col-md-4 popular-wthree-grid">
					<img src="images/1.jpg" class="img-fluid" alt="" />
					<h5 class="popular-wthree-text p-3">ELEMENTS</h5>
				</div>
				<div class="col-md-4 popular-wthree-grid my-md-0 my-sm-5 my-4">
					<img src="images/2.jpg" class="img-fluid" alt="" />
					<h5 class="popular-wthree-text p-3">BOOT CAMP</h5>
				</div>
				<div class="col-md-4 popular-wthree-grid">
					<img src="images/3.jpg" class="img-fluid" alt="" />
					<h5 class="popular-wthree-text p-3">CROSSFIT</h5>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- middle section -->
	<div class="middle text-center py-5">
		<div class="container py-xl-5 py-lg-3">
			<p class="mx-auto font-weight-bold pt-xl-4 pt-md-3">Train Here for Life Out There</p>
			<a href="#contact" style="max-width: 150px; margin: 0 auto;" class="btn button-style mt-sm-5 mt-4 mb-xl-4 mb-md-3">Contact
				Us</a>
		</div>
	</div>
	<!-- //middle section -->

	<!-- services -->
	<div class="serives-agile text-center py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-5 pb-lg-4">Our Services</h3>
			<div class="row welcome-bottom">
				<div class="col-md-4 welcome-grid">
					<span class="fa fa-picture-o"></span>
					<h4 class="my-3">Training</h4>
					<p>oneShot killers training offers all members 1 hour of free personal training per member.</p>
				</div>
				<div class="col-md-4 welcome-grid my-md-0 my-4">
					<span class="fa fa-database"></span>
					<h4 class="my-3">Functional Training Area</h4>
					<p>Functional training has become one of the trendiest most effective workouts possible.</p>
				</div>
				<div class="col-md-4 welcome-grid">
					<span class="fa fa-thumbs-up"></span>
					<h4 class="my-3">YOGA CLASSES</h4>
					<p>At Oneshot killers, we understand that life can get busy and tiring. That is why we have so many different classes available to you from sun rise to sun set</p>
				</div>
			</div>
			<div class="row welcome-bottom mb-xl-4 mt-md-5 my-md-0 my-4">
				<div class="col-md-4 welcome-grid">
					<span class="fa fa-tint"></span>
					<h4 class="my-3">Spa Restoration</h4>
					<p>At Oneshot killers offers a relaxing spa area equipped with steam, sauna, shower and beauty station. Being one of the only fitness centers in Montreal to offer a steam and sauna area</p>
				</div>
				<div class="col-md-4 welcome-grid my-md-0 my-4">
					<span class="fa fa-male"></span>
					<h4 class="my-3">Personal Training</h4>
					<p>At Oneshot killers, our personal trainers are here to help all members seeking to make the most out of their workouts. A personal trainer can help you establish a timeline for realistic goals</p>
				</div>
				<div class="col-md-4 welcome-grid">
					<span class="fa fa-question-circle"></span>
					<h4 class="my-3">Shake bar and snacks</h4>
					<p>At Oneshot killers juice bar is the PERFECT before and after gym pit stop. It is very important for us to fuel our bodies before and after physical exertion</p>
				</div>
			</div>
		</div>
	</div>
	<!-- services -->

	<!-- stats section -->
	<div class="stats text-center py-5" id="stats">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-lg-4 py-sm-3">
				<div class="col-md-3 col-6 w3layouts_stats">
					<p class="para-text-w3ls">Happy Clients</p>
					<p class="counter">3400</p>
				</div>
				<div class="col-md-3 col-6 w3layouts_stats">
					<p class="para-text-w3ls">Experience</p>
					<p class="counter">28</p>
				</div>
				<div class="col-md-3 col-6 w3layouts_stats mt-md-0 mt-4 ">
					<p class="para-text-w3ls">Success</p>
					<p class="counter ">92</p>
				</div>
				<div class="col-md-3 col-6 w3layouts_stats mt-md-0 mt-4">
					<p class="para-text-w3ls">Awards</p>
					<p class="counter ">640</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //stats section -->

	<!-- price -->
	<div class="price-sec py-5" id="price">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-5 pb-lg-4 text-center sec-hedadc">Our Pricing Plans</h3>
			<div class="inner_sec_info_agile_w3_info">
				<div class="row price-grid-main">
					<div class="col-lg-3 col-sm-6 price-info">
						<div class="prices border p-4">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$30</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Standard</h4>
								</div>
								<ul class="mt-4">
									<li>Mini - Toddler</li>
									<li class="my-3">Coffee Break</li>
									<li>Total Classes - 15</li>
									<li class="my-3">Group Lesson</li>
								</ul>
								<a href="#" class="button mt-4">Sign Up</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6  price-info price-mkres-2">
						<div class="prices border p-4 active">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$80</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Premium</h4>
								</div>
								<ul class="mt-4">
									<li>Group Lesson</li>
									<li class="my-3">Coffee Break</li>
									<li>Mini - Toddler</li>
									<li class="my-3">Total Classes - 15</li>
								</ul>
								<a href="#" class="button mt-4">Sign Up</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6  price-info price-mkres">
						<div class="prices border p-4">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$60</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Golden</h4>
								</div>
								<ul class="mt-4">
									<li>Total Classes - 15</li>
									<li class="my-3">Coffee Break</li>
									<li>Mini - Toddler</li>
									<li class="my-3">Group Lesson</li>
								</ul>
								<a href="#" class="button mt-4">Sign Up</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6  price-info price-mkres">
						<div class="prices border p-4 active">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$30</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Ultimate</h4>
								</div>
								<ul class="mt-4">
									<li>Mini - Toddler</li>
									<li class="my-3">Group Lesson</li>
									<li>Total Classes - 15</li>
									<li class="my-3">Coffee Break</li>
								</ul>
								<a href="#" class="button mt-4">Sign Up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //price -->

	<!-- features -->
	<section class="features py-5" id="features">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 about-text-grid">
					<h3 class="tittle">Some Features</h3>
					<p class="mt-1">oneShot killers training offers all members 1 hour of free personal training per member.</p>
					<ul class="my-4 list-unstyled list-head">
						<li>
							<span class="fa fa-hand-o-right mr-3" aria-hidden="true"></span>Training in 6 weeks!</li>
						<li>
							<span class="fa fa-hand-o-right mr-3"></span>Quality Pools</li>
						<li>
							<span class="fa fa-hand-o-right mr-3"></span>Pool Maintenance</li>
					</ul>
					<a href="#contact" style="max-width: 150px; margin: 0 auto;" class="btn button-style button-style-2 mt-sm-4 mt-3">Contact
						Us</a>
				</div>
				<div class="offset-lg-1 col-lg-5 abbot-right mt-lg-0 mt-sm-5 mt-4">
					<img src="images/1.jpg" class="img-fluid" alt="" />
				</div>
			</div>
		</div>
	</section>
	<!-- //features -->

	<!-- gallery -->
	<div class="posistion-relative">
		<div class="gallery py-5" id="gallery">
			<div class="container py-lg-5">
				<h3 class="tittle mb-5 pb-lg-4 text-center">Our Gallery</h3>
				<div class="news-grids pb-lg-5 text-center">
					<div class="row">
						<div class="col-md-4 gal-img">
							<a href="#1"><img src="images/1.jpg" alt="news image" class="img-fluid"></a>
						</div>
						<div class="col-md-4 gal-img my-md-0 my-4">
							<a href="#2"><img src="images/2.jpg" alt="news image" class="img-fluid"></a>
						</div>
						<div class="col-md-4 gal-img">
							<a href="#3"><img src="images/3.jpg" alt="news image" class="img-fluid"></a>
						</div>
					</div>
					<div class="row my-4">
						<div class="col-md-4 gal-img">
							<a href="#4"><img src="images/4.jpg" alt="news image" class="img-fluid"></a>
						</div>
						<div class="col-md-4 gal-img my-md-0 my-4">
							<a href="#5"><img src="images/5.jpg" alt="news image" class="img-fluid"></a>
						</div>
						<div class="col-md-4 gal-img">
							<a href="#6"><img src="images/6.jpg" alt="news image" class="img-fluid"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- popup-->
		<div id="1" class="popup-effect animate">
			<div class="popup">
				<img src="images/1.jpg" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Training</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="2" class="popup-effect animate">
			<div class="popup">
				<img src="images/2.jpg" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Functional Training Area</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="3" class="popup-effect animate">
			<div class="popup">
				<img src="images/3.jpg" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">CROSSFIT</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup3 -->
		<!-- popup-->
		<div id="4" class="popup-effect animate">
			<div class="popup">
				<img src="images/4.jpg" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">YOGA CLASSES</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="5" class="popup-effect animate">
			<div class="popup">
				<img src="images/5.jpg" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">zomba Area </p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="6" class="popup-effect animate">
			<div class="popup">
				<img src="images/6.jpg" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Personal Training/p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
	
	</div>
	<!-- //gallery -->

	<!-- testimonials -->
	<div class="testi py-5" id="testi">
		<div class="container py-xl-5 py-lg-3">
			<div class="test-text text-center py-sm-3">
				<p class="sub-tittle text-wh"><span class="fa fa-quote-left mr-2" aria-hidden="true"></span>
					Whether you’re new to working out or a fitness pro, we’re here to provide a variety of training options, guidance and friendly support
					to help you stay on track and reach your goals. Get to a healthier place today!.<span class="fa fa-quote-right ml-2" aria-hidden="true"></span></p>
				<img src="images/2.png" alt="" class="img-fluid mt-sm-5 mt-4">
				<h4 class="text-wh font-weight-bold mt-sm-3 mt-2">Nada Mohamed</h4>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<!-- contact -->
	<div class="contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center mb-5 pb-lg-4">Contact Us</h3>
			<div class="row">
				<div class="col-lg-6 contact-agileits">
					<h4 class="contact-title text-uppercase text-dark mb-sm-4 mb-3">Our Address</h4>
					<h5 class="font-weight-light text-dark">If you have any questions about the services we provide simply use the
						form below. We try and respond to all queries
						and comments within 24 hours.</h5>
					<div class="midd-contact my-sm-5 my-4 pl-4 border-left">
						<h6 class="text-dark mb-2">Address & Direction:</h6>
						<p>sed quia consequuntur magni dolores eos qui</p>
					</div>
					<p class="para-agileits">
						<i class="fa fa-map-marker pr-3"></i>Cairo,Egypt</p>
					<p class="para-agileits my-sm-3 my-2">
						<i class="fa fa-phone pr-3"></i>011 564 5972</p>
					<p class="para-agileits">
						<i class="fa fa-envelope-open pr-2"></i>
						<a href="mailto:mail@example.com">mail@example.com</a>
					</p>
				</div>
				<div class="col-lg-6 regstr-r-w3-agileits mt-lg-0 mt-5">
					<h4 class="contact-title text-uppercase text-dark mb-sm-4 mb-3">Get in Touch</h4>
					<div class="form-bg-w3ls">
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" name="Name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="Email" class="form-control" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="text" name="Subject" class="form-control" placeholder="Subject" required="">
							</div>
							<div class="form-group">
								<input type="text" name="number" class="form-control" placeholder="Phone Number" required="">
							</div>
							<div class="form-group">
								<textarea name="Message" class="form-control" placeholder="Message" required=""></textarea>
							</div>
							<button type="submit" class="button-w3layouts border btntext-uppercase">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- subscribe -->
	<div class="wthree-subscribef py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittlef-agileits">Sign up for our Newsletter</h3>
			<p class="mt-3 mb-5">Recieve our latest news straight to your inbox</p>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Email address..." required="">
				<button type="submit" class="btn">Submit</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
	<!-- //subscribe -->

	<div class="footer mt-5">
		<div class="container-fluid footer_content">
			<div class="row">
				<div class="col-sm-4">
						<h2>Subscribe <span>Newsletter</span></h2>
						<p class="subscribe_footer">By subscribing to our mailing list you will always get latest news from us.</p>
						<form action="#" method="post">
							<input type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
							<div class="clearfix"> </div>
						</form>
						
					
				</div>
				<div class="col-sm-4">
						<h2>Our <span>Links</span> </h3>
						  <ul class="links">
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Mail Us</a></li>
							</ul>
				</div>
				<div class="col-sm-4">
						<h2>Contact <span>Us</span></h2>
							<ul class="con_inner_text">
								<li><span class="fa fa-map-marker" aria-hidden="true"></span>Cairo <label> Egypt.</label></li>
								<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
								<li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
							</ul>
	
						<ul class="social_agileinfo">
							<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
			</div>
			<div class="copyright text-center mt-5">
				<p>© 2020 gym. All rights reserved</a>
				</p>
			</div>
		</div>
	</div>
</body>

</html>