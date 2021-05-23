<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sri Rameswari Agro Machinery</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">
    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container-fluid">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-4 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <img src="images/sram1.jpeg" style="height: 100%; border-radius: 40px;">
                    </div>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-8 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <?php
                            if(isset($_SESSION['id'])){?>
                        <li class="dropdown submenu">
                          <a href="askquotationmain.php"style="color: orange;" class="dropdown-toggle" data-toggle="dropdown">Ask Quotation</a>
                          <ul class="dropdown-menu">
                                <li><a href="askquotationmain.php">SRAM products</a></li>
                                <li><a href="durgaaskquotationmain.php">DurgaMahalakshmi Products</a></li>
                            </ul>
                          </li><?php }else{?>
                        <li class="dropdown submenu">
                        <a href="askquotation.php" class="dropdown-toggle" data-toggle="dropdown">Ask Quotation</a>    
                            <ul class="dropdown-menu">
                                <li><a href="askquotation.php">SRAM products</a></li>
                                <li><a href="durgaaskquotation.php">DurgaMahalakshmi Products</a></li>
                            </ul>
                        </li>  
                        <?php }?>   
                       <li><a href="contact.php">Contact</a></li>
                        <?php 
                            if(isset($_SESSION['id'])){?>
                        <li><a href="logout.php">logout</a></li>
                        <?php }else{?>
                        <li class="dropdown submenu">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" style="color: orange;">Login</a>    
                            <ul class="dropdown-menu">
                              <li><a href="http://71.40.116.146/sRam/service/login.php" target="_blank">Service Admin</a></li>
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="https://www.globat.com/secure/login.html#webmail" target="_blank" style=".sidenav a:hover{color:orange;">Mail</a></li>
                            </ul>
                        </li>
                        <?php }?>
                        </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- End Header_Area -->

<br><br><br><br>
  
      <div class="container">
      <div class="row">
       <div class="col-lg-6">
          <img src="images/sramlogo.png" style="width: 30%;margin-left: 30%;margin-top: 5%;">
        </div>
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
<script type="text/javascript"><
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<?php
include'dbconfig.php';
$result=mysqli_query($con,"SELECT DISTINCT vehicleType FROM vehicleModels WHERE vehicleType!='' and productType='sram'");
?>

        
      <div class="col-lg-6">
        <form action="server.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="customer" value="<?php echo  $_SESSION['id'];?>">
        <div class="form-group">
          <label for="Vehicle">Vehicle</label>
          <select class="form-control" id="type" name="vehicle" onchange="getmodel(this.value);">
          <option selected="" value="select">Select type</option>
          <?php 
          while($row=mysqli_fetch_array($result)) { ?>
          <option value="<?php echo $row['vehicleType'] ?>"><?php echo $row['vehicleType'] ?></option>
          <?php }?>
        </select>
            </div>
          <div class="form-group">
            <label for="model">model</label>
            <select class="form-control" id="model" name="model">
              <option selected="" value="select">SelectModel</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tos">type of sale</label>
            <select class="form-control" id="test-dropdown" name="typeofsale">
            <option value="select">select</option>
            <option role="button"  data-toggle="modal" value="directsale">direct sale</option>
            <option role="button" value="subsidysale" data-toggle="modal">subsidy sale</option>
            </select>
          </div>
          <button type="submit" name="askquotation" class="btn btn-default">Submit</button>
        </form></div></div></div>
  

<style>
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.all_contact_info .contact_row .send_message .contact_box button {
  color: #fefefe;
  font: 400 14px/40px "Roboto", sans-serif;
  background:#d16bc3;
  color: #222222;
  border: 0;
  border-radius: 8px;
  text-transform: uppercase;
  width: 100px;
  margin-left: 80%;
}
.all_contact_info .contact_row .send_message .contact_box button:hover, .all_contact_info .contact_row .send_message .contact_box button:focus {
  color: #f6b60b;
  background:#d16bc3;
}
/* Center the image and position the close button */

img.avatar {
  width: 50%;
  border-radius: 50%;
}


.btn-lg {
  position:absolute;
  left:0;
  right:0;
  margin-left:auto;
  margin-right:auto;
  margin-top:30px;
}


a {
  font-family: Poppins-Regular;
  font-size: 14px;
  line-height: 1.7;
  color: black;
  margin: 0px;
  }
a:hover {
  text-decoration: none;
  color: black;
}
p {
  font-family:sans-serif;
  font-size: 18px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
}
ul, li {
  margin: 0px;
  list-style-type: none;
}
textarea {
  outline: none;
  border: none;
}
textarea:focus, input:focus {
  border-color: transparent !important;
}
button {
  outline: none !important;
  border: none;
  background: transparent;
}
.txt1 {
  font-family: Poppins-Regular;
  font-size: 13px;
  line-height: 1.5;
  color: #999999;
}

.limiter {
  width: 100%;
  margin: 0 auto;
}
.container-login100 {
  width: 50%;  
  min-height: 100vh;
  padding: 5px;
    background:white;
    margin-left:200px;
} 
.wrap-login100 {
  width: 960px;
  background: #fff;
  overflow: hidden;
 display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 177px 130px 33px 95px;
}
.login100-pic {
  width: 200px;
}
.login100-pic img {
  max-width: 100%;
}
.login100-form {
  width: 390px;
  margin-top:5px;

}
.login100-form-title {
  font-family: arial;
  font-size: 26px;
  color: #333333;
  text-align: center;
  width: 100%;
  display: block;
  padding-bottom: 10px;
}
.wrap-input100 {
  position: relative;
  width: 100%;
  z-index: 1;
  margin-bottom: 20px;

}
.input100 {
  font-family: Poppins-Medium;
  font-size: 15px;
  line-height: 1.5;
  display: block;
  width: 100%;
  background: #e6e6e6;
  height: 50px;
  padding: 0 30px 0 68px;
  border: none;
}
.login100-form-btn {
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  text-transform: uppercase;
  width: 50%;
  height: 40px;
  border-radius: 25px;
  background:lightblue;
  margin-left: 20%;
  padding: 0 25px;
  }
.login100-form-btn:hover {
  background: lightblue;
}
h3{
  color: red;
  font-size: 2.25em;
  text-align: center;
  margin-top: 1em;
  margin-bottom: 1em;
}


 select.form-control {
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

</style>


      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>
      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      </div>
      <!-- End MailChimp Signup Form -->
      </div>
     
        <!-- Footer Area -->
            <footer class="footer_area">
            <div class="footer_row row" style="margin-top: 6%;">
                <div class="col-md-6 col-sm-6 footer_about">
                     <h2 style="font-size: 30px;margin-left: 20%;color: white;">SRI RAMESWARI AGRO Machinery</h2><h4 style="color: white;margin-left: 30%;font-size: 15px;">A Complete Solution For Agricultural Machinery</h2>
                
                </div>
                <div class="col-md-6 col-sm-6 footer_about">
                    <ul class="socail_icon" style="margin-left: 40%;margin-bottom: 2%;">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div></div>
               
                <div class="footer_row row"  style="margin-left: 7%;margin-bottom: 2%;">
                <div class="col-md-4 col-sm-6 footer_about">
                    <h2>Vizianagaram</h2>
                    </div>
                <div class="col-md-4 col-sm-6 footer_about quick">
                     <h2>Visakhapatnam</h2>
                    </div>
                <div class="col-md-4 col-sm-6 footer_about">
                     <h2>Srikakulam</h2>
                   </div></div></div>
                <div class="copyright_area">
                © Copyright 2019 All rights reserved.</a>
                </div>
            </footer>
            <!-- End Footer Area -->
 
    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>