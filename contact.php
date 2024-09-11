<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$message=($_POST['Message']);
$query=mysqli_query($conn,"insert into contact(name,email,phone,message) values('$name','$email','$phone','$message')");
if($query)
{
	echo "<script>alert('We will cathch you soon');</script>";
}
else{
echo "<script>alert('Something went worng');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Reuse Wastage of Needy Items</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Tasty Burger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
	

	
	<!-- //header 2 -->

	<!-- banner -->
	<div class="main-banner-2">

	</div>
	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<section class="ab-info-main py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<h3 class="w3ls-title mb-3">Contact <span>Us</span></h3>
				<p class="titile-para-text mx-auto">Contact Us if you have any query regarding our services or donation.</p>
			</div>
			<div class="row contact-agileinfo pt-lg-4">
				<!-- contact address -->
				<div class="col-md-5 address">
					<h3 class="footer-title mb-4 pb-lg-2">Our Address</h3>
					<div class="row address-info-w3ls">
						<div class="col-3 address-left">
							<img src="images/c2.png" alt="" class="img-fluid">
						</div>
						<div class="col-9 address-right mt-2">
							<h5 class="address mb-2">Address</h5>
							<p> Shri K.J. Polytechnic, Bharuch</p>
						</div>
					</div>
					<div class="row address-info-w3ls my-2">
						<div class="col-3 address-left">
							<img src="images/c3.png" alt="" class="img-fluid">
						</div>
						<div class="col-9 address-right mt-2">
							<h5 class="address mb-2">Email</h5>
							<p>
								<a href="mailto:example@email.com"> rwoni@gmail.com</a>
							</p>
						</div>
					</div>
					<div class="row address-info-w3ls">
						<div class="col-3 address-left">
							<img src="images/c1.png" alt="" class="img-fluid">
						</div>
						<div class="col-9 address-right mt-2">
							<h5 class="address mb-2">Phone</h5>
							<p>+02642 246 402</p>
						</div>
					</div>
				</div>
				<!-- //contact address -->
				<!-- contact form -->
				<div class="col-lg-7 contact-right mt-lg-0 mt-5">
					<form  method="post">
						<div class="row">
							<div class="col-lg-6 form-group pr-lg-2">
								<input type="text" class="form-control" name="Name" placeholder="Name" required="">
							</div>
							<div class="col-lg-6 form-group pl-lg-2">
								<input type="email" class="form-control" name="Email" placeholder="Email" required="">
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="Phone" placeholder="Phone" required="">
						</div>
						<div class="form-group">
							<textarea name="Message" class="form-control" placeholder="Message" required=""></textarea>
						</div>
						<button type="submit" name="submit" class="btn submit-contact-main ml-auto">Submit</button>
					</form>
				</div>
				<!-- contact form -->
			</div>
		</div>
	</section>
	<!-- contact -->
	<!-- map -->
	<section class="map">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
			allowfullscreen></iframe>
	</section>
	<!-- //map -->

	<!-- footer -->
	<?php include'footer.php'; ?>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>