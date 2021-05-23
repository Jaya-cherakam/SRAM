<?php
session_start();
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  include 'dbconfig.php';
  $result=mysqli_query($con,"SELECT * FROM employeeTable where empId='$id'")or die("error in 1");
  $result1=mysqli_query($con,"SELECT * FROM addressTable where userId='$id' and role='admin'")or die("error in 2");
  ?>
<!DOCTYPE html><html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body style="background-color: #eee;margin-top:6%;">
<nav class="navbar-fixed-top navbar-custom" style="background-color:white;height: 70px;">
<div class="navbar-header"><img src="3SRAM/sram1.jpeg" style="height:70px;width: 100%; border-radius: 40px;"></div>
<button class="navbar-header" style="float: right;border-radius: 18px;border:1px solid gray;background: #1097A1;; margin-top: 1%;color: white;" onclick="window.location.href='logout.php'"><i class="fa fa-sign-out fa-lg">Logout</i></button>
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

    
<li>                                 
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
  background:white;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

#btnSearch
{
    height: 40px;
    display: inline-block;
    vertical-align: top;
    background-color:#1097A1;
    color:white;
    border-radius: 5px;
    margin-top: 2%;
    float: left;
    margin-left: 55%;
    border: 1px solid lightgray;
}

.container {
  width: 50%;
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 40%;
  margin-top: 6px;
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
<div class="container" style="margin-top: 10%;background-color: white;height: 450px;box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);">
  <form action="server.php" method="post">
    <?php while($row=mysqli_fetch_array($result)) { ?>
    <div class="row">
      <div class="col-lg-6">
          <img src="3SRAM/profile.png" style="width: 40%;margin-left: 30%;margin-top: 30%; border-radius: 50%;">
        </div>
      <div class="col-lg-6" style="margin-top: 5%;">
    <div class="row">
      <div class="col-25">
        <label for="User name">User Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Username" name="name" value="<?php echo $row['name']?>" placeholder="User name" readonly>
      </div></div>
  
    <div class="row">
      <div class="col-25">
        <label for="Email">Email:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Email" name="email" value="<?php echo $row['email']?>" placeholder="Email" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Phone">Phone:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Phone" name="phone" value="<?php echo $row['mobileNumber']?>" placeholder="Phone" readonly>
      </div>
    <?php }?>
    </div>
     <div class="row">
      <?php while($row1=mysqli_fetch_array($result1)) { ?>
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <div class="col-25">
        <label for="Address">Address:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Address" name="address" value="<?php echo $row1['permanentAddress']?>" placeholder="Address">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Current Address">Current Address:</label>
      </div>
      <div class="col-75">
        <input type="text" id="Current Address" name="currentAddress" value="<?php echo $row1['currentAddress']?>"placeholder="Current Address">
      </div>
    </div></div></div><br>
  <?php }?>
      <div class="row">
        <div class="col-sm-12 text-center">
        <button id="btnSearch" class="btn-md center-block" Style="width: 100px;" OnClick="btnSearch_Click" type="submit" name="profileupdate">Submit</button>
      </div>   
      </div>
  </form>
</div>
</body>
</html>
<?php }else{
header("location:login.php");
}?>