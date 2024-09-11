
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$aid=intval($_GET['aid']);// product id
if(isset($_POST['allocation_submit']))
{
	$darea=$_POST['dis_area'];
	$vol_name=$_POST['vname']; 
	$status=$_POST['orderStatus'];
	

	
$sql=mysqli_query($conn,"update donation set dis_area='$darea',vname='$vol_name',orderStatus='$status' where id='$aid' ");
$_SESSION['msg']="Donation Allocate Updated Successfully !!";
header("location:allocation.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Update Pending Donation</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   	


</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Allocate Area & Volunteer Donation</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['allocation_submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid"  method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($conn,"select donation.*,donater.name as username,donater.email as useremail,donater.contactno as usercontact from donation join donater on donation.userId=donater.id where donation.id='$aid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>





<div class="control-group">
<label class="control-label" for="basicinput">Donater Name</label>
<div class="controls">
<input type="text"    name="username"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['username']);?>" class="span8 tip" readonly>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Donater Email-Id</label>
<div class="controls">
<input type="text"    name="useremail"  placeholder="Enter Product Comapny Name" value="<?php echo htmlentities($row['useremail']);?>" class="span8 tip" required readonly>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Donation Collection Location</label>
<div class="controls">
<input type="text"    name="Location"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['Location']);?>"  class="span8 tip" required readonly>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Donation Name</label>
<div class="controls">
<input type="text"    name="Donation_name"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['Donation_name']);?>" class="span8 tip" required readonly>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Special Note For Donation</label>
<div class="controls">
<textarea  name="Special_note"  placeholder="Enter Product Description" rows="2" class="span8 tip" readonly="">
<?php echo htmlentities($row['Special_note']);?>
</textarea>  
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Select Donation Distribution Area</label>
<div class="controls">
<select name="dis_area" class="span8 tip" required>
 

<?php $query=mysqli_query($conn,"select * from donation_area");
while($rw=mysqli_fetch_array($query))
{
	
	?>
<option value="<?php echo $rw['id'];?>"><?php echo $rw['donation_dis_area'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Select Volunteer</label>
<div class="controls">
<select name="vname" class="span8 tip" required>
 

<?php $query=mysqli_query($conn,"select * from volunteer");
while($rw=mysqli_fetch_array($query))
{
	
	?>
<option value="<?php echo $rw['id'];?>"><?php echo $rw['name'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Select Donation Status</label>
<div class="controls">
<select name="orderStatus" class="span8 tip"   required>
<option value="<?php echo htmlentities($row['orderStatus']);?>" ><?php if($row['orderStatus'] == 1) { ?>
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
                        <?php } ?></option> 

<option value="0">Not Yet Confirm.</option>
<option value="1">Donation is Confirmation In Process.</option>
<option value="2">Volunteer & Area Allocated.</option>
<option value="3">Distribute Donation Successfully.</option>
</select>
</div>
</div>


<?php } ?>
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="allocation_submit" class="btn">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>