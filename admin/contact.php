<?php session_start();?>
<!DOCTYPE html>
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

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
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

        <div id="wrapper" class="active">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><a id="menu-toggle" href="#">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
          <ul class="sidebar-nav" id="sidebar">
            <li><a href="aboutkubota.php"><b>ABOUT KUBOTA</b></a></li>
            <li><a href="products.php"><b>PRODUCTS</a></b></li>
            <li><a href="proposal.php"><b>PROPOSAL</a></b></li>
            <li><a href="engine.php"><b>ENGINE</a></b></li>
          </ul>
        <style>
/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 10px 20px;
  text-decoration: none;
  font-size: 15px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: center;
  cursor: pointer;
  outline: none;
  border-bottom: 1px solid #1A1A1A;
  }

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 15px; /* Increased text to enable scrolling */
}

.dropdown-container {
  display: none;
  padding-left: 0px;
}
.sidenav a:hover {
  color:orange;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}


/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 15px;}
}
</style>

<div class="sidenav">
  <button class="dropdown-btn" style="font-size: 13px;"><b>DURGAMAHALAKSHMI PRODUCTS</b>
  </button>
  <div class="dropdown-container">
    <a href="https://www.aspee.com/" target="_blank"><b>ASPEE</b></a>
    <a href="https://www.maschio.com/home-hi-IN/" target="_blank"><b>MASCHIO</b></a>
    <a href="https://www.gnagro.com/" target="_blank"><b>GURUNANAK</b></a>
    <a href="https://www.redlandsmotors.com/" target="_blank"><b>REDLANDS</b></a>
  </div>
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
  
        </div>
      </div>

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
                          <a href="askquotationmain.php" class="dropdown-toggle" data-toggle="dropdown">Ask Quotation</a>
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
                        <li><a href="contact.php" style="color: orange;">Contact</a></li>
                        <?php 
                            if(isset($_SESSION['id'])){?>
                        <li><a href="logout.php">logout</a></li>
                        <?php }else{?>
                            <li class="dropdown submenu">
                        <a href="contact.html" class="dropdown-toggle" data-toggle="dropdown">Login</a>    
                            <ul class="dropdown-menu">
                                <li><a href="http://71.40.116.146/sRam/service/login.php" target="_blank">Service Admin</a></li>
                                <li><a href="admin.php">Admin</a></li>
                                <li><a href="https://www.globat.com/secure/login.html#webmail" target="_blank" style=".sidenav a:hover {color:orange;">Mail</a></li>
                            </ul>
                        </li>
                        <?php }?>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float:right;
  width: 32.33%;
  padding: 10px;
  height: 350px; /* Should be removed. Only for demonstration */
  border-left: 2px solid gray; 
            
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.form-control input_box{
    color: black;
}
</style>

</head>
<body>

    <!-- Slider area -->
    <div class="col-md-11 p0" style="margin-left: 8.3%;">
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="images/3SRAM/home1.jpeg" data-src="images/3SRAM/home1.jpeg">
                <div class="camera_caption">
                   <div class="container">
                        <h1 class=" wow fadeInUp animated">CONTACT</h1>
                        <h6 class=" wow fadeInUp animated" data-wow-delay="0.5s"></h6>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s"></p>
                        </div>
                </div>
            </div>
            <div data-thumb="images/3SRAM/home1.jpeg" data-src="images/3SRAM/home1.jpeg">
                <div class="camera_caption">
                   <div class="container">
                        <h1 class=" wow fadeInUp animated">CONTACT</h1>
                        <h6 class=" wow fadeInUp animated" data-wow-delay="0.5s"></h6>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s"></p>
                        </div>
                </div>
            </div>
        </div>
    </section></div>
    <!-- End Slider area -->
    
    <div class="container" style="color: black;font-size: 19px;text-align: center;margin-left: 10%; margin-top: 10px;"><i><b>Sri Rameswari Agricultural Machinery</b></i></div><hr>

    <section class="blog_tow_area">
        <div class="container">
           <div class="row blog_tow_row">
                <div class="col-md-4 col-s-6">
                    <div class="renovation">
                        <div class="renovation_content" style="border-color: lightgray;height: 325px;">
                        <img src="images/3SRAM/location.png" alt="images/3SRAM/location.png" width="100" height="50" style="margin-top: 5%;margin-left: 35%;">
                        <address>
                        <p style="margin-left: 15%;font-weight: bold;font-size: 17px;">Visakhapatnam</p>
                        <ul class="my_address">
                            <i class="fa fa-envelope" aria-hidden="true"></i>info@thethemspro.com<br>
                            <i class="fa fa-phone" aria-hidden="true"></i>Phone:7674999650<br>
                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>Opposite.Hotel Amaravathi,Station Road,Anakapalli,visakhapatnam Dist-531001.  </span>
                        </ul>
                        </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <div class="renovation_content" style="height: 325px;border-color: lightgray;">
                        <img src="images/3SRAM/location.png" alt="images/3SRAM/location.png" width="100" height="50" style="margin-top: 5%;margin-left: 35%;">
                    <address>
                        <p style="margin-left: 15%;font-weight: bold;font-size: 17px;">Srikakulam</p>
                        <ul class="my_address">
                            <i class="fa fa-envelope" aria-hidden="true"></i>info@thethemspro.com<br>
                            <i class="fa fa-phone" aria-hidden="true"></i>Phone:7993999949<br>
                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>Regd. Office:1-31,Pedda Veedi,Bhadri Village & Post, Via.Budithi,Srikakulam District.532427.AP</span>
                    </ul>
                    </address>    
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <div class="renovation_content" style="height: 325px;border-color: lightgray;">
                        <img src="images/3SRAM/location.png" alt="images/3SRAM/location.png" width="100" height="50" style="margin-top: 5%;margin-left: 35%;">
                    <address>
                        <p  style="margin-left: 15%;font-weight: bold;font-size: 17px;">Vizianagaram</p>
                        <ul class="my_address">
                            <i class="fa fa-envelope" aria-hidden="true"></i>info@thethemspro.com<br>
                            <i class="fa fa-phone" aria-hidden="true"></i>Phone:7674999640<br>
                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>Sri Ramanagar Colony,ICE Factory Junction,Dharamapuri Road,Near Ring Road,vizianagaram-535216.</span>
                        </ul>
                    </address>
                        </div>
                    </div>
                </div>
            </div>
        </div></section>
    <!-- All contact Info -->
    <section class="all_contact_info">
        <script type="text/javascript">
    var name= document.myForm.name.value;
  var phone=document.myForm.phone.value;
  var email=document.myForm.email.value;
  var address=document.myForm.address.value;
  var message=document.myForm.message.value;
  function validate() {
     if (document.myForm.name.value == "") {
        document.getElementById('name_error').innerHTML= "Please enter your name";
        document.myForm.name.focus();
        return false;
    }else if (!/^[a-zA-Z\s]*$/g.test(document.myForm.name.value)) {
        document.getElementById('name_error').innerHTML="Invalid format";
        document.myForm.name.focus();
        return false;
    }
    if (document.myForm.phone.value == "") {
        document.getElementById('phone_error').innerHTML= "Please enter your mobile number";
        document.myForm.phone.focus();
        return false;
    }else if (!/^[{1}6-9{9}0-9]*$/g.test(document.myForm.phone.value)) {
        document.getElementById('phone_error').innerHTML="Please enter number for phone";
        document.myForm.phone.focus();
        return false;
    }if (document.myForm.email.value == "") {
        document.getElementById('email_error').innerHTML= "Please enter your email";
        document.myForm.email.focus();
        return false;
    }
    if (document.myForm.address.value == "") {
        document.getElementById('address_error').innerHTML= "Please enter your address";
        document.myForm.address.focus();
        return false;
    }
    if (document.myForm.message.value == "") {
        document.getElementById('message_error').innerHTML= "enter your message";
        document.myForm.message.focus();
        return false;
    }
  }
</script>
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-8 contact_info send_message" style="margin-left: 5%;">
                    <h2>Send Us a Message</h2>
                    <form class="form-inline contact_box" action="server.php" method="post" name="myForm" onsubmit="return validate()">
                        <input type="text" class="form-control input_box" placeholder="Name" id="name" name="name" required="required">
                        <span class="text-danger form-weight-bold" id="name_error">*</span>
                        <input type="text" class="form-control input_box" id="phone" pattern="[6-9]{1}[0-9]{9}" placeholder="Phone" maxlength=10 name="phone" required="required">
                        <span class="text-danger form-weight-bold" id="phone_error">*</span>
                        <input type="email" id="email" class="form-control input_box" name="email" placeholder="Your Email" required="required">
                        <span class="text-danger form-weight-bold" id="email_error">*</span>
                        <input type="text" class="form-control input_box" id="address" placeholder="address" name="address" required="required">
                        <span class="text-danger form-weight-bold" id="address_error">*</span>
                        <textarea class="form-control input_box" id="message" name="message" placeholder="Message" required="required"></textarea>
                        <span class="text-danger form-weight-bold" id="message_error">*</span></br>
                        <button type="submit" name="contactmail" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    <!-- Footer Area -->
            <footer class="footer_area" style="margin-left: 10%;">
            <div class="footer_row row">
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
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
    
    </script>

</body>
</html>
