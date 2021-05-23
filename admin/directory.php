<?php session_start();
if(isset($_SESSION['id'])){
    $id=$_SESSION['vehicle'];
    echo $id;
    include'dbconfig.php';
    $result=mysqli_query($con,"SELECT * FROM vehicleModels where vehicleTypeId='$id'")or die('error');
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
                            <a href="askquotationmain.php" style="color: orange;" class="dropdown-toggle" data-toggle="dropdown">Ask Quotation</a>
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
<style type="text/css">
  @import "compass/css3";

*{margin:0;padding:0;}
#overlay{ /* we set all of the properties for our overlay */
    height:50%;
    width:40%;
    margin:0 auto;
    background:white;
    color:black;
    padding:10px;
    position:absolute;
    top:30%;
    left:30%;
    display:none;
    /* CSS 3 */
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    -o-border-radius:10px;
    border-radius:10px;
}

#mask{ /* create are mask */
    position:fixed;
    top:0;
    left:0;
    background:rgba(0,0,0,0.6);
    z-index:500;
    width:100%;
    height:100%;
    display:none;
}
/* use :target to look for a link to the overlay then we find our mask */
#overlay:target, #overlay:target + #mask{
    display:block;
    opacity:1;
}
#open-overlay{ /* open the overlay */
    padding:10px 5px;
    background:blue;
    color:white;
    text-decoration:none;
    display:inline-block;
    margin:20px;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    -o-border-radius:10px;
    border-radius:10px;
}  
</style>


<div class="overlay" style="height:40%;
    width:30%;
    margin:0 auto;
    background:white;
    color:black;
    padding:10px;
    position:absolute;
    top:30%;
    left:35%;
    border-style:groove;
    border-color: lightgray;
    z-index: 1000;
    ">
    <?php while($row=mysqli_fetch_array($result)) {?>
  <a href="askquotationmain.php" class="close">&times;</a>
   <h2 style="font-size:20px;color: red;text-align: center;"><?php echo $row['vehicleType']?></h2>
   <form action="server.php" method="post">
                        <div class="form-group">
                            
                            <label class="control-label">Model:</label>
                            <input type="text" class="form-control" value="<?php echo $row['vehicleModel']?>">
                        </div>
                        <?php 
                        $price=$row['price'];
                        if($price=="0"){
                            $price="Not Available";
                        }else{
                          $price=$row['price'];
                        }  ?>
                        <div class="form-group">
                            <label class="control-label">Basic Price: </label>
                            <input type="text"class="form-control" value="<?php echo$price?>">
                        </div>
                    <?php }?>
                  </form>
                    </div>
      <div id="mask"></div> <!-- the only javascript -->
      <div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
<br><br><br><br><br><br><br><br><br><br>
  

          <!-- Footer Area -->
            <footer class="footer_area" style="margin-top:15%; ">
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
               
                <div class="footer_row row"  style="margin-left: 7%;margin-bottom: 2%;margin-top:6% ">
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
<?php } ?>