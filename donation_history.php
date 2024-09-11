<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

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
	<!-- //navigation -->
	<!-- //header 2 -->

	<!-- banner -->
	<div class="main-banner-2">

	</div>
	<!-- //banner -->
	<!-- page details -->
	
	<!-- //page details -->

	<!-- contact -->
	
	<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
				<h3 class="w3ls-title mb-3">Thank <span>You !</span></h3>
				<p class="titile-para-text mx-auto">Thanks For Your Support</p>
			</div>
			<div class="row">
				<div class="col-lg-12 pr-xl-5 mt-xl-2 mt-lg-0">
					<h3 class="title-sub mb-4"><center>“Thank You for Your Donation”.</center></h3>
					<table class="table table-bordered">
			<thead>
				<tr>
					<th class="cart-romove item">#</th>
					
					<th class="cart-product-name item">Donation Name</th>
			
					<th class="cart-qty item">Donation Pickup Location</th>
					<th class="cart-sub-total item">Special Note</th>
					<th class="cart-description item">Donation Date</th>
					<th class="cart-total last-item">Status</th>
				</tr>
			</thead><!-- /thead -->
			
			<tbody>

<?php $query=mysqli_query($conn,"select * from donation  where userId='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
				<tr>
					<td><?php echo $cnt;?></td>
					<td class="cart-product-sub-total"><?php echo $row['Donation_name']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['Location']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['Special_note']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['orderDate']; ?>  </td>
					
					<td >
						<?php if($row['orderStatus'] == 1) { ?>
                          <span style="color: green;">Donation is Confirmation In Process.</span>
                        <?php } 
                        
                         if($row['orderStatus'] == 2) { ?>
                          <span style="color: orange;">Volunteer & Area Allocated.</span>
                          <?php } 
                         if($row['orderStatus'] == 3) { ?>
                          <span style="color: blue;">Distribute Donation Successfully.</span>
                      <?php }
                        if($row['orderStatus'] == 0) { ?>
                          <span style="color: red;">Not Yet Confirm.</span>
                        <?php } ?>
                        
                      </td>



				</tr>
<?php $cnt=$cnt+1;} ?>
				
			</tbody><!-- /tbody -->
		</table><!-- /table -->
									</div>
				
			</div>
		</div>
	</section>
	<!-- contact -->
	

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
<?php } ?>