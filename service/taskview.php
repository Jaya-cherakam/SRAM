<?php 
session_start();
if (isset($_SESSION['id'])){
  $id=$_SESSION['id'];
include'dbconfig.php';
if (isset($_REQUEST["edit"])) {
  $edit=$_REQUEST["edit"];
  $result=mysqli_query($con,"SELECT * FROM taskDetails where taskId='$edit'")or die('error');
  ?>
<!DOCTYPE html><html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Task view</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="jquery/jquery.min.js"></script>
        <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
        
        <link rel="stylesheet" href="css/style.css">
        <!---- boostrap.min link local ----->

        <script src="js/bootstrap.min.js"></script>
        <!---- Boostrap js link local ----->
        
        <link rel="icon" href="images/icon.png" type="image/x-icon" />
        <!---- Icon link local ----->
        
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!---- Font awesom link local ----->
        </head>

<style type="text/css">
body
{
  margin:0px;
  padding:0px;
  font-family: "Open Sans", arial;
  color:black;
  font-weight:300;
}


@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

.logo{
  
}
.scrollbar:hover
{

height: 90%;
width: 100%;
}

.fa-lg {
font-size: 1em;
  
}
.fa {
position: relative;
display: table-cell;
width: 55px;
height: 36px;
text-align: center;
top:12px; 
font-size:20px;

}
.main-menu:hover, nav.main-menu.expanded {
width:210px;
overflow:hidden;
background-color:#1097A1;
opacity:1;

}

.main-menu {
background:#1097A1;
position:absolute;
top:0;
bottom:0;
height:100%;
left:0;
width:50px;
overflow:hidden;
-webkit-transition:width .2s linear;
transition:width .2s linear;
-webkit-transform:translateZ(0) scale(1,1);
box-shadow: 1px 0 15px rgba(0, 0, 0, 0.07);
opacity:1;
}
.main-menu li {
position:relative;
display:;
width:95%;
margin-left:3%;
margin-right:5%;
margin-top: 5px;
list-style: none;
margin-bottom: 4px;
border-width: 2px; 
background-color:white;  
}
.main-menu li:hover{
background-color:#CEFFEB;  
}
.main-menu li>a {
position:relative;
width:220px;
display:table;
border-collapse:collapse;
border-spacing:0;
color:black;
font-size: 13px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .14s linear;
transition:all .14s linear;
font-family: 'Strait', sans-serif;
text-shadow: 1px 1px 1px  #fff;  
}
.main-menu .nav-icon {
position:relative;
display:table-cell;
width:55px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}
.main-menu .nav-text  {
   
position:relative;
display:table-cell;
vertical-align:middle;
width:200px;
color: black;
font-family: 'Titillium Web', sans-serif;
}
nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
  
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
text-transform: uppercase;
}

.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:black;
background-color:;
text-shadow: 0px 0px 0px; 
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}
#btnsearch{
  width:40%;height: 50px;margin-top: 20%;margin-right: 50%;
    display: inline-block;
    vertical-align: top;
    background-color:red;
    border-color:gray;
    border-radius: 12px;
    border: 1px solid lightgray;
}
</style>
</head>
<body style="background-color: #eee;">
<nav class="navbar-fixed-top navbar-custom" style="background-color:white;height: 70px;">
<div class="container-fluid">
<div class="navbar-header"><img src="3SRAM/sram1.jpeg" style="height:70px;width: 100%; border-radius: 40px;"></div>
<button class="navbar-header" style="float: right;border-radius: 18px;border:1px solid gray;background: #1097A1;; margin-top: 1%;color: white;" onclick="window.location.href='logout.php'"><i class="fa fa-sign-out fa-lg">Logout</i></button>
</div>
  </div>
  </nav>
    
<nav class="main-menu" style="margin-top: 5%;position: fixed;z-index: 1;">  
<div class="settings"></div>
<div class="scrollbar" id="style-1">
<ul>
<li>                                   
<a href="profile.php">
<i class="fa fa-user-circle"></i>
<span class="nav-text">Profile</span>
</a>
</li>   
   
<li>                                 
<a href="requested.php">
<i class="fa fa-asterisk fa-lg"></i>
<span class="nav-text">Customer Notification</span>
</a>
</li>   

    
<li style="background-color:#CEFFEB;">                                 
<a href="Task.php">
<i class="fa fa-calendar-o fa-lg"></i>
<span class="nav-text">Manage Tasks</span>
</a>
</li>   
  
<li>
<a href="customer register.php">
<i class="fa fa-id-badge fa-lg"></i>
<span class="nav-text">Manage Customer</span>
</a>
</li>
  
<li>
<a href="vehicle.php">
<i class="fa fa-truck fa-lg"></i>
<span class="nav-text">Manage Vehicle</span>
</a>
</li>
  
<li>
<a href="employee.php">
<i class="fa fa-id-badge fa-lg"></i>
<span class="nav-text">Manage Employee</span>
</a>
</li>
  
<li>
<a href="srequest.php">
<i class="fa fa-commenting-o"></i>
 <span class="nav-text">Quotations</span>
</a>
</li>
  
<li>
<a href="field activity.php">
<i class="fa fa-industry"></i>
<span class="nav-text">Field Activity</span>
</a>
</li>

<li>
<a href="update.php">
<i class="fa fa-refresh fa-lg"></i>
<span class="nav-text">Updates</span>
</a>
</li>
</ul>    
</nav>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  border-style: none;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

.container {
  border-radius: 5px;
  width: 50%;
  background-color:white;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  margin-left: 25%;
}
.col-75 {
  float: left;
  width: 50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
<div class="container" style="margin-top: 6%;">
  <h2 align="center" style="color: #1097A1;">View Task Details</h2>
  <form action="server.php" method="post">
     <?php while($row=mysqli_fetch_array($result)) { ?>
    <div class="row">
      <div class="col-25">
        <label for="Task">Task:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Task" name="taskid" placeholder="Task Id" value="<?php echo $row['taskId']?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Task">Title:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Title" name="title" placeholder="Title" value="<?php echo $row['taskTitle']?>">
      </div>
    </div>
    <?php $complaint=$row['complaintId'];
                 $res=mysqli_query($con,"SELECT * FROM customerComplaint where complaintId='$complaint'")or die('error');
                 while($row1=mysqli_fetch_array($res)) {
                  $customer=$row1['customerId'];
                  $vehicleid=$row1['vehicleId'];
                  $res1=mysqli_query($con,"SELECT * FROM customerTable where customerId='$customer'")or die('error');
                 while($row2=mysqli_fetch_array($res1)) {
                  ?>
    <div class="row">
      <div class="col-25">
        <label for="Task">Customer Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Customer Name" name="customername" value="<?php echo $row2['name']?>" placeholder="Customer Name">
      </div>
    </div>
  <?php }
  $res3=mysqli_query($con,"SELECT * FROM vehicleDetails where vehicleId='$vehicleid'")or die('error');
                 while($row3=mysqli_fetch_array($res3)) {
  ?>
    <div class="row">
      <div class="col-25">
        <label for="Phone">Vehicle Id:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Vehicle Id" name="vehicleid" placeholder="Vehicle Id" value="<?php echo $row3['vehicleId']?>">
      </div>
    </div>
    <?php 
            $type=$row3['vehicleTypeId'];
            $res4=mysqli_query($con,"SELECT * FROM vehicleModels where vehicleTypeId='$type'")or die('error');
                 while($row4=mysqli_fetch_array($res4)) {?>
    <div class="row">
      <div class="col-25">
        <label for="Aadhaar">Vehicle Type:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Vehicle Type" name="vehicletype" placeholder="Vehicle Type" value="<?php echo $row4['vehicleType']?>">
      </div>
    </div>
  <?php  }}}
  $emp=$row['assignedTo'];
  $res5=mysqli_query($con,"SELECT * FROM employeeTable where empId='$emp'")or die('error');?>
    <div class="row">
      <div class="col-25">
        <label for="Email">Service Boy Id:</label>
      </div>
      <?php while($row5=mysqli_fetch_array($res5)) {?>
      <div class="col-75">
        <input type="text" id="Service Boy Id" name="serviceboyid" value="<?php echo $row5['empId'].'-'.$row5['name']?>" placeholder="Service Boy Id">
      </div>
      <?php }?>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="Email">Assign By:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Assign By" name="assignby" placeholder="Assign By" value="<?php echo $id?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Phone">Assign Date:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Assign Date" name="assigndate" placeholder="Assign Date" value="<?php echo $row['assignedtime']?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="city">Status:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Task Status" name="status" placeholder="Task Status" value="<?php echo $row['status']?>">
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="city">Task Status:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Task Status" name="taskstatus" placeholder="Task Status" value="<?php echo $row['taskStatus'].'%'.' '.'completed'?>">
        </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="Current Address">Target Time:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Target Time" name="targettime" placeholder="Target Time" value="<?php echo $row['targetTime']?>">
      </div>
    </div>
    <?php 
    if($row['status']=='pending'){
    $assigned=strtotime($row['assignedtime']);
    $target=strtotime($row['targetTime']);
    $diff = abs($target - $assigned);
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  
    $days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24)); 
    $hours = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24) / (60*60));  
    $minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24  - $hours*60*60)/ 60); 
    $seconds = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24  - $hours*60*60 - $minutes*60));
    ?>
    <div class="row">
      <div class="col-25">
        <label for="Permanant Address">Time Left:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Time Left" name="timeleft" placeholder="Time Left" value="<?php echo $days.'days,'.$hours.':'.$minutes.':'.$seconds?>">
      </div>
    </div> 
  <?php }?>
    <div class="row">
      <div class="col-25">
        <label for="User Name">UpdatedOn:</label>
      </div>
      <div class="col-75">
        <input type="text" id="UpdatedOn" name="updatedon" placeholder="UpdatedOn" value="<?php echo $row['modifiedDate']?>">
      </div>
    </div> 
  <?php }?>
    </form></div>
</body>
</html>
<?php }}else{
header('location:login.php');
}?>