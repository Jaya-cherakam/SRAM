<?php session_start();
include'dbconfig.php';
$result=mysqli_query($con,"SELECT * FROM fieldActivity where type='image' and fStatus='not_deleted' ORDER BY imageOrder ASC");
$result1=mysqli_query($con,"SELECT * FROM fieldActivity where type='video' and fStatus='not_deleted' ORDER BY imageOrder ASC");
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

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
     <script>
 document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
      },1000);
  }
}
 </script>

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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                        <li><a href="gallery.php" style="color: orange;">Gallery</a></li>
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
    
     <!-- Slider area -->
    <div class="col-md-11 p0" style="margin-left: 8.3%;">
    <section class="slider_area row m0" >
        <div class="slider_inner">
            <div da ta-thumb="images/3SRAM/gallery.jpeg" data-src="images/3SRAM/gallery.jpeg">
                <div class="camera_caption">
                   <div class="container">
                        <h1 class=" wow fadeInUp animated" style="color:white;font-size: 50px;">GALLERY</h1>
                        <h6 class=" wow fadeInUp animated" data-wow-delay="0.5s"></h6>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s"></p>
                        </div>
                </div>
            </div>
            <div data-thumb="images/3SRAM/gallery.jpeg" data-src="images/3SRAM/gallery.jpeg">
                <div class="camera_caption">
                   <div class="container">
                        <h1 class=" wow fadeInUp animated" style="color: white;font-size: 50px;">GALLERY</h1>
                        <h6 class=" wow fadeInUp animated" data-wow-delay="0.5s"></h6>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s"></p>
                        </div>
                </div>
            </div>
        </div>
    </section></div>


<style type="text/css">
/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
  margin-left: 5%;
  width: 100%;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 160px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 160px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel img
{
  width: 200px;
  height: 180px;
  margin-top: 0%;
}
/* End carousel */
.zoom:hover {
  transform: scale(1.5);
  z-index: 1; 
}
</style>
<script type="text/javascript">
  $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
  lkjlk
</div>  

<div class="container">
  <div class="row">
    <h3 style="margin-left: 10%;font-style: oblique;">Images:</h3>
  </div>
  <div class='row'>
    <div class='col-md-12 col-lg-12'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
               <?php while($row=mysqli_fetch_array($result)) { ?>
              <div class="col-md-3">
                <img class="zoom" src="<?php echo $row['path']; ?>">
                <span style="font-size: 22px;margin-left: 30%;"><?php echo $row['title'];?></span>
              </div>          
              <?php }?>        
            </div> 
          </div>
          
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>                          
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <h3 style="margin-left: 10%;font-style: oblique;">Videos:</h3>
  </div>
  <div class='row'>
    <div class="col-md-12">
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <?php while($row=mysqli_fetch_array($result1)) { ?>
              <div class="col-md-6">
                <video style="width:100%;height: 50%; margin-top: 0%;"controls>
                <source src="<?php echo $row['path']; ?>"></video>
                <span style="font-size: 22px;margin-left: 50%;"><?php echo $row['title'];?></span>
                </div>
                <?php }?>          
              </div>
            </div>
          </div>
        <a data-slide="prev" href="#media" class="left carousel-control" style="margin-top: 230px">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control"  style="margin-top: 230px">›</a>
      </div>                          
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <h3 style="margin-left: 10%;font-style: oblique;">Youtube Videos:</h3>
  </div>
  <div class='row'>
    <div class='col-md-12 col-lg-12'>
      <div class="container">
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-6">
                <a class="thumbnail" href="#"><iframe width="100%" height="200" src="https://www.youtube.com/embed/OHkWtqmMCx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                <span style="font-size: 22px;margin-left: 32%;">Heavy tractor</span>
                <a class="thumbnail" href="#"><iframe width="100%" height="200" src="https://www.youtube.com/embed/Aotq4ESjbBs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                <span style="font-size: 22px;margin-left: 32%;">Kubota KRAMU</span>
              </div>          
              <div class="col-md-6">
                <a class="thumbnail" href="#"><iframe width="100%" height="200" src="https://www.youtube.com/embed/j5n903edZVQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                <span style="font-size: 22px;margin-left: 32%;">Kubota Harvesting</span>
                <a class="thumbnail" href="#"><iframe width="100%" height="200" src="https://www.youtube.com/embed/KrZt-QKSE5U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                <span style="font-size: 22px;margin-left: 32%;">Combine rice harvesting</span>
              </div>
             </div>
          </div>
           </div>
        <a data-slide="prev" href="#media" class="left carousel-control" style="margin-top: 230px">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control"  style="margin-top: 230px">›</a>
      </div>                          
    </div>
  </div>
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