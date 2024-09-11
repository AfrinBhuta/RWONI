<?php 
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Reuse Food Wastage</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Food Donation" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- css slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- header -->
	<?php include'header.php'; ?>
	<!-- //navigation -->
	<!-- //header 2 -->

	<!-- banner -->
	<div class="baneer-w3ls">
		<div class="row no-gutters">
			<div class="col-xl-5 col-lg-6">
				<div class="banner-left-w3">
					<div class="container">
						<div class="banner-info_agile_w3ls">
							<h5>Reduse Wastage Of Needy Items</h5>
							<h3 class="text-da mb-4">Giving is not just about make a Donation,<span>it's about
making a difference.</span> </h3>
							<p>If you can't feed hundred people,then just feed one.</p>
							<a href="about.php" class="button-w3ls active mt-5">Read More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
							<a href="donate.php" class="button-w3ls mt-5 ml-2">Donate Now
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 callbacks_container">
				<!-- banner slider -->
				<div class="csslider infinity" id="slider1">
					<input type="radio" name="slides" checked="checked" id="slides_1" />
					<input type="radio" name="slides" id="slides_2" />
					<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
						<li>
							<div class="banner-top1"></div>
						</li>
						<li>
							<div class="banner-top2"></div>
						</li>
						<li>
							<div class="banner-top3"></div>
						</li>
					</ul>
					<div class="arrows">
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
					<div class="navigation">
						<div>
							<label for="slides_1"></label>
							<label for="slides_2"></label>
							<label for="slides_3"></label>
						</div>
					</div>
				</div>
				<!-- //banner slider -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- about -->
	<div class="about-bottom">
		<div class="row no-gutters">
			<div class="col-lg-5 col-md-6 about">

			</div>
			<div class="col-lg-7 col-md-6 about-right-w3 text-right py-md-5">
				<div class="right-space py-xl-5 py-lg-3">
					<div class="title-section mb-4">
						<p class="w3ls-title-sub">About Us</p>
						<h3 class="w3ls-title">Welcome to <span> Reduce Food Wastage</span></h3>
					</div>
					<p class="about-text">This system reduce the food wastage and use in a useful way. Also this system is provide a platform to donor where they can donates there other things like old clothes, vessels, foot wares, toys etc we collect all donation and redistributes to poor peoples.</p>
					<a href="about.php" class="button-w3ls mt-5">Read More
						<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- specials -->
	<section class="blog_w3ls py-5">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<p class="w3ls-title-sub">Reduce Food Wastage</p>
				<h3 class="w3ls-title">Our <span>Special</span> Services</h3>
			</div>
			<div class="row">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="menu.php">
								<img class="card-img-bottom" src="images/clothes.jpg" alt="Card image cap" height="250">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="menu.php">Clothes Donation</a></h5>
							<p class="mt-3">Be a cause of someone's happiness. Donate your old clothes to needy people.</p>
							<a href="about.php" class="btn button-w3ls mt-4 mb-3">View More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="menu.php">
								<img class="card-img-bottom" src="images/bartan-list.jpg" alt="Card image cap" height="250">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="menu.php">Vessel Donation</a></h5>
							<p class="mt-3">Donate your old vessel to needy people so they can use them.</p>
							<a href="about.php" class="button-w3ls active mt-4 mb-3">View More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="card border-0 med-blog">
						<div class="card-header p-0">
							<a href="menu.php">
								<img class="card-img-bottom" src="images/footware.jpg" alt="Card image cap" height="250">
							</a>
						</div>
						<div class="card-body border border-top-0">
							<h5 class="blog-title card-title m-0"><a href="menu.php">Footwear Donation</a></h5>
							<p class="mt-3">Donate used or new pair footware to change someones's
							lives. </p>
							<a href="about.php" class="button-w3ls mt-4 mb-3">View More
								<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //specials -->

	<!-- two grids -->
	<section class="offer pt-lg-3">
		<div class="row no-gutters">
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3"><a href="menu.php">Best Way to Helps Others</a></h4>
						<p class="text-li" style="color: black!important;">Join Us and become part of this good work</p>
						<a href="donate.php" class="button-w3ls active mt-5">Donate Now
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="blog-sec-w3 blog-sec-w3-2">
					<div class="text-blog-w3 text-center p-2">
						<h4 class="text-wh mb-3"><a href="menu.php">Become A Volunteer Today</a></h4>
						<p class="text-li" style="color: black!important;">One of the greatest gifts you can give is your time.</p>
						<a href="volunteer_login.php" class="button-w3ls active mt-5">Become Volunteer
							<span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //two grids -->

	<!-- services -->
	<section class="middle py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<p class="w3ls-title-sub">Our Work</p>
				<h3 class="w3ls-title mb-3">Donation <span>Services</span></h3>
			</div>
			<div class="row grids-w3 py-xl-5 py-lg-4 pt-lg-0 pt-4">
				<div class="col-lg-5 w3pvt-lauits_banner_bottom_left">
					<div class="row">
						<div class="col-8 wthree_banner_bottom_grid_right text-right">
							<h4 class="mb-3"><a href="login.php">Money Donation</a></h4>
							<p>Donate money to give happiness to a needed peoples.</p>
						</div>
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
							<img src="images/rupee.png" alt="" class="img-fluid" >
						</div>
					</div>
				</div>
				<div class="col-lg-2 w3pvt-lauits_banner_bottom_left">

				</div>
				<div class="col-lg-5 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
					<div class="row">
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
							<img src="images/se1.png" alt="" class="img-fluid">
						</div>
						<div class="col-8 wthree_banner_bottom_grid_right">
							<h4 class="mb-3"><a href="login.php">Clothes Donation</a></h4>
							<p>Donate old clothes to give someone's little better lives.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row grids-w3 py-xl-5 py-lg-4 mt-lg-0 mt-4">
				<div class="col-lg-4 w3pvt-lauits_banner_bottom_left">
					<div class="row">
						<div class="col-8 wthree_banner_bottom_grid_right text-right pl-lg-0">
							<h4 class="mb-3"><a href="login.php">Footware Donation</a></h4>
							<p>Donate used or new pair footware to change someones's
							lives.</p>
						</div>
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pr-lg-0">
							<img src="images/se2.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="col-lg-4 w3pvt-lauits_banner_bottom_left pr-0">

				</div>
				<div class="col-lg-4 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
					<div class="row">
						<div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pl-lg-0">
							<img src="images/ser3.png" alt="" class="img-fluid">
						</div>
						<div class="col-8 wthree_banner_bottom_grid_right pr-lg-0">
							<h4 class="mb-3"><a href="login.php">Food Donation</a></h4>
							<p>Donate you remaing food or extra food to feed needy peoples.</p>
						</div>
					</div>
				</div>
			</div>
		<br><br>
		<div class="img-blog-2">
			<img src="images/donater.png" alt="" class="img-fluid" width="50%">
		</div>
	</section>
	<!-- //services -->

	

	<!-- slides images -->
	<!--<section class="wthree-slider" id="masthead" style="margin-top: 5%;">

	</section> -->
	<!-- //slides images --> 

	

	<!-- footer -->
	<?php include'footer.php'; ?>

</body>

</html>