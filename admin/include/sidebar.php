<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Donation Management
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="todays-donation.php">
											<i class="icon-tasks"></i>
											Today's Donation
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($conn,"SELECT * FROM donation where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label green pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>

<li>
								<a href="allocation.php">
									<i class="menu-icon icon-group"></i>
								Pending	Allocation of Volunteers & Distrubtion Areas
									<?php	
										 
$ret = mysqli_query($conn,"SELECT dis_area,vname FROM donation WHERE ( dis_area IS NULL AND vname IS NULL) ");
$num = mysqli_num_rows($ret);
{?><b class="label green pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
								</a>
							</li>
	<li>
								<a href="allocate_donation.php">
									<i class="menu-icon icon-group"></i>
								All Allocated Donations List
									
								</a>
							</li>						

							<!--		<li>
										<a href="pending-donation.php">
											<i class="icon-tasks"></i>
											Pending Confirmation
										<?php	
	$status='1';									 
$ret = mysqli_query($conn,"SELECT * FROM donation where orderStatus='$status'");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>  -->

									<li>
										<a href="delivered-donation.php">
											<i class="icon-inbox"></i>
											Donation Deliverd
								<?php	
	$status='3';									 
$rt = mysqli_query($conn,"SELECT * FROM donation where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
									<li>
										<a href="food-donation.php">
											<i class="icon-inbox"></i>
											Only Food Donation
								<?php	
										 
$rt = mysqli_query($conn,"SELECT Donation_name FROM donation WHERE Donation_name='food'");
$num1 = mysqli_num_rows($rt);
{?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
									

								</ul>
							</li>
							
							<li>
								<a href="manage-donaters.php">
									<i class="menu-icon icon-group"></i>
									Manage Donaters
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="donation_area.php"><i class="menu-icon icon-tasks"></i> Create Donation Areas </a></li>
                                 <li><a href="volunteer.php"><i class="menu-icon icon-tasks"></i>Volunteers List </a></li>
                                 <li><a href="manage_gallery.php"><i class="menu-icon icon-tasks"></i>Manage Gallery </a></li>
                                  <li><a href="con_list.php"><i class="menu-icon icon-tasks"></i>Donaters Contact List </a></li>
                                <li><a href="donations.php"><i class="menu-icon icon-paste"></i>Manage Donations </a></li>
                                <li><a href="money_don.php"><i class="menu-icon icon-paste"></i>Money Donations </a></li>
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
