<?php
session_start();
error_reporting(0);
include('includes/config.php');


if(isset($_POST['submit'])) 
{
	
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	$dname=$_POST['dname'];
	$type=$_POST['type'];
	$food_qun=$_POST['food_qun'];
	$food_hr=$_POST['food_hr'];
	$location=$_POST['location'];
	$special_note=$_POST['special_note'];


$query=mysqli_query($conn,"insert into donation(userId,Donation_name,Food_type,Food_Quntity,Food_Hr,Location,Special_note) values('".$_SESSION['id']."','$dname','$type','$food_qun','$food_hr','$location','$special_note')");

if($query)
{
	echo "<script>alert('You are successfully register');</script>";
	header('location:message.php');
}


else{
echo "<script>alert('Not register something went worng');</script>";
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
			<li class="breadcrumb-item active" aria-current="page">Donation Page</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- login -->
	<div class="login-contect py-5">
		<div class="container py-xl-5 py-3">
			<div class="login-body">
				<div class="login p-4 mx-auto">
					<h5 class="text-center mb-4">Donate Now</h5>
					<form  method="post" name="register" >
						<div class="form-group">
							<label>Donation Name</label>
							<select class="form-control" name="dname" id="dname"  required="" >

								<option value="food">Food Donation</option>
								<option value="clothes">Clothes Donation</option>
								<option value="footware">Footware Donation</option>
								<option value="vessel">Vessel Donation</option>
								<option value="other">Other Donation</option>
							</select>
							
						</div>

						<div class="form-group">
							<div id="dname">
							  
							  <label for="non-veg" class="option-label" style="margin:5px;">
							    <input type="radio" name="type" id="non-veg" value="Non-veg" style="transform: scale(1.5);"> Non-Veg Food </label>
							  
							  <label for="veg" class="option-label" style="margin:5px;">
							    <input type="radio" name="type" id="veg" 
							value="Veg" style="transform: scale(1.5);"> Veg Food </label>

							 <label for="veg" class="option-label" style="margin:5px;">
							    <input type="radio" name="type" id="both" 
							value="both" style="transform: scale(1.5);"> Both Food </label>

							</div>
						</div> 
						<div class="form-group">
							<div id="dname">
							<label for="food_qun" >Approx Food</label>
							<input type="text" class="form-control" id="food_qun" name="food_qun"   placeholder="Quntity in KG or GRM">
						</div>
						</div>

						<div class="form-group">
							<div id="dname">
							<label for="food_hr" >How's old food is ?</label>
							<input type="text" class="form-control" id="food_hr" name="food_hr"   placeholder="Preparing Time( Today, 12hour or 24hour old)" >
						</div>
						</div>

						<div class="form-group">
							<label>Donation collection Address</label>
							<textarea type="address" class="form-control" name="location" placeholder="Enter Address" required=""></textarea>
						</div>

						<div class="form-group">
							<label>Special Note</label>
							<textarea type="address" class="form-control" name="special_note" placeholder="Sepecial note for Donation" required=""></textarea>
						</div>
						
						
						
						
						
						<button type="submit" class="btn submit mb-4" name="submit" id="submit">Donate Happiness</button>
						<p class="text-center">
							<a href="#" class="text-da">By clicking Register, I agree to your Donation terms.</a>
						</p>
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

<script type="text/javascript">
	jQuery(function($) {

  jQuery("select#dname").change(function() {
    var arr_val = ["clothes","footware","other","vessel"];
    if (jQuery.inArray(jQuery(this).val(), arr_val) !== -1) {
       jQuery("label[for='non-veg'], label[for='veg'], label[for='food_qun'], input[id='food_qun'], label[for='food_hr'], input[id='food_hr']").hide();
    } else {
       jQuery("label[for='non-veg'], label[for='veg'], label[for='food_qun'], input[id='food_qun'], label[for='food_hr'],  input[id='food_hr']").show();
    }
  });

});
</script>