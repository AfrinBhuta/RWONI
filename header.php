<header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 border-bottom">
			<div class="container">
				<div class="row middle-flex">
					<div class="col-xl-4 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-6 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-map-marker mr-2"></span>Key Coder
								</p>
							</div>
							<div class="col-xl-6 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-phone mr-2"></span>+012345678
								</p>
							</div>
							<div class="col-xl-6"></div>
						</div>
					</div>
					<div class="col-xl-8 col-md-6 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
						<div class="row middle-flex">
							<div class="col-lg-4 col-8 top-w3layouts p-md-0 text-right">
								<!-- login -->
								<a href="money_donate.php" class="btn login-button-2 text-uppercase text-wh">
									<span class="fa fa-sign-in mr-2"></span>Money Donation</a>
								<!-- //login -->
							</div>
							<div class="col-lg-4 col-3 top-w3layouts p-md-0 text-right">
								<!-- login -->
								<a href="login.php" class="btn login-button-2 text-uppercase text-wh">
									<span class="fa fa-sign-in mr-2"></span>Login</a>
								<!-- //login -->
							</div>
							<div class="col-lg-4 col-8 social-grid-w3">
								<!-- social icons -->
								<ul class="top-right-info">
									<li>
										<p>Follow Us:</p>
									</li>
									<li class="facebook-w3">
										<a href="#facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="twitter-w3">
										<a href="#twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li class="twitter-w3">
										<a href="#twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top py-1">
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a id="logo" class="logo" href="index.php">
						<img src="images/logo1.png" alt="" class="img-fluid" height="70" width="70"> Reduce Food Wastage
					</a>
				</h1>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_web-dealingsls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="donate.php">Donate</a></li>
							<li>
								<!-- First Tier Drop Down -->
								<label for="drop-3" class="toggle toogle-2">Activity <span class="fa fa-angle-down"
										aria-hidden="true"></span>
								</label>
								<a href="#pages">Activity <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-3" />
								<ul>
									<li><a class="drop-text" href="volunteer_login.php">Become Volunteer</a></li>
									<li><a class="drop-text" href="gallery.php">Gallery</a></li>
									
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
							<li>
								<!-- First Tier Drop Down -->
								<?php if(strlen($_SESSION['login']))
    {   ?>
								<label for="drop-3" class="toggle toogle-2"> <?php echo htmlentities($_SESSION['username']);?> <span class="fa fa-angle-down"
										aria-hidden="true"></span>
								</label>
								<a href="#pages"> <span class="fa fa-user mr-2"></span> <?php echo htmlentities($_SESSION['username']);?> <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-3" />
								<ul>
									<li><a class="drop-text" href="my-account.php">My Account</a></li>
									<li><a class="drop-text" href="donation_history.php">Donation History</a></li>
									<li><a class="drop-text" href="logout.php">Log Out</a></li>
									
									
								</ul>
								<?php } ?>
							</li>
							<li>
								<!-- First Tier Drop Down -->
								<?php if(strlen($_SESSION['vol_login']))
    {   ?>
								<label for="drop-3" class="toggle toogle-2"> <?php echo htmlentities($_SESSION['username']);?> <span class="fa fa-angle-down"
										aria-hidden="true"></span>
								</label>
								<a href="#pages"> <span class="fa fa-user mr-2"></span> <?php echo htmlentities($_SESSION['username']);?> <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-3" />
								<ul>
									<li><a class="drop-text" href="vol_account.php">Account</a></li>
									<li><a class="drop-text" href="donation_vol.php">Donation Dis / Collection History</a></li>
									<li><a class="drop-text" href="vol_logout.php">Log Out</a></li>
									
									
								</ul>
								<?php } ?>
							</li>

						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div>