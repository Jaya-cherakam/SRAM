<?php
//session starts here
session_start();

//including database configuration
include'dbconfig.php';

//customer registration and login near sramaskquotation starts here
if (isset($_POST['customer_reg'])) {
  $username=$_POST['username'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $role="Viewer";
  //retrieving customer details where user input phone number matched
  $cus=mysqli_query($con,"SELECT * from customerTable where mobileNumber='$phone'")or die('error');
  //counting number of rows retrived
  $row1=mysqli_num_rows($cus);
  //if rows selected it works as customer login
    if($row1!=0) {
      //fetching all customer details into an array
        while ($array=mysqli_fetch_assoc($cus)) {
          //checking whether user phone number and retrived mobile are same 
          if ($phone== $array['mobileNumber']) {
            //assigning 'customer id' to 'id' where the customer number matched
            $id=$array['customerId'];
            //passing 'id' as session
            $_SESSION['id'] = $id;
            //redirecting to 'askquotationmain'
            header('location:askquotationmain.php');
          }
        }
    }
    //if no rows selected it works as customer registration
    else {
    //inserting customer details into customer table
     $insert=mysqli_query($con,"INSERT INTO customerTable(name,email,mobileNumber,role,username,password,registeredDate)values('$username','$email','$phone','$role','$username','$phone',NOW())") or die('error');
        if ($insert) {
          //on successfull insertion retrieving the customerId
         $result=mysqli_query($con,"SELECT customerId from customerTable where mobileNumber='$phone' and role='Viewer'") or die('error on line userid');
            while($row=mysqli_fetch_array($result)) {
            //assigning 'customerId' to 'userid' 
              $userid=$row['customerId'];
            }
          //inserting address into address table into using userid
         $insert1=mysqli_query($con,"INSERT INTO addressTable(userId,role,currentAddress) values('$userid','$role','$address')") or die('error on line insert1');
         //passing 'userid' as session
          $_SESSION['id'] = $userid;
          //redirecting to 'askquotationmain' page
             header('location:askquotationmain.php');
        }
        else {
          //if data is not inserted it gives an alert 'please try again later'
            echo '<script>alert("Please try again");
                  window.location.assign("askquotation.php");
                  </script>'; 
        }
    }
}


//customer registration and login near durgaaskquotation starts here
if (isset($_POST['dcustomer_reg'])) {
  $username=$_POST['username'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['village'].$_POST['mandal'].$_POST['district'];
  $role="Viewer";
  //retrieving customer details where user input phone number matched
  $cus=mysqli_query($con,"SELECT * from customerTable where mobileNumber='$phone'")or die('error');
  //counting number of rows retrived
  $row1=mysqli_num_rows($cus);
  //if rows selected it works as customer login
  if($row1!=0) {
    //fetching all customer details into an array
      while ($array=mysqli_fetch_assoc($cus)) {
        //checking whether user phone number and retrived mobile are same
         if ($phone== $array['mobileNumber']) {
          //assigning 'customer id' to 'id' where the customer number matched
            $id=$array['customerId'];
            //passing 'id' as session
            $_SESSION['id'] = $id;
            //redirecting to 'durgaaskquotationmain'
            header('location:durgaaskquotationmain.php');
        }
      }
    }
    //if no rows selected it works as customer registration
    else {
    //inserting customer details into customer table      
      $insert=mysqli_query($con,"INSERT INTO customerTable(name,email,mobileNumber,role,username,password,registeredDate)values('$username','$email','$phone','$role','$username','$phone',NOW())") or die('y error/no error');
      if ($insert) {
        //on successfull insertion retrieving the customerId
        $result=mysqli_query($con,"SELECT customerId from customerTable where mobileNumber='$phone' and role='Viewer'") or die('error on line userid');
        while($row=mysqli_fetch_array($result)) { 
          //assigning 'customerId' to 'userid'
              $userid=$row['customerId'];
        }
        //inserting address into address table into using userid
        $insert1=mysqli_query($con,"INSERT INTO addressTable(userId,role,currentAddress) values('$userid','$role','$address')") or die('error on line insert1');
        $_SESSION['id'] = $userid;
        //redirecting to 'durgaaskquotationmain' page
        header('location:durgaaskquotationmain.php');
      }
      else {
        //if data is not inserted it gives an alert 'please try again later'
        echo '<script>alert("Please try again");
               window.location.assign("durgaaskquotation.php");
               </script>'; 
      }
  }
}

//admin login starts here
if (isset($_POST['admin_login'])) {
    $username=$_POST['name'];
    $password=$_POST['password'];
    //retrieving all employee details where username and password matched
    $admin=mysqli_query($con,"SELECT * FROM employeeTable WHERE username='$username' AND password='$password'") or die("error");
    //fetching all employee details into an array
    $row=mysqli_fetch_array($admin);
    //assigning 'employee id' to 'id' where the employee username and password matched
    $id= $row['empId'];
      if($username == $row['username'] && $password == $row['password']) {
        //passing 'id' as session
         $_SESSION['id'] = $id;
         //redirecting to 'admin/request' page
         header('location:admin/request.php');
       }
      else {
        //when username and password doesn't match this session is passed
        $_SESSION['message']="Enter valid username or password";
        //redirecting to 'admin' page
        header('location:admin.php');
      }
}

//sending requests from sram askquotation start here
if (isset($_POST['askquotation'])) {
    $customerid=$_POST['customer'];
    $vehicletypeid="";
    $vehicle=$_POST['vehicle'];
    $model=$_POST['model'];
    $typeofsale=$_POST['typeofsale'];
    $status="pending";
    $productType="sram";
    //retriving all sram products from vehicleModels where vehicletype and vehiclemodel matched
    $result=mysqli_query($con,"SELECT * from vehicleModels where vehicleType='$vehicle' and vehicleModel='$model' and productType='sram'")or die('error');
      //fetching all the details into an array 
      while($row=mysqli_fetch_array($result)):
      //asigning retrieved vehicletypeid to 'vehicletypeid'
      $vehicletypeid = $row['vehicleTypeId'];
      //closing while loop
      endwhile;
    //checking if type of sale is subsidy  
    if ($typeofsale=='subsidysale') {
      //inserting customer request data as customer quotation
      $insert=mysqli_query($con,"INSERT INTO quotation(customerId,vehicleTypeId,saleType,productType,status,quotedDate) values('$customerid','$vehicletypeid','$typeofsale','$productType','$status',NOW())") or die('error connecting db');
    }
    //when type of sale is not subsidy sale 
    else {
    //passing vehicletypeid as session
    $_SESSION['vehicle'] = $vehicletypeid;
    //redirecting to 'directory' page
    header('location:directory.php');
    }
  if($insert) {
    //after successfull insertion alert given as 'Request sent'
    echo '<script>alert("Request sent");
          window.location.assign("askquotationmain.php");       
          </script>';
  }
}

//sending requests from durga ask quotation start here
if (isset($_POST['durgaaskquotation'])) {
  $customerid=$_POST['customer'];
  $vehicletypeid="";
  $vehicle=$_POST['vehicle'];
  $model=$_POST['model'];
  $typeofsale=$_POST['typeofsale'];
  $status="pending";
  $productType="durgamahalakshmi";
  //retriving all durgamahalakshmi products from vehicleModels where vehicletype and vehiclemodel matched
  $result=mysqli_query($con,"SELECT * from vehicleModels where vehicleType='$vehicle' and vehicleModel='$model' and productType='durgamahalakshmi'")or die('error');
  //fetching all the details into an array
  while($row=mysqli_fetch_array($result)):
  //asigning retrieved vehicletypeid to 'vehicletypeid'
  $vehicletypeid = $row['vehicleTypeId'];
  //closing while loop
  endwhile;
  //checking if type of sale is subsidy
      if ($typeofsale=='subsidysale'){
        //inserting customer request data as customer quotation
        $insert=mysqli_query($con,"INSERT INTO quotation(customerId,vehicleTypeId,saleType,productType,status,quotedDate) values('$customerid','$vehicletypeid','$typeofsale','$productType','$status',NOW())") or die('error connecting db');
      }
      //when type of sale is not subsidy sale
      else{
        //passing vehicletypeid as session
        $_SESSION['vehicle'] = $vehicletypeid;
        //redirecting to 'directory' page
        header('location:durgadirectsale.php');
      }
  if ($insert) {
    //after successfull insertion alert given as 'Request sent'
         echo '<script>alert("Request sent");
                window.location.assign("durgaaskquotationmain.php");       
               </script>';
  }
}

//exit from directsale page
if (isset($_POST['cancel'])) {
  //redirecting to 'askquotationmain' page
  header('location:askquotationmain.php');
}

 
//sending mails from contact page starts here
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['contactmail'])) {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    $id=123; 
  require_once 'vendor/autoload.php';
  $mail = new PHPMailer(true);
  $mail->SMTPDebug = 2;                               // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;  
  $mail->AuthType = 'NTLM';                             // Enable SMTP authentication
  $mail->Username = 'srirameswariagromachinery@gmail.com';                 // SMTP username
  $mail->Password ='sram1234';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to
  $mail->setFrom('srirameswariagromachinery@gmail.com','SRAM');
  $mail->addAddress('srirameswariagromachinery@gmail.com');     // Add a recipient
  $mail->addReplyTo('srirameswariagromachinery@gmail.com','SRAM');
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'SRAM Customer Help';
  $mail->Body    = '<div>'.$email.'</div>
  <div>'.$name.'</div><div>'.$phone.'</div><div>'.$address.'</div><div>'.$message.'</div>';
  $mail->AltBody = 'welcome to my world';
  //if mail not sent alert given as 'message could not be sent'
    if(!$mail->send()) {
       echo '<script>alert("Mail not sent");
              window.location.assign("contact.php");       
             </script>';
        echo 'Mailnotsent'.'srirameswariagromachinery@gmail.com';ErrorInfo;
    } 
    //if mail has sent alert given as 'message has been sent'
    else {
        echo '<script>alert("Mail sent sucessfully");
               window.location.assign("contact.php");       
              </script>';
    }
}     
?>

