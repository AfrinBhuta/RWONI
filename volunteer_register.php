<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['mobile'];
$address=$_POST['address'];
$password=md5($_POST['password']);
$query=mysqli_query($conn,"insert into volunteer(name,email,contactno,address,password) values('$name','$email','$contactno','$address','$password')");
if($query)
{
	echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
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
	<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
   <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</head>

<body>
	<!-- header -->
	<?php include'header.php'; ?>

	<!-- banner -->
	<div class="main-banner-2">

	</div>
	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Volunteer Register Page</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Register Now</h5>
					<form  role="form" method="post" name="register" onSubmit="return valid();" autocomplete="off">
						<div class="form-group">
							<label>User Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter your username" required="">
						</div>
						<div class="form-group">
							<label>Email ID</label>
							<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()" placeholder="Enter your Email Id" required=""><span id="user-availability-status1" style="font-size:12px;"></span>
						</div>
						
						<div class="form-group">
							<label>Mobile No</label>
							<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" maxlength="10" required="">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address Details"  required="">
						</div>
						<div class="form-group">
							<label class="mb-2">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password"
								required="">
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Confirm Password"
								required="">
						</div>
						<button type="submit" class="btn submit mb-4" name="submit" id="submit">Register</button>
						<p class="text-center">
							<a href="#" class="text-da">By clicking Register, I agree to your Donation terms.</a>
						</p>
					</form>
					
				</div>
			</div>
		</div>
		<p class="text-center">
							<a href="volunteer_login.php" class="text-da">Login to your Account to help Us.</a>
						</p>
	</div>

	<!-- //login -->

	<!-- footer -->
	<?php include'footer.php'; ?>
	<!-- //copyright -->

</body>

</html>