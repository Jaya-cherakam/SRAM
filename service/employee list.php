<?php 
session_start();
if(isset($_SESSION['id'])){
include 'dbconfig.php';
$result=mysqli_query($con,"SELECT * FROM employeeTable where role!='admin'")or die('error');
?>
<!DOCTYPE html><html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Employee list</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#example').DataTable();
      } );
  </script>

<style type="text/css">
 body {background-color:#eee;}
.container-fluid {padding:40px;}
.container{padding:20px;}

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
.btn1{
  border: 10px;
  color: white;
  background-color:#1097A1;
  padding: 4px;
  border-radius: 4px;
  left: 80%;
  position: absolute;
}
.btn2{
  border: 10px;
  color: white;
  background-color:#DE8E3D;
  padding: 4px;
  margin-left: 6%;
  border-radius: 4px;
  position: absolute;
}
.btn3{
  border: 10px;
  position: absolute;
  color: white;
  background-color:#FC1837;
  margin-left:13%;
  padding: 4px;
  border-radius: 4px;
}
.span{
  width: 10%;
  height: 40px;
  text-align: center;
  display: inline-block;
  background-color:white;
  border-radius: 20px;
  font-size: 16px;
  margin-left: 0%;
  border: 1px solid lightgray;
}
</style>
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
  
<li>
<a href="vehicle.php">
<i class="fa fa-truck fa-lg"></i>
<span class="nav-text">Manage Vehicle</span>
</a>
</li>
  
<li style="background-color:#CEFFEB;">
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
<body>

<div class="container-fluid" style="background: white; height:0px;">
  <button  style="width:10%;height: 40px;margin-right: 50%;
    display: inline-block;
    background-color:white;
    border-radius: 20px;
    color: black;
    font-size: 16px;
    margin-top: 4%;
    margin-left: 15%;
    border: 1px solid lightgray;" onclick="window.location.href='employee.php'">New Register</button>
    <button class="span" onclick="window.location.href=''" style="color:#1097A1;">List</button>
    </div>

<div class="container">
  <div class="row" style="margin-top:5%;">
  <table id="example" class="table table-striped table-bordered" style="width:100%;">
  <thead style="background-color:#1097A1;"> 
            <tr style="color: white;">
              <!--<th>Sno</th>-->
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th style="width: 20%;">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php while($row=mysqli_fetch_array($result)) { ?>
            <tr style="background-color: white;">
              <!--<td><?php echo $row['empId']?></td>-->
                 <td><?php echo $row['mobileNumber']?></td>
                 <td><?php echo $row['email']?></td>
                 <?php $id=$row['empId'];
                 $result1=mysqli_query($con,"SELECT * FROM addressTable where userId='$id'")or die('error');
                 while($row1=mysqli_fetch_array($result1)) {?>
                   <td><?php echo $row1['currentAddress']?></td> 
                <?php }?>
                 <td>
              <a class=btn1 href="employeeview.php?edit=<?php echo $row['empId'];?>"><i class="fa fa-eye" style="font-size: 13px;height: 20px;top: 2px;right: 3px;">View</i></a>
              <a class=btn2 href="employeeupdate.php?edit=<?php echo $row['empId'];?>"><i class="fa fa-pencil-square-o" style="font-size: 13px;height: 20px;top: 2px;">Update</i></a>
              <button type="button" class="btn3" onClick="deleteme(<?php echo $row['empId']; ?>)" value="Delete"><i class="fa fa-trash-o" style="font-size: 13px;height: 20px;top: 2px;">Delete</i></button>
            </td>            
            </tr>
            <!-- Javascript function for deleting data -->
            <script language="javascript">
              function deleteme(delid)
              {
              if(confirm("Do you want to Delete permanently?")){
              window.location.href='server.php?del_id=' +delid+'';
              return true;
              }
              } 
            </script>
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