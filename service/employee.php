<?php 
session_start();
if(isset($_SESSION['id'])){?>
<!DOCTYPE html><html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Employee</title>
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
  width:50%;height: 40px;margin-top: 20%;
    display: inline-block;
    vertical-align: top;
    background-color:#1097A1;
    border-radius: 12px;
    border: 1px solid lightgray;
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
<body style="background-color: #eee;">
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

<div class="container-fluid" style="height:0px;">
  <button  style="width:10%;height: 40px;margin-right: 50%;
    display: inline-block;
    background-color:white;
    border-radius: 20px;
    color: #1097A1;
    font-size: 16px;
    margin-top: 3%;
    margin-left: 15%;
    border: 1px solid lightgray;" onclick="window.location.href='employee.php'">New Register</button>
    <button class="span" onclick="window.location.href='employee list.php'" style="color: black;">List</button>
    </div> 

    <body>
    <div class="container" style="margin-top: 2%;width: 900px;"><br>
        <div class="container-fluid1">
        <header>
        <h2>Employee Registration</h2>
        </header>
            <div class="row" style="margin-left: 12%;">
                <div class="col-md-4">
                    <form role="form" action="server.php" method="post">
                        <fieldset>                          
                            <div class="form-group">
                                <label for="name">Name:</label>  
                                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Name" required="required">
                            </div>

                            <div class="form-group">
                                 <label for="name">Phone:</label> 
                           
                                <input type="text" name="phone" id="Phone" class="form-control input-lg" maxlength="10" placeholder="Phone" required="required">
                            </div>

                            <div class="form-group">
                                <label for="name">City:</label> 
                                <input type="City" name="city" id="City" class="form-control input-lg" placeholder="City" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">Adhaar:</label>     
                                <input type="text" name="adhaar" id="Adhaar" class="form-control input-lg" maxlength="12" placeholder="Adhaar" required="required">
                            </div>
                             <div class="form-group">
                                <label for="name">Employee Id:</label>     
                                <input type="text" name="empId" id="Employee Id" class="form-control input-lg" placeholder="Employee Id" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">Email:</label>     
                                <input type="text" name="email" id="Email" class="form-control input-lg" placeholder="Email" required="required">
                            </div>
                         <div class="radio-btn">
                        <p>User Account Status</p>
                            <p>
                                <input type="radio" id="Active" value="Active" name="active">
                                <label for="Active">Active</label>
                            
                                <input type="radio" id="In Active" value="In Active" name="active">
                                <label for="In Active">In Active</label>
                            </p>
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
                                
                            <div class="form-group">
                                <label for="name">Current Address:</label>     
                                <input type="text" name="currentAddress" id="Current Address" class="form-control input-lg" placeholder="Current Address" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">Permanent Address:</label>     
                                
                                <input type="text" name="permanentAddress" id="Permanant Address" class="form-control input-lg" placeholder="Permanent Address" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">User Name:</label>     
                                
                                <input type="text" name="username" id="User Name" class="form-control input-lg" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">Password:</label>     
                                <input type="text" name="password" id="Password" class="form-control input-lg" placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">Designation:</label>     
                                <input type="text" name="designation" id="Designation" class="form-control input-lg" placeholder="Designation" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">Joining Date:</label>     
                                <input type="date" name="joiningDate" id="Joining Date" class="form-control input-lg" placeholder="joining Date" required="required">
                            </div>

                             <div class="radio-btn">
                            <p>Select User Type</p>
                            <p>
                                <input type="radio" id="Employee" value="Employee" name="role">
                                <label for="Active">Employee</label>
                            
                                <input type="radio" id="Director" value="Director" name="role">
                                <label for="In Active">Director</label>
                                
                                <input type="radio" id="Manager" value="Manager" name="role">
                                <label for="In Active">Manager</label>
                            
                            </p>
                        </div>
                   


                            <div class="row">
                            <div class="col-sm-12 text-center">
                            <button type="submit" name="employee_reg" id="btnsearch" class="btn-primary btn-md center-block" >Submit</button>
                            </div>
                        </div>
                                 
                        </fieldset>
                </form> 
                </div>
            </div>
        </div>
       </div>
</body>
</html>
<?php }else{
header('location:login.php');
}?>