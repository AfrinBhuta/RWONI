<?php
include('include/config.php');
if(!empty($_POST["vol_id"])) 
{
 $id=intval($_POST['vol_id']);
$query=mysqli_query($conn,"SELECT * FROM volunteerarea WHERE areaid=$id");
?>
<option value="">Select Voluntee</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['volunteerid']); ?></option>
  <?php
 }
}
?>