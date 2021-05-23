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
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">
    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
    #load{
        width:100%;
        height:100%;
        position:fixed;
        z-index:9999;
        background:url("https://www.creditmutuel.fr/cmne/fr/banques/webservices/nswr/images/loading.gif") no-repeat center center rgba(0,0,0,0.25)
    }
 </style> 
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
            </div>
            <!-- End searchForm -->

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
    </head>


<style type="text/css">
  * {
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
}

html, body {
    margin: 0;
}

.full-screen-container {
    background-image: url("images/3SRAM/index.jpeg");
    height: 150vh;
    width: 100%;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
}


.login-container {
    background-color: hsla(201, 100%, 6%, 0.6);
    padding: 50px 30px;
    min-width: 300px;
    width: 50%;
    max-width: 600px;
    margin-left: 0%;
}

.login-title {
    color: white;
    text-align: center;
    margin: 0;
    margin-bottom: 40px;
    font-size: 2.5em;
    font-weight: normal;
}

.input-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

.input-group label {
    color: white;
    font-weight: lighter;
    font-size: 1.5em;
    margin-bottom: 7px;
}


.input-group input {
    font-size: 1.5em;
    padding: .1em .25em;
    background-color: hsla(201, 100%, 91%, 0.3);
    border: 1px solid hsl(201, 100%, 6%);
    outline: none;
    border-radius: 5px;
    color: white;
    font-weight: lighter;
    height: 50px;
}

.input-group input:focus {
    border: 1px solid hsl(201, 100%, 50%)
}

.login-button {
    padding: 10px 30px;
    width: 100%;
    border-radius: 5px; 
    background-color: hsla(201, 100%, 50%, 0.1);
    border: 1px solid hsl(201, 100%, 50%);
    outline: none;
    font-size: 1.5em;
    color: white;
    font-weight: lighter;
    margin-top: 20px;
    cursor: pointer;
}

.login-button:hover {
    background-color: hsla(201, 100%, 50%, 0.3)
}

.login-button:focus {
    background-color: hsla(201, 100%, 50%, 0.5)
}

</style>


    <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:100,300,500">
        <title>Transparent Login Form</title>
    </head>
    <body>
      <div class="full-screen-container">
        <div class="login-container" style="border-radius: 5%;width: 400px;">
          <h3 class="login-title">Login</h3><br>
          <form action="server.php" method="post">
            <div class="input-group">
              <input type="text" style="color:#fff;font-weight: bold;" placeholder="Username" name="name" required="required">
            </div><br>
            <div class="input-group">
              <input type="password" style="color:#fff;font-weight: bold;" placeholder="password" name="password" required="required">
            </div><br>
            <button align="center" type="submit" style="background-color:0098;font-weight: bold;" name="admin_login" class="login-button">Login</button>
          </form>
        </div>
      </div>
    </body>

            <!-- Footer Area -->
            <footer class="footer_area">
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
               
                <div class="footer_row row"  style="margin-left: 10%;margin-bottom: 2%;">
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
    <script src="js/theme.js"></script> <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
    
    </script>

</body>
</html>
