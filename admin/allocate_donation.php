
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysqli_query($conn,"delete from donation where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Donation deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Distributed Donation List</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
<?php include('include/header.php');?>

	
		<div class="container-fluid">
			<div class="row">
<?php include('include/sidebar.php');?>				
			
	
					<div class="col-md-9">		
								<h3>All Distributed Donation List</h3>
							
							
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							<div class="table-responsive">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped	 display" >
									<thead>
										<tr>
											<th>#</th>
											<th>Donater Name</th>
											<th>Email</th>
											<th>Contact no</th>
											<th>Donation Name</th>
											<th>Collection Location </th>
											<th>Special Note</th>
											<th>Order Date</th>
											<th>Distribution Area</th>
											<th>Volunteer Name</th>
											<th>Volunteer Number</th>
											<th>Donation Status</th>
											<th>Action</th>
											
										
										</tr>
									</thead>
								
<tbody>
<?php 

$query=mysqli_query($conn,"select donation.*,donater.name as username,donater.email as useremail,donater.contactno as usercontact,donation_area.donation_dis_area as darea,volunteer.name as v_name,volunteer.contactno as v_number from donation join donater on  donation.userId=donater.id join donation_area on donation.dis_area=donation_area.id join volunteer on donation.vname=volunteer.id where donation.dis_area is Not Null and donation.vname is Not Null");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['username']);?></td>
											<td><?php echo htmlentities($row['useremail']);?></td><td><?php echo htmlentities($row['usercontact']);?></td>
											<td><?php echo htmlentities($row['Donation_name']);?></td>
											<td><?php echo htmlentities($row['Location']);?></td>
											<td><?php echo htmlentities($row['Special_note']);?></td>
											<td><?php echo htmlentities($row['orderDate']);?></td>
											<td><?php echo htmlentities($row['darea']);?></td>
											<td><?php echo htmlentities($row['v_name']);?></td>
											<td><?php echo htmlentities($row['v_number']);?></td>
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
                        <?php } ?>	 </td>   
					                        <td>
												<a href="allocate_donation.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a>
											</td>
											</tr>

										<?php $cnt=$cnt+1; } ?>
										</tbody>
								</table>
							</div>
						</div>						
					</div>
						
						
					
			
		</div><!--/.container-->
	

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