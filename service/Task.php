<?php 
session_start();
if(isset($_SESSION['id'])){
include'dbconfig.php';
$result=mysqli_query($con,"SELECT * FROM taskDetails where status='pending'")or die('error');

?>
<!DOCTYPE html><html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Task Pending</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#example').DataTable();
      } );
    </script>
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
background-color:#1097A1;;
opacity:1;

}

.main-menu {
background:#1097A1;;
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

<style>
  .box {
    float: left;
    width: 10%;
    font-size: 21px;
    margin-left:20%;
    background-color: white;
    text-align: center;
    font-family: times new roman;
    margin-top: 10%;
    border:1px solid gray;
    border-radius: 15px;
    margin-bottom: 2%;
  }
</style>

<button class="box" onclick="window.location.href='Task.php'" style="color: #1097A1;">Pending</button>
<button class="box"  onclick="window.location.href='taskcompleted.php'" style="color: black;">Completed</button>
<button class="box" onclick="window.location.href='verified.php'" style="color: black;">Verified</button>

<div class="container">
    <div class="row" style="margin-left: 10%;">
     <table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead style="background-color:#1097A1;"> 
            <tr style="color: white;">
              <!--<th>Taskid</th>-->
                <th>Title</th>
                <th>Serviceboy id</th>
                <th>Customer</th>
                <th>Vehicle No</th>
                <th>Vehicle Type</th>
                <th style="width: 20%;">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php while($row=mysqli_fetch_array($result)) { ?>
                <tr style="background-color: white;">
                <!--<td><?php echo $row['taskId']?></td>-->
                 <td><?php echo $row['taskTitle']?></td>
                 <td><?php echo $row['assignedTo']?></td>
                 <?php $complaint=$row['complaintId'];
                 $res=mysqli_query($con,"SELECT * FROM customerComplaint where complaintId='$complaint'")or die('error');
                 while($row1=mysqli_fetch_array($res)) {
                  $customer=$row1['customerId'];
                  $vehicleid=$row1['vehicleId'];
                  $res1=mysqli_query($con,"SELECT * FROM customerTable where customerId='$customer'")or die('error');
                 while($row2=mysqli_fetch_array($res1)) {
                 ?>
                 <td><?php echo $row2['name']?></td>
               <?php }
               $res3=mysqli_query($con,"SELECT * FROM vehicleDetails where vehicleId='$vehicleid'")or die('error');
                 while($row3=mysqli_fetch_array($res3)) {?>
                  <td><?php echo $row3['vehicleId']?></td>
            <?php 
            $type=$row3['vehicleTypeId'];
            $res4=mysqli_query($con,"SELECT * FROM vehicleModels where vehicleTypeId='$type'")or die('error');
                 while($row4=mysqli_fetch_array($res4)) {?>
                  <td><?php echo $row4['vehicleType']?></td>
            <?php  }}}
               ?>
                                  
                <td>
              <div class="row">
            <div class="col-sm-12 text-center">
              <a class="btn btn-primary btn-md center-block" style="width: 65px;background: #1097A1;border-style: none;position: absolute;" href="taskview.php?edit=<?php echo $row['taskId'];?>"><i class="fa fa-eye" style="font-size: 13px;height: 20px;top: 2px;right: 3px;">View</i></a>
              <a class="btn btn-primary btn-md center-block" style="width: 65px;background: #DE8E3D;border-style: none;margin-right: 0%;" href="modifytask.php?edit=<?php echo $row['taskId'];?>"><i class="fa fa-pencil-square-o" style="font-size: 13px;height: 20px;top: 2px;right: 8px;">Modify</i></a>
             </div></div>  
            </td> 
            </tr> 
          <?php }?>
          </tbody>
      </table>
    </div>
    </div>      
</div>
</body>
</html>
<?php }else{
header('location:login.php');
}?>