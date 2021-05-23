<?php session_start();?>
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

        <div id="wrapper" class="active">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><a id="menu-toggle" href="#">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
  .sidenav a {font-size: 14px;}
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
                        <li><a href="about.php" style="color: orange;">About</a></li>
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
                        <li><a href="contact.php">Contact</a></li>
                        
                        <?php 
                            if(isset($_SESSION['id'])){?>
                        <li><a href="logout.php">logout</a></li>
                        <?php }else{?>
                        <li class="dropdown submenu">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Login</a>     <ul class="dropdown-menu">
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
  height: 250px; /* Should be removed. Only for demonstration */
            
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>

     <!-- Slider area -->
    <div class="col-md-11 p0" style="margin-left:8.3%;">
    <section class="slider_area row m0" >
        <div class="slider_inner">
            <div data-thumb="images/3SRAM/about.jpeg"  data-src="images/3SRAM/about.jpeg">
                <div class="camera_caption">
                   <div class="container">
                        <h1 class=" wow fadeInUp animated" style="font-size: 40px;">ABOUT</h1>
                         </div>
                </div>
            </div>
            <div data-thumb="images/3SRAM/about.jpeg" data-src="images/3SRAM/about.jpeg">
                <div class="camera_caption">
                   <div class="container">
                        <h1 class=" wow fadeInUp animated" style="font-size: 40px;">ABOUT</h1>
                         </div>
                </div>
            </div>
        </div>
    </section></div>
    <!-- End Slider area -->
	
   
    <!-- About Us Area -->
    <section class="about_us_area about_us_2 row">
        <div class="container">
            <div class="row about_row about_us2_pages">
                <div class="who_we_area col-md-6" style="margin-left:10%;">
                    <div class="subtittle" style="margin-top: 2%;">
                        <h3><b>WHAT WE DO</b></h3>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <a href="#" class="button_all">Contact Now</a>
                </div>
                <div class="col-md-4 our_skill_inner" style="margin-top: 5%;">
                    <img src="images/3SRAM/about1.png" alt="" width="400" height="300">    
                </div></div></div>

             <!-- End About Us Area -->

     <!-- About Us Area -->
    <section class="about_us_area about_us_2 row">
        <div class="container">
            <div class="row about_row about_us2_pages">
                <div class="col-md-6 our_skill_inner" style="margin-left: 10%;">
                    <div class="subtittle">
                        <h3><b>OUR VALUES</b></h3>
                    </div><div class="single_skill" style="margin-top: 5%;">
                        <h3>Harvestor</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress_parcent"><span class="counter2">89</span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="single_skill">
                        <h3>Tractor</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress_parcent"><span class="counter2">58</span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="single_skill">
                        <h3>Loader</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress_parcent"><span class="counter2">44</span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="single_skill">
                        <h3>Transplanter</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress_parcent"><span class="counter2">76</span>%</div>
                            </div>
                        </div>
                    <div class="single_skill">
                        <h3>Trolly</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress_parcent"><span class="counter2">48</span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="single_skill">
                        <h3>Cultivator</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress_parcent"><span class="counter2">74</span>%</div>
                            </div>
                        </div>
                    </div>
                    <div class="single_skill">
                        <h3>Compact</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress_parcent"><span class="counter2">53</span>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 our_skill_inner" style="margin-bottom: 5%;">
                <img src="images/3SRAM/about2.png" alt="" width="400" height="300">    
            </div>
             <div class="col-md-4 our_skill_inner" style="margin-top: 2%;">
                <img src="images/3SRAM/about3.png" alt="" width="400" height="300">    
            </div>
        
        </div>
    </div>
</section>
<!-- End About Us Area -->

  <div class="row" align="center" style="margin-top: 3%;width: 90%;margin-left: 10%;">
  <div class="column" style="background-color:white;">
    <img src="images/3SRAM/trac.png" alt="images/3SRAM/trac.png" width="72" height="72" style="margin-top: 7%;">
    <p>s.no-18/10 palakonda road</p>
    <p>srikakulam,AP,India.</p>
  </div>
  <div class="column" style="background-color:white;">
     <img src="images/3SRAM/540.png" alt="images/3SRAM/540.png" width="72" height="72" style="margin-top: 7%;">
    <p>+917674044044</p>
    <p>08942278299</p>
  </div>
  <div class="column" style="background-color:white;">
    <img src="images/3SRAM/icon.png" alt="images/3SRAM/icon.png" width="72" height="72" style="margin-top: 7%;">
    <p>rameswariagro.srikakulam@gmail.com</p>
    <p>www.rameswariagros.co.in</p>
  </div>
  </div>

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
