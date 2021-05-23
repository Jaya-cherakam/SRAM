<?php 
session_start();
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  include 'dbconfig.php';
$result=mysqli_query($con,"SELECT * FROM fieldActivity")or die('error');
$result1=mysqli_query($con,"SELECT * FROM employeeTable where empId='$id'")or die('error');
?>
<!DOCTYPE html><html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Field Activity</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  img{
      height:20%;
      width:20%;
      margin-left: 5%;
    }
    video{
      height: 20%; 
      width:20%;
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
.zoom:hover {
  transform: scale(1.5);
}
</style>
  <script>
    var title=document.myForm.title.value;
    var location=document.myForm.location.value;
    var file=document.myForm.file.value;
    function validate() {
    if (document.myForm.title.value == "") {
        document.getElementById('titleerr').innerHTML= "Enter title of image";
        document.myForm.title.focus();
        return false;
    }else if (!/^[a-zA-Z0-9]*$/g.test(document.myForm.title.value)) {
        document.getElementById('titleerr').innerHTML="Invalid characters";
        document.myForm.title.focus();
        return false;
    }
    if (document.myForm.location.value == "") {
        document.getElementById('locationerr').innerHTML= "Enter location";
        document.myForm.location.focus();
        return false;
    }else if (!/^[a-zA-Z0-9]*$/g.test(document.myForm.location.value)) {
        document.getElementById('locationerr').innerHTML="Invalid characters";
        document.myForm.location.focus();
        return false;
    }
    if (document.myForm.file.value == "") {
        document.getElementById('fileerr').innerHTML= "no files selected...";
        document.myForm.file.focus();
        return false;
    }
    
}
    </script> 

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
  
<li style="background-color:#CEFFEB;">
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<h1 align="center" style="margin-top: 8%; color: #1097A1;">Field Activity</h1>

<div class="col-sm-12 text-center">
    <button type="submit" id="btnSearch" data-toggle="modal" data-target="#myModal" Style="width: 100px;float:right;margin-right:10%;margin-bottom:2%;color:white;background-color:#1097A1;border-style:none;height:30px;border-radius:15px;" style="background-color:blue;">Add</button>
  </div>
<!--popup box-->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog" style="margin-top: 10%;">
    <!-- Modal content-->
    <div class="modal-content" style="width: 400px;margin-left: 10%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <form  name="myForm" action="server.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
             <h3 style="background-color:white;color: #1097A1;text-align: center;">Upload files</h3>
             <?php while($row1=mysqli_fetch_array($result1)) { ?>
            <input type="hidden" name="name" value="<?php echo $row1['name']?>">
          <?php }?>
          <div class="form-group">
            <label for="Vehicle">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            <span id="titleerr" class="text-danger form-weight-bold">*</span>
          </div>
           <div class="form-group">
            <label for="model">Location</label>
            <input type="text" class="form-control" id="location" name="location">
            <span id="locationerr" class="text-danger form-weight-bold">*</span>
          </div>
          <div class="form-group">
            <label for="tos">Select Image/video</label>
            <input type="file" name="image" class="form-control" accept="image/png,image/jpg,image/jpeg,image/svg,image/x-png,video/*"/>
            <span class="text-danger form-weight-bold" id="fileerr">*</span>
          </div>
        <div class="col-sm-10">
        <div class="col-sm-5">  
        <button id="btnSearch" type="submit" class="btn btn-primary btn-md center-block" Style="width: 100px;" OnClick="btnSearch_Click" name="images">Upload</button></div>
        <div class="col-sm-5">
        <button class="btn  btn-md center-block" Style="width: 100px;background-color:#FC1837;color:white;" onclick="window.location.href='field activity.php'">Cancel</button></div></div>
         </form>
        </div>
       </div>
      </div>
    </div>
    <style>
    #btnSearch{
    display: inline-block;
    color:white;
    background-color:#1097A1;
    border-color:none;
} 
</style>  
<div class="container">
 <div class="row" style="margin-left: 10%;margin-top: 2%;">
  <table id="example" class="table table-striped table-bordered" style="width:100%;">
  <thead style="background-color:#1097A1;"> 
            <tr style="color: white;">
              <!--<th>Sno</th>-->
              <th>Title</th>
              <th>Location</th>
              <th>Image/video</th>
              <th>Uploaded By</th>
              <th>Date</th>     
           </tr>
        </thead>
        <tbody>
              <?php while($row=mysqli_fetch_array($result)) { ?>
              <tr style="background-color: white;">
              <!--<td><?php echo $row['id']?></td>-->
                 <td><?php echo $row['title']?></td>
                 <td><?php echo $row['location']?></td>
                 <?php if($row['type']=="image"){?>
                 <td><span class="img" class="zoom"><?php echo"<img src='{$row['path']}'; >";?></span></td>
                 <?php }else{ ?>
                 <td><video controls>
                    <source src="<?php echo $row['path']; ?>">
                  </video></td>
                  <?php }?>
                 <td><?php echo $row['uploadedBy']?></td>
                 <td><?php echo $row['activityDate']?></td>
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
}?>?>