<?php 
session_start();
if (isset($_SESSION['id'])){
  $id=$_SESSION['id'];
include'dbconfig.php';
if (isset($_REQUEST["edit"])) {
  $edit=$_REQUEST["edit"];
include'dbconfig.php';
$result=mysqli_query($con,"SELECT * FROM taskDetails where taskId='$edit'")or die('error');

?>
<!DOCTYPE html><html class="menu">
<head>
  <title>Modify</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style type="text/css">
  #btnSearch{
    display: inline-block;
    vertical-align: top;
    color:white;
    background-color:#1097A1;
    border-color:none;
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

<!--popup box-->
  <div class="modal-dialog" style="margin-top: 10%;">
    <!-- Modal content-->
    <div class="modal-content" style="width: 500px;margin-left: 10%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <form action="server.php" method="post">
           <?php while($row=mysqli_fetch_array($result)) { ?> 
          <div class="form-group">
            <label for="Vehicle">Title:</label>
            <input type="Title" class="form-control" id="Title" placeholder="" name="title" value="<?php echo $row['taskTitle']?>">
          </div>
           <div class="form-group">
            <label for="model">Serviceboy Id:</label>
            <?php $emp=$row['assignedTo'];
            $res=mysqli_query($con,"SELECT * FROM employeeTable WHERE empId='$emp'")or die('error');?>
            <select id="city" class="form-control" name="city" style="background-color: white;">
             <?php while($row1=mysqli_fetch_array($res)) {?>
             <option value="<?php echo $row1['empId'].'-'.$row1['name']?>"><?php echo $row1['empId'].$row1['name']?></option>
           <?php }?>
           </select>
          </div>
          <div class="form-group">
            <label for="tos">Target Time:</label>
            <input type="text" class="form-control" id="Target Time" placeholder="" name="Target Time" value="<?php echo $row['targetTime']?>">
            </div>
          <div class="form-group">
            <label for="tos">Take Instruments:</label>
            <input type="Take Instruments" class="form-control" id="Take Instruments" placeholder="" name="Take Instruments" value="<?php echo $row['instruments']?>">
            </div>
          <?php }?>
          <button id="btnSearch" class="btn btn-primary btn-md center-block" Style="width: 100px;" OnClick="btnSearch_Click" data-toggle="modal" data-target="#myModal" style="background-color:blue;">Submit</button>
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