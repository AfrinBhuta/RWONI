
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

	$did=intval($_GET['did']);// product id
if(isset($_POST['submit']))
{
	$donation_name=$_POST['dname'];
/*	$food_type=$_POST['food_type'];
	$food_qty=$_POST['food_qty'];
	$food_hr=$_POST['food_hr']; */

	$location=$_POST['location'];
	$snote=$_POST['snote'];
	$dis_area=$_POST['dis_area'];
	$vname=$_POST['vname'];
	$status=$_POST['status'];
	
	/*'Food_type='$food_type','Food_Quntity='$food_qty',Food_Hr='$food_hr'*/
	
$sql=mysqli_query($conn,"update donation set Donation_name='$donation_name',Location='$location',Special_note='$snote',dis_area='$dis_area',vname='$vname',orderStatus='$status' where id='$did' ");
$_SESSION['msg']="Donation Updated Successfully !!";
header("location:donations.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Insert Product</title>
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
								<h3>Update Donation</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
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
									<strong>Successfully!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 


$query=mysqli_query($conn,"select donater.name as username,donater.email as useremail,donater.contactno as usercontact,donation.Donation_name as dname,donation.Location as location,donation.Special_note as snote,donation.orderDate as orderdate,donation.orderStatus as orderStatus,donation_area.donation_dis_area as dis_area,donation_area.id as aid,volunteer.name as vname,volunteer.id as vid,donation.id as id  from donation join donater on  donation.userId=donater.id
    join donation_area on donation.dis_area=donation_area.id join volunteer on donation.vname=volunteer.id  where donation.id='$did'");

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
<label class="control-label" for="basicinput">Donater Email-ID</label>
<div class="controls">
<input type="text"    name="useremail"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['useremail']);?>" class="span8 tip" readonly>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Donater Contact No.</label>
<div class="controls">
<input type="text"    name="usercontact"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['usercontact']);?>" class="span8 tip" readonly>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Donation Name</label>
<div class="controls">
<input type="text"   name="dname"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['dname']);?>" class="span8 tip" >
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Collection Location</label>
<div class="controls">
<textarea  name="location"  placeholder="Enter Location" rows="2" class="span8 tip">
<?php echo htmlentities($row['location']);?>
</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Collection Location</label>
<div class="controls">
<textarea  name="snote"  placeholder="Enter Special notice" rows="2" class="span8 tip">
<?php echo htmlentities($row['snote']);?>
</textarea>  
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Select Donation Distribution Area</label>
<div class="controls">
<select name="dis_area" class="span8 tip" required>
<option value="<?php echo htmlentities($row['aid']);?>"><?php echo htmlentities($row['dis_area']);?></option> 
<?php $query=mysqli_query($conn,"select * from donation_area");
while($rw=mysqli_fetch_array($query))
{
	if($row['dis_area']==$rw['donation_dis_area'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['donation_dis_area'];?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Select Volunteer</label>
<div class="controls">

<select   name="vname"  id="vname" class="span8 tip"  required>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['vname']);?> </option>
<?php $query=mysqli_query($conn,"select * from volunteer");
while($rw=mysqli_fetch_array($query))
{
	if($row['vname']==$rw['name'])
	{
		continue;
	}
	else{
	?><option value="<?php echo $rw['id'];?>"><?php echo $rw['name'];?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Select Donation Status</label>
<div class="controls">
<select name="status" class="span8 tip"   required>
<option ><?php if($row['orderStatus'] == 1) { ?>
                          <span>Collect Donation Successfully.</span>
                        <?php } 

         if($row['orderStatus'] == 2) { ?>
                          <span>Distribute Donation Successfully.</span>
                        <?php }

          if($row['orderStatus'] == 0) { ?>
                          <span>Not Yet Confirm.</span>
                        <?php } ?></option> 

<option value="0">Not Yet Confirm.</option>
<option value="1">Collect Donation Successfully.</option>
<option value="2">Distribute Donation Successfully.</option>
</select>
</div>
</div>


<?php } ?>
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
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