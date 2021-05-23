<?php
    session_start();
    if(isset($_SESSION['id'])){
        include'dbconfig.php';
       $edit = $_SESSION['edit']=$_REQUEST['edit'];
?>
<!DOCTYPE html>
<html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Invoice</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="table.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <style type="text/css">
   .btn1{
  border: 10px;
  color: white;
  background-color:#f75757;
  padding: 4px;
  border-radius: 4px;
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
top:2px;
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
width:175px;
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
<div class="navbar-header"><img src="3SRAM/sram1.jpeg" style="height:70px;width: 100%; border-radius: 40px;"></div>
<button class="navbar-header" style="float: right;border-radius: 18px;border:1px solid gray;background: #1097A1;; margin-top: 1%;color: white;" onclick="window.location.href='logout.php'"><i class="fa fa-sign-out fa-lg">Logout</i></button>
</div>
  </nav>

<nav class="main-menu" style="margin-top: 5%;position: fixed;z-index: 1;">  
<div class="scrollbar" id="style-1">
<ul>
<li style="background-color:#CEFFEB;">                                   
<a href="request.php">
<i class="fa fa-commenting-o"></i>
<span class="nav-text">Quotation Requests</span>
</a>
</li>   
   
<li>                                 
<a href="vehicletype.php">
<i class="fa fa-calendar-o"></i>
<span class="nav-text">Sram Products</span>
</a>
</li>  

<li>                                 
<a href="durgavehicletype.php">
<i class="fa fa-calendar-o"></i> 
<span class="nav-text">Durga Mahalakshmi Products</span>
</a>
</li> 

    
<li>                                 
<a href="field.php">
<i class="fa fa-industry"></i>
<span class="nav-text">Field Activity</span>
</a>
</li>   
  
<li>
<a href="images.php">
<i class="fa fa-picture-o fa-lg"></i>
<span class="nav-text">Gallery</span>
</a>
</li>

<li>                                 
<a href="appproducts.php">
<i class="fa fa-calendar-o"></i> 
<span class="nav-text">App Products</span>
</a>
</li>
  </ul>
    </nav>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}

  select.classic {
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-repeat: no-repeat;
  width: 100%;
  height: 30px;
  background-color: white;
  border: 1px solid lightgray;
}
.span1{
  width: 20%;
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
<body>
<div class="header" id="myHeader">
  <button  style="width:20%;height: 40px;margin-right: 50%;
    display: inline-block;
    background-color:white;
    border-radius: 20px;
    font-size: 16px;
    color:black;
    margin-top: 6%;
    margin-left: 5%;
    border: 1px solid lightgray;" onclick="window.location.href='invoice.php'">Sram Products</button>
    <button class="span1" onclick="window.location.href='durgaquotationinvoice.php'" style="color:#1097A1;">Durga Mahalakshmi Products</button>
  </div>

<img src="3SRAM/durgainvoice.jpeg" style="width: 88.4%;margin-left: 5.8%;margin-top: 3%; border-radius: 0px;">

<div class="container" style="background-color: white;">
  <div class="row clearfix">
    <div class="col-md-12">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr>
            <th class="text-center"> sno </th>
            <th class="text-center"> Description </th>
            <th class="text-center"> Qty </th>
            <th class="text-center"> Full Cost </th>
            <th class="text-center"> Subsidy </th>
            <th class="text-center"> Net Farmer Amount </th>
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>1</td>
            <td>
          <div class="col-sm-6">
            <div class="row">
            <div class="col-xs-4">
            <label class="firstname">Vehicle Type:</label> 
          </div>
        <?php
         include'dbconfig.php';
         $result=mysqli_query($con,"SELECT DISTINCT vehicleType FROM vehicleModels where vehicleType!='' and productType='sram'") or die('error');
        ?>
      <div class="col-xs-8">
      <select class="classic" id="type" name="type" onchange="getmodel(this.value);">
      <option selected="selected" value="0">Select type</option>
      <?php 
          while($row=mysqli_fetch_array($result)) { ?>
          <option value="<?php echo $row['vehicleType'] ?>"><?php echo $row['vehicleType'] ?></option>
          <?php }?>
          <form action="server.php" method="post" enctype="multipart/form-data" name="" onsubmit="return validate()">
          </select>
          <span class="text-danger form-weight-bold" id="type_error">*</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
            <div class="col-xs-4">
              <label class="firstname">Model:</label> </div>
            <div class="col-xs-8">
              <select class="classic" id="model" name="model">
              <option selected="selected" value="0">Select Model</option></select>
              <span class="text-danger form-weight-bold" id="model_error">*</span>
            </select>
           </div>
           </div>
         </div>

              </td>
            <td><input type="number" name='qty[]' placeholder='Enter Qty' class="form-control qty" step="0" min="0"/></td>
            <td><input type="number" name='price[]' placeholder='Enter Unit Price' class="form-control price" step="0.00" min="0"/></td>
            <td><input type="number" name='discount[]' placeholder='Enter Price' class="form-control discount" step="0.00" min="0"/></td>
            <td><input type="number" name='total[]' placeholder='0.00' class="form-control total" readonly/></td>
          </tr>
          <tr id='addr1'> </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12">
      <button id="add_row" class="btn btn-default pull-left">Add Row</button>
      <button id='delete_row' class="pull-right btn btn-default">Delete Row</button>
    </div>
  </div>
 
  <div class="row clearfix">
    <div class="col-md-offset-4 col-md-8">
      <table class="table table-bordered table-hover" id="tab_logic">
      <tbody>
       
          <tr id='addr1'> </tr>
          <tr id='addr100'>
            <td class="text-center" colspan='3' >Grand Total</td>
            <td class="text-center"><input type="number" name='price_total[]' id="price_total" placeholder='0.00' class="form-control" readonly/></td>
            <td class="text-center"><input type="number" name='discount_total' id="discount_total" placeholder='0.00' class="form-control" readonly/></td>
            <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly/></td>
              
          </tr>
        </tbody>
      </table>
      <p style="float: right;background-color: white; margin-right: 15%;margin-top: 3%;color:blue;">For Sri Rameswari Agro Machinery<br><br>
      <span style="float: right;color: blue;margin-top: 5%;">Manager/Director</span></p>
      <div class="pull-left col-md-7" style="margin-top: 10%;">
      <table class="table table-bordered table-hover">
      <tbody>
      <button id='delete_row' class="pull-right btn btn-primary" type="submit" name="invoicemail">Submit</button>
      </tbody>
      </table>
    </div>    

    </div>
  </div>
 </div>
</body>
</html>
<?php }else{
header('location:../admin.php');} ?>
