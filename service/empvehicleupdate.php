<?php 
session_start();
if (isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if (isset($_REQUEST["edit"])) {
  $edit=$_REQUEST["edit"];
  include'dbconfig.php';
$result=mysqli_query($con,"SELECT * FROM employeeVehicles where vehicleId='$edit'")or die('error');
?>
<!DOCTYPE html><html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Employee Vehicle Update</title>
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
<style type="text/css">
  body {background-color: #eee;}
.container-fluid {padding:50px;}
.container-fluid1{background-color:white;padding:1%;}

header{
    width:100%;
    margin-left:0%;
    height: 64px;
    color: #1283A7;
    text-align: center;
}
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
  width:40%;height: 40px;margin-top: 20%;margin-right: 50%;
    display: inline-block;
    vertical-align: top;
    background-color:#1283A7;
    border-radius: 12px;
    border: 1px solid lightgray;
}
  select.form-control input-lg {
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-repeat: no-repeat;
  width: 100%;
  height: 40px;
  background-color: white;
  border: 1px solid lightgray;
}
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<script>
  function getmodel(val){
    $.ajax({
      type:"POST",
      url:"typeupload.php",
      data:'vehicleType='+val,
      success:function(data){
        $("#model").html(data);
      }
    });
  }
</script>
</head>

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
  
<li style="background-color:#CEFFEB;">
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

  <div class="container" style="margin-top: 5%;"><br>
        <div class="container-fluid1">
        <header>
        <h2>EmployeeVehicle Update</h2>
        </header>
            <div class="row" style="margin-left: 12%;">
                <div class="col-md-4">  

                  <?php while($row=mysqli_fetch_array($result)) { ?>
                    <form role="form" action="server.php" method="post">
                        <fieldset> 
                      
                        <input type="hidden" value="<?php echo$row['vehicleId']?>" name="vid">
                            <div class="form-group">
                                <label for="name">Vehicle Registration No:</label>  
                                <input type="text" name="rgnumber" value="<?php echo$row['registrationNumber']?>" id="rgnumber" class="form-control input-lg" placeholder="" >
                            </div>

                            <div class="form-group">
                                <label for="name">Tracking Id:</label> 
                                <input type="City" name="trackid" id="City" class="form-control input-lg" value="<?php echo$row['trackingId']?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="name">Tracking Password:</label>     
                                <input type="text" name="trackpw" value="<?php echo$row['trackingPassword']?>" id="Tracking password" class="form-control input-lg" placeholder="">
                            </div>
                        <div>
                            
                        </div>
                        </fieldset>
                </div>
                
                <div class="col-md-2">
                    <!-------null------>
                </div>
                
                <div class="col-md-4">
                        <fieldset>                          
                                <?php $emp=$row['empId'];?>
                                                                  
                            <div class="form-group">
                              <?php
                                $test=mysqli_query($con,"SELECT * FROM employeeTable where role!='admin'")or die('error');?>
                                  <label for="name">Employee Info:</label> 
                                  <select class="form-control input-lg" name="empid">
                                  <?php while($row1=mysqli_fetch_array($test)) { ?>     
                                    <option value="<?php echo$row1['empId']?>"<?php if(($row1['empId'])==$emp){echo "selected";}?>><?php echo $row1['empId'].'-'.$row1['name']?></option>
                              <?php }?>
                              </select>
                              </div>
                              
                              
                            <div class="form-group">
                              <label for="name">Vehicle type:</label> 
                              <select class="form-control input-lg" id="type" name="type">
                                <option selected="selected" value="select" <?php if(($row['vehicleType'])=='select'){echo "selected";}?>>Select type</option>
                              <option value="bike" <?php if(($row['vehicleType'])=='bike'){echo "selected";}?>>bike</option>
                              <option value="others" <?php if(($row['vehicleType'])=='others'){echo "selected";}?>>others</option>
                        
                             </select>
                            
                            </div>
                            <div class="form-group">
                              <label for="name">Vehicle Model:</label> 
                              <input type="text" name="model" value="<?php echo$row['vehicleModel']?>" class="form-control input-lg">
                              <?php }?>
                            </div>
                            <div class="form-group">
                            <div class="row">
                            <div class="col-sm-12 text-center">
                            <button t ype="submit" name="empvehicle_update" id="btnsearch" class="btn-primary btn-md center-block">Update</button>
                            </div>
                        </div>
                                 
                        </fieldset>
                </form> 
                </div>
            </div>
        </div>
       </div>
     <?php }?>
</body>
</html>
<?php }else{
header('location:login.php');
}?>