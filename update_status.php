<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['vol_login'])==0)
  { 
header('location:index.php');
}
else{
$sid=intval($_GET['sid']);
if(isset($_POST['submit2'])){
$status=$_POST['status'];
//space char


$sql=mysqli_query($conn,"update donation set orderStatus='$status',dis_date=NOW() where id='$sid'");
echo "<script>alert('Staus updated sucessfully...');</script>";
//}
}

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Donation Details</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Donation Tracking Details !</b></div></td>
      
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>Donation Id:</b></td>
      <td  class="fontkink"><?php echo $sid;?></td>
    </tr>
    <?php 
$ret = mysqli_query($conn,"SELECT * FROM donation WHERE id='$sid'");
$num=mysqli_num_rows($ret);
if($num>0)
{
while($row=mysqli_fetch_array($ret))
      {
     ?>
		
    <tr height="20">
      <td  class="fontkink1"><b>Donation Name :</b></td>
      <td  class="fontkink"><?php echo $row['Donation_name'];?></td>
    </tr>
    
      <tr height="20">
      <td class="fontkink1" ><b>Donation Recived At Date:</b></td>
      <td  class="fontkink"><?php echo $row['orderDate'];?></td>
    
     <tr height="20">
      <td  class="fontkink1"><b>Donation Collection Address :</b></td>
      <td  class="fontkink"><?php echo $row['Location'];?></td>
    </tr>

   
    <tr>
      <td colspan="2"><hr /></td>
    </tr>
   <?php } }
else{
   ?>
   <tr>
   <td colspan="2">Order Not Process Yet</td>
   </tr>
   <?php  }
$st='3';
   $rt = mysqli_query($conn,"SELECT * FROM donation WHERE id='$sid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>
   <tr><td colspan="3"><b>
      Successfully Distribute Donation</b></td>
   <?php } else {
 
  ?>
  <tr height="50">
      <td class="fontkink1">Donation Status: </td>
      <td  class="fontkink"><span class="fontkink1" >
        <select name="status" class="fontkink" required="required" >
          <option value="">Select Status</option>
                 
                  <option value="3">Successfully Distribute Donation</option>
        </select>
        </span></td>
    </tr>
<tr>
      <td class="fontkink">       </td>
      <td  class="fontkink"> <input type="submit" name="submit2"  value="update"   size="40" style="cursor: pointer;" /> &nbsp;&nbsp;   
      <input name="Submit2" type="submit" class="txtbox4" value="Close this Window " onClick="return f2();" style="cursor: pointer;"  /></td>
    </tr>
<?php } ?>
</table>
 </form>
</div>

</body>
</html>
<?php } ?>
 