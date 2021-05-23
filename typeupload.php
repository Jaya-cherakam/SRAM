<?php session_start();?>
<html>
<?php
include 'dbconfig.php';
$result1=mysqli_query($con,"SELECT DISTINCT vehicleModel FROM vehicleModels where vehicleType='".$_POST["vehicleType"]."' and vehicleModel!='NA' and productType='sram'")or die('error');

?>
<option>Select Model</option>
	<?php
		while($row=mysqli_fetch_array($result1)) { ?>
              <option><?php echo $row['vehicleModel'] ?></option>
              <?php }?>
	?>
</html>
