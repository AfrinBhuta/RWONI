<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}


else{

	if(isset($_POST['submit'])) 
{

	$amount=$_POST['amount'];
	$special_note=$_POST['special_note'];


$query=mysqli_query($conn,"insert into money_donation(userId,amount,Special_note) values('".$_SESSION['id']."','$amount','$special_note')");

if($query)
{
	echo "<script>alert('Your Money Donation ssave successfully');</script>";
	header('location:message.php');
}


else{
echo "<script>alert('Not acceped something went worng');</script>";
}
}

}



// Code user Registration

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
	<!-- online ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- // -->
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

	<!-- banner -->
	<div  style="background: url(images/banImages.jpg) no-repeat center!important;background-size: cover!important;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 300px!important;
}">

	</div>
	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Money Donation Page</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Donate Money Now</h5>
					<form  method="post" name="register" action="money_donate.php">
						

						
						<div class="form-group">
							<div id="dname">
							<label for="food_qun" >Enter Amount</label>
							<input type="number" class="form-control" id="amount" name="amount"   placeholder="Enter Amount Your Want to donate">
						</div>
						</div>

						

						<div class="form-group">
							<label>Special Note</label>
							<textarea type="address" class="form-control" name="special_note" placeholder="Sepecial note for Donation" required=""></textarea>
						</div>
						
						
						
						
						
						<button type="submit" class="btn submit mb-4" name="submit" id="submit">Donate Happiness</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->

	<!-- footer -->
	<?php include'footer.php'; ?>
	<!-- //copyright -->

</body>

</html>

