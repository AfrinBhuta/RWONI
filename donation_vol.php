<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['vol_login'])==0)
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
	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
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
				<p class="titile-para-text mx-auto">Thanks For Your Volunteering Support</p>
			</div>
			<div class="row">
				<div class="col-lg-12 pr-xl-5 mt-xl-2 mt-lg-0">
					<h3 class="title-sub mb-4"><center>“Thank You for become a part of RWONI”.</center></h3>
					<table class="table table-bordered">
			<thead>
				<tr>
					<th class="cart-romove item">#</th>
					
					<th>Donation Name</th>
					<th>Donater Name</th>
					<th>Donater Email-Id</th>
					<th>Donater Number</th>
					<th>Donation Pickup Location</th>
					<th>Special Note</th>
					<th>Donation Date</th>
					<th>Distribute Area Of Donation</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead><!-- /thead -->
			
			<tbody>

<?php $query=mysqli_query($conn,"select donation.*,donater.name as username,donater.email as useremail,donater.contactno as usercontact, donation_area.donation_dis_area as darea from donation inner join donater on  donation.userId=donater.id inner join  donation_area on donation.dis_area=donation_area.id where vname='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
				<tr>
					<td><?php echo $cnt;?></td>
					<td class="cart-product-sub-total"><?php echo $row['Donation_name']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['username']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['useremail']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['usercontact']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['Location']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['Special_note']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['orderDate']; ?>  </td>
					<td class="cart-product-sub-total"><?php echo $row['darea']; ?>  </td>
					
<td>
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
                      <td>
                     
                      <a href="javascript:void(0);" onClick="popUpWindow('http://localhost/xampp/FOOD_OTHER_DONATION/update_status.php?sid=<?php echo htmlentities($row['id']);?>');" title="Upadate Status"><i class="fa fa-edit"></i>Update Status</a>

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