<?php 
session_start();
include 'dbconfig.php';
if (isset($_POST['adminlogin'])) {
$name=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['radio'];
$admin=mysqli_query($con,"SELECT * FROM employeeTable WHERE username='$name' AND password='$password'") or die("error");
  $row=mysqli_fetch_array($admin);
  $id= $row['empId'];
  if($name == $row['username'] && $password == $row['password'] && $role==$row['role']){
    $_SESSION['id'] = $id;
    header('location:profile.php');
}
}

//delete Employee

if (isset($_GET['del_id'])) {
  $id=$_GET['del_id'];
$query=mysqli_query($con,"DELETE FROM employeeTable where empId='".$_GET['del_id']."'")or die('error');
if($query){
echo '<script>alert("Deleted permanently");
     window.location.assign("employee list.php");</script>';

}
}


//verify task

if (isset($_GET['verify_id'])) {
  $id=$_GET['verify_id'];
$query=mysqli_query($con,"UPDATE taskDetails SET status='verified' where taskId='".$_GET['verify_id']."'")or die('error');
if($query){
echo '<script>alert("Verified");
     window.location.assign("verified.php");</script>';

}
}

//vehicleDetails
if (isset($_GET['del_vehicle'])) {
  $id=$_GET['del_vehicle'];
$query=mysqli_query($con,"DELETE FROM vehicleDetails where vehicleId='".$_GET['del_vehicle']."'")or die('error');
if($query){
echo '<script>alert("Deleted permanently");
     window.location.assign("vehicle list.php");</script>';

}
}

//delete employee vehicle 
if (isset($_GET['del_empvehicle'])) {
  $id=$_GET['del_empvehicle'];
$query=mysqli_query($con,"DELETE FROM employeeVehicle where vehicleId='".$_GET['del_empvehicle']."'")or die('error');
if($query){
echo '<script>alert("Deleted permanently");
     window.location.assign("emplist.php");</script>';

}
}

//delete customer
if (isset($_GET['del_customer'])) {
  $id=$_GET['del_customer'];
$query=mysqli_query($con,"DELETE FROM customerTable where customerId='".$_GET['del_customer']."'")or die('error');
if($query){
echo '<script>alert("Deleted permanently");
     window.location.assign("customer list.php");</script>';

}
}

//Approve complaints
if (isset($_GET['edit'])) {
  $id=$_GET['edit'];
$query=mysqli_query($con,"UPDATE customerComplaint SET approveStatus='approved' where complaintId='".$_GET['edit']."'")or die('error');
if($query){
echo '<script>alert("Approved");
     window.location.assign("approved.php");</script>';

}
}
//profile update

if (isset($_POST['profileupdate'])) {
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $currentadd=$_POST['currentAddress'];
  $result=mysqli_query($con,"UPDATE employeeTable SET name='$name', email='$email',mobileNumber='$phone' where empId='$id'")or die('error');
  mysqli_query($con,"UPDATE addressTable SET currentAddress='$currentadd',permanentAddress='$address' where userId='$id'") or die('error');
  header("location:profile.php");
}

//customer Registration

if (isset($_POST['customer_reg'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $adhaar=$_POST['adhaar'];
  $phone=$_POST['phone'];
  $active=$_POST['active'];
  $city=$_POST['city'];
  $role="customer";
  $currentadd=$_POST['currentAddress'];
  $permanentadd=$_POST['permanentAddress'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $result=mysqli_query($con,"INSERT INTO customerTable(name,email,mobileNumber,role,aadhar,username,password,activeStatus,registeredDate) values('$name','$email','$phone','$role','$adhaar','$username','$password','$active',NOW())")OR die('error');
  if($result){
    $insert=mysqli_query($con,"SELECT * FROM customerTable WHERE username='$username' AND password='$password'")or die('error');
      while($row=mysqli_fetch_array($insert)) {
        $id=$row['customerId'];
      }
    $insert1=mysqli_query($con,"INSERT INTO addressTable(userId,role,city,currentAddress,permanentAddress)values('$id','$role','$city','$currentadd','$permanentadd')") or die('error');
    if ($insert1) {
      echo '<script>alert("Sucessfully registered");
     window.location.assign("customer register.php");</script>';  
    }
    }
  }
  
  //customer Update

  if (isset($_POST['customer_update'])) {
    $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $adhaar=$_POST['adhaar'];
  $phone=$_POST['phone'];
  $active=$_POST['active'];
  $city=$_POST['city'];
  $role="customer";
  $currentadd=$_POST['currentAddress'];
  $permanentadd=$_POST['permanentAddress'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $result=mysqli_query($con,"UPDATE customerTable SET name='$name',email='$email',mobileNumber='$phone',role='$role',aadhar='$adhaar',username='$username',password='$password',activeStatus='$active' WHERE customerId='$id'")OR die('error1');

    $insert1=mysqli_query($con,"UPDATE addressTable SET userId='$id',role='$role',city='$city',currentAddress='$currentadd',permanentAddress='$permanentadd' where userId='$id'") or die('error');
    if ($insert1) {
      echo '<script>alert("Updated");
     window.location.assign("customer list.php");</script>';  
    }
    }
//Employee registration

if (isset($_POST['employee_reg'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $adhaar=$_POST['adhaar'];
  $phone=$_POST['phone'];
  $active=$_POST['active'];
  $city=$_POST['city'];
  $role=$_POST['role'];
  $empid=$_POST['empId'];
  $currentadd=$_POST['currentAddress'];
  $permanentadd=$_POST['permanentAddress'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $designation=$_POST['designation'];
  $jd=$_POST['joiningDate'];
  $result=mysqli_query($con,"INSERT INTO employeeTable(empId,name,email,mobileNumber,aadhar,username,password,joiningDate,designation,role,activeStatus) values('$empid','$name','$email','$phone','$adhaar','$username','$password','$jd','$designation','$role','$active')") or die('error');
  if($result){
    $insert=mysqli_query($con,"SELECT * FROM employeeTable WHERE username='$username' AND password='$password'")or die('error in 2');
      while($row=mysqli_fetch_array($insert)) {
        $id=$row['empId'];
      }
    $insert1=mysqli_query($con,"INSERT INTO addressTable(userId,role,city,currentAddress,permanentAddress)values('$id','$role','$city','$currentadd','$permanentadd')") or die('error LAST');
    if ($insert1) {
      echo '<script>alert("Sucessfully registered");
     window.location.assign("employee.php");</script>';  
    }
    }
  }

//employee Update

  if (isset($_POST['updateemployee'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $adhaar=$_POST['adhaar'];
  $phone=$_POST['phone'];
  $active=$_POST['active'];
  $city=$_POST['city'];
  $role=$_POST['role'];
  $empid=$_POST['empId'];
  $id=$_POST['id'];
  $currentadd=$_POST['currentAddress'];
  $permanentadd=$_POST['permanentAddress'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $designation=$_POST['designation'];
  $jd=$_POST['joiningDate'];
  $result=mysqli_query($con,"UPDATE employeeTable SET empId='$empid',name='$name',email='$email',mobileNumber='$phone',aadhar='$adhaar',username='$username',password='$password',joiningDate='$jd',designation='$designation',role='$role',activeStatus='$active' where empId='$id'") or die('error');
  if($result){
    $insert=mysqli_query($con,"SELECT * FROM employeeTable WHERE username='$username' AND password='$password'")or die('error in 2');
      while($row=mysqli_fetch_array($insert)) {
        $id=$row['empId'];
      }
    $insert1=mysqli_query($con,"UPDATE addressTable SET userId='$id',role='$role',city='$city',currentAddress='$currentadd',permanentAddress='$permanentadd' where userId='$id'") or die('error');
    if ($insert1) {
      echo '<script>alert("Sucessfully Updated");
     window.location.assign("employee list.php");</script>';  
    }
    }
  }

//adding new images for gallery

if (isset($_POST['images'])) {
  $uploadedBy=$_POST['name'];
  $title=$_POST['title'];
    $location=$_POST['location'];
    $file=$_FILES['image']['type'];
    if ($file == "image/png" || "image/jpeg" || "image/svg" || "image/x-png" || "image/jpg")
    	$filetype="image";
    else if($file=="video/mp4"||"video/m4a"||"video/mov"||"video/wmv "||"video/MP4"||"video/flv"||"video/HDV")
    	$filetype="video";
    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $filepath="pictures/".$filename;
   $insert=mysqli_query($con,"INSERT INTO fieldActivity(title,location,type,path,uploadedBy,activityDate)values('$title','$location','$filetype','$filepath','$uploadedBy',NOW())") or die('error');
    if ($insert) {
      move_uploaded_file($tempname,$filepath);
       echo '<script>alert("file Uploaded");
              window.location.assign("field activity.php");
             </script>';
           }else
  {
    echo '<script>alert("try again");
     window.location.assign("field activity.php");</script>';
  }
  }

//vehicleRegistration

 if (isset($_POST['vehicle_reg'])) {
  $createdby=$_POST['id'];
  $nextservice=$_POST['nextservice'];
  $trackid=$_POST['trackid'];
  $trackpw=$_POST['trackpw'];
  $customerid=$_POST['customerid'];
  $type=$_POST['type'];
  $model=$_POST['model'];
  $regnumber=$_POST['rgnumber'];
  $purchase=$_POST['purchase'];
  $res=mysqli_query($con,"SELECT * FROM vehicleModels where vehicleType='$type' and vehicleModel='$model'") or die('error');
  while($row=mysqli_fetch_array($res)) {
    $typeid=$row['vehicleTypeId'];
    echo $typeid;
      }
  $result=mysqli_query($con,"INSERT INTO vehicleDetails(customerId,trackerId,trackerPassword,vehicleTypeId,purchaseDate,nextService,registrationNumber,createdBy,createdDate) values('$customerid','$trackid','$trackpw','$typeid','$purchase','$nextservice','$regnumber','$createdby',NOW())") or die('error');
  if($result){
      echo '<script>alert("Vehicle Registered");
     window.location.assign("vehicle.php");</script>';  
    }
  } 

//vehicle Update
  if (isset($_POST['vehicle_update'])) {
  $modifiedBy=$_POST['id'];
  $vid=$_POST['vid'];
  $vehicleid=$_POST['vehicleid'];
  $nextservice=$_POST['nextservice'];
  $trackid=$_POST['trackid'];
  $trackpw=$_POST['trackpw'];
  $customerid=$_POST['customerid'];
  $type=$_POST['type'];
  $model=$_POST['model'];
  $purchase=$_POST['purchase'];
  $res=mysqli_query($con,"SELECT * FROM vehicleModels where vehicleType='$type' and vehicleModel='$model'") or die('error');
  while($row=mysqli_fetch_array($res)) {
    $typeid=$row['vehicleTypeId'];
      }
  $result=mysqli_query($con,"UPDATE vehicleDetails SET vehicleId='$vehicleid',customerId='$customerid',trackerId='$trackid',trackerPassword='$trackpw',vehicleTypeId='$typeid',purchaseDate='$purchase',nextService='$nextservice',modifiedBy='$modifiedBy',modifiedDate=NOW() where vehicleId='$vid'") or die('error');
  if($result){
      echo '<script>alert("Vehicle updated");
     window.location.assign("vehicle.php");</script>';  
    }
  } 

//login 
  
if (isset($_POST['service_login'])) {
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $id="";
  $webcustomer=mysqli_query($con,"SELECT * FROM customerTable WHERE password='$phone'") or die("error");
  $row=mysqli_fetch_array($webcustomer);
  $id= $row['customerId'];
  if($phone == $row['mobileNumber']){
    header('location:askquotationmain.php');
}else{
  header('location:askquotation.php');
}
}

//updates

if (isset($_POST['updates'])) {
  $message=$_POST['message'];
  $role=$_POST['role'];
  $result= mysqli_query($con,"INSERT INTO updates(updateDescription,roles,updatedTime) values('$message','$role',NOW())")or die('error');
  if($result){
    echo '<script>alert("update sent");
     window.location.assign("update.php");</script>'; 
  }
}

if (isset($_POST['assigntask'])) {
  $assignby=$_POST['assignedby'];
  $cid=$_POST['cid'];
  $title=$_POST['title'];
  $assignto=$_POST['serviceboy'];
  $targettime=$_POST['targettime'];
  $instruments=$_POST['instruments'];
  $status="pending";
  $taskstatus="0";
  $result=mysqli_query($con,"INSERT INTO taskDetails(taskTitle,complaintId,assignedTo,assignedBy,assignedtime,targetTime,status,instruments,taskStatus) values('$title','$cid','$assignto','$assignby',NOW(),'$targettime','$status','$instruments','$taskstatus')")or die('error');
  if($result){
    echo '<script>alert("Task assigned");
     window.location.assign("Task.php");</script>'; 
  }
}

if (isset($_POST['empvehicle_reg'])) {
  $trackid=$_POST['trackid'];
  $trackpw=$_POST['trackpw'];
  $empid=$_POST['empid'];
  $type=$_POST['type'];
  $model=$_POST['model'];
  $regnumber=$_POST['rgnumber'];
  $result=mysqli_query($con,"INSERT INTO employeeVehicles(empId,vehicleType,vehicleModel,registrationNumber,trackingId,trackingPassword) values('$empid','$type','$model','$trackid','$trackpw','$regnumber')") or die('error');
  if($result){
      echo '<script>alert("Vehicle asssigned to employee");
     window.location.assign("empvehicle.php");</script>';  
    }
  }

  if (isset($_POST['empvehicle_update'])) {
  $vid=$_POST['vid'];
  $regnumber=$_POST['rgnumber'];
  $trackid=$_POST['trackid'];
  $trackpw=$_POST['trackpw'];
  $empid=$_POST['empid'];
  $type=$_POST['type'];
  $model=$_POST['model'];
  $result=mysqli_query($con,"UPDATE employeeVehicles SET empId='$empid',vehicleType='$type',vehicleModel='$model',registrationNumber='$regnumber',trackingId='$trackid',trackingPassword='$trackpw' where vehicleId='$vid'") or die('error');
  if($result){
      echo '<script>alert("Employee vehicle updated");
     window.location.assign("empvehicle.php");</script>';  
    }
  } 

?>