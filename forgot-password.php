
<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['change']))
{
   $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=md5($_POST['password']);
$query=mysqli_query($conn,"SELECT * FROM donater WHERE email='$email' and contactno='$contact'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="forgot-password.php";
mysqli_query($conn,"update donater set password='$password' WHERE email='$email' and contactno='$contact' ");
header("location:$extra");
$_SESSION['errmsg']="Password Changed Successfully";
exit();
}
else
{
$extra="forgot-password.php";
header("location:$extra");
$_SESSION['errmsg']="Invalid email id or Contact no";
exit();
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
			<li class="breadcrumb-item active" aria-current="page">Login Page</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">FORGOT PASSWORD</h5>
					<form  method="post">
						<span style="color:red;" >
<?php
echo htmlentities($_SESSION['errmsg']);
?>
<?php
echo htmlentities($_SESSION['errmsg']="");
?>
						<div class="form-group">
							<label>Email Id <span>*</span></label>
							<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="" required="">
						</div>
						<div class="form-group">
							<label>Contact no <span>*</span></label>
							<input type="number" class="form-control" name="contact" id="exampleInputEmail1" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="mb-2">New Password <span>*</span></label>
							<input type="password" class="form-control" name="password" id="password" placeholder="" required="">
						</div>
						<div class="form-group">
							<label class="mb-2">Confirm Password <span>*</span></label>
							<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="" required="">
						</div>
						<button type="submit" class="btn submit mb-4" name="change" >Login</button>
						<p class="forgot-w3ls text-center mb-3">
							<a href="login.php" class="text-da">Log-In to Your Account</a>
						</p>
						<p class="account-w3ls text-center text-da">
							Don't have an account?
							<a href="register.php">Create one now.</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->

	<!-- footer -->
	<?php  include'footer.php'; ?>

</body>

</html>