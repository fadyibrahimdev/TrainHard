<!DOCTYPE html>
<html>

<head>
	<title>Make offers</title>
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
	<div class="userprofile" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<!-- nav -->
				<nav class="py-lg-4 py-3 px-xl-5 px-lg-3 px-2">
					<div id="logo">
						<h1><a class="" href="index.html"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mt-2">
						<li class="active"><a href="SystemAdminHome.html">Home</a></li>
												<li><a href="balance.html">Your Balance: 200</a></li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1">
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle toogle-2">Ahmed Hamdy <span class="fa fa-angle-down" aria-hidden="true"></span>
							</label>
							<a href="#">Ahmed Hamdy <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul>
								<li><a href="" class="drop-text">User Profile</a></li>
								<li><a href="./index.html" class="drop-text">Log out</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- //nav -->
			</div>
		</header>
		<!-- //header -->
	</div>
<section class="mt-4 ml-2">
	<div class="row col-sm-12">
		<div class="col-sm-4">
			<div class="card">
				<div class="card-body">
				  <h5 class="card-title">Standard</h5>
				  <p class="card-text">Sets 5 Reps 10 Tempo 2010 Rest 60sec Lie on a flat bench holding a barbell with your hands slightly wider than shoulder-width apart. Brace your core, then lower the bar towards your chest. Press it back up to the start. </p>
				  <div class="text-right">
					<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#myModal">
						Edit
					  </button>
										  <a href="#" class="btn btn-danger mt-2">Delete</a>

				</div>						</div>
			  </div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<div class="card-body">
				  <h5 class="card-title">Premium
				</h5>
				  <p class="card-text">Sets 5 Reps 6-10 Tempo 2110 Rest 60sec Grip rings or parallel bars with your arms straight. Keeping your chest up, bend your elbows to lower your body as far as your shoulders allow. Press back up powerfully to return to the start.</p>
				<div class="text-right">
					<a href="#" class="btn btn-primary mt-2">Edit</a>
					<a href="#" class="btn btn-danger mt-2">Delete</a>

				</div>
				</div>
			  </div>
		</div>
		<div class="col-sm-4">
			<div class="card">
				<div class="card-body">
				  <h5 class="card-title">Golden
				</h5>
				  <p class="card-text">Sets 3 Reps 12-15 Tempo 2010 Rest 60sec Lie on an incline bench holding a dumbbell in each hand by your shoulders. Press the weights up until your arms are straight, then lower them back to the start under control.

				</p>
				<div class="text-right">
					<a href="#" class="btn btn-primary mt-2">Edit</a>
					<a href="#" class="btn btn-danger mt-2">Delete</a>
				</div>						</div>
			  </div>
		</div>
	</div>
</section>

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
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="mail.html">Mail Us</a></li>
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
	<div class="modal" id="myModal">
		<div class="modal-dialog">
		  <div class="modal-content">
	  
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title">Offers</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
	  
			<!-- Modal body -->
			<div class="modal-body">
				<div>
					<form>
					<div class="form-group">
						<label >Name of offer</label>
						<input type="text" placeholder="Name of offer" class="form-control" />
					</div>
					<div class="form-group">
						<label >Description</label>
						<textarea  placeholder="Description" class="form-control" >
							</textarea>
					</div>
					<div class="form-group">
						<label >picture</label>
						<input type="file"  class="form-control" />

					</div>
					</form>
				</div>
			</div>
	  
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
	  
		  </div>
		</div>
	  </div>
	<!-- //footer -->
<script src="./js/jquery.js"></script>
<script src="./js/propper.js"></script>
<script src="./js/bootstrap.min.js"></script>


</body>

</html>