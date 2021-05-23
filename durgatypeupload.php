<?php session_start();
if(isset($_SESSION['id'])){ ?>
<html>
<?php
include 'dbconfig.php';
$result1=mysqli_query($con,"SELECT DISTINCT vehicleModel FROM vehicleModels where vehicleType='".$_POST["vehicleType"]."' and vehicleModel!='NA' and productType='durgamahalakshmi'")or die('error');

?>
<option selected="selected" id="model" value="0">Select Model</option>
	<?php
		while($row=mysqli_fetch_array($result1)) { ?>
              <option><?php echo $row['vehicleModel'] ?></option>
              <?php }?>
	?>
	<span class="text-danger form-weight-bold" id="type_error">*</span>
</html>
<?php } else{
header('location:../admin.php'); }?>