<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="OT Beds, OT Table, OT Light, Hospital Furniture, Hospital Beds, Hospital Doors, X-ray machine, Medical Devices, CT Scan Machine, MRI Machine, Couche, Sidetable, Ambulance Customization">
    <meta name="author" content="Anch Technologies">
    <meta name="robots" content="index">    
    <meta name="description" content="OT Beds, OT Table, OT Light, Hospital Furniture, Hospital Beds, Hospital Doors, X-ray machine, Medical Devices, CT Scan Machine, MRI Machine, Couche, Sidetable, Ambulance Customization and Manufacturer in Orai, Uttar Pradesh, India">
    <link rel="icon" href="images/bcslogonew" type="image/x-icon" >
    <link rel="shortcut icon" type="image/x-icon" href="upload/bcslogonew.png" >
    <title> OT Bed Portfolio: Be Confident Solutions Orai, OT Beds, OT Table, OT Light, Hospital Furniture, Hospital Beds, Hospital Doors, X-ray machine, Medical Devices, CT Scan Machine, MRI Machine, Couche, Sidetable, Ambulance Customizati </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">   
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" class="skin" href="css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="css/switcher.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<body id="bg">
 
	<div class="page-wraper"> 
       	
       <?php
    include "connection.php";
    $query="select * from header";
    $res=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($res);
?>

<header class="site-header header-style-1  mobile-sider-drawer-menu">
        
            <div class="top-bar">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx">
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $row['email_id'] ?>">&nbsp&nbsp<?php echo $row['email_id'] ?></a></li>
                              <li><a href="https://www.facebook.com/bcsorai" target="_blank" class="fa fa-facebook"></a></li>
                            <li><a href="https://www.instagram.com/bcsorai/" target="_blank" class="fa fa-instagram"></a></li>
                            <li><a href="https://twitter.com/bcsorai" target="_blank" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.linkedin.com/in/bcsorai/" target="_blank" class="fa fa-linkedin"></a></li> 
                        </ul>
                        <ul class="social-bx list-inline">
                            <li><i class="fa fa-phone"></i><a href="tel:+91<?php echo $row['contact_number'] ?>"><?php echo $row['contact_number'] ?></a></li>
                             <li><i class="fa fa-phone"></i><a href="tel:+918545911191">&nbsp&nbsp +91 85459 11191</a></li>
                           
                           
                        </ul>
                    </div>
                </div>
            </div>
         

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <?php
      include "connection.php";
      $query="select * from logo";
      $res=mysqli_query($conn,$query);
      $row=mysqli_fetch_assoc($res);
      ?>
                        <div class="logo-header">
                            <a href="index">
                                <img src="upload/<?php echo $row['image'] ?>" style="width: 220px; height: 30px;"  alt="BCS - INDIA" >
                            </a>
                        </div>
                        
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li ><a href="index">Home</a></li>
                                <li><a href="about_bcs_india">About Us</a></li>
                                <li class="active"><a href="bcs_india_products">Products</a></li>
                                <li><a href="bcs_india_media">Media</a></li>
                                 <li><a href="enquiry">Contact</a></li>
                                 <li><a href="certificate">Certificate</a></li>
                            </ul>
                        </div>
                        <div class="extra-nav">                         
                            <div class="extra-cell">
                            </div>
                         </div>
                         <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                       
                        
                        
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/product-banner.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">OT Bed Portfolio</h1>
                    </div>
                </div>
            </div>
             <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                        <li>OT Bed-Portfolio</li>
                    </ul>
                </div>
            </div>
            
            <div class="page-content">
        
                    
        
            <!-- SECTION CONTENT START -->
           <div class="section-full p-t80 p-b50">
                <div class="container">
                
                   
                    <!-- GALLERY CONTENT START -->
                    <div class="row">
                         <div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
                     <div class="container-fluid">
                          <div class="row">
                              <?php 
                include('connection.php');
                $a=1;
                $query="select * from square_bottom_design";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                
               ?>
                                <!-- COLUMNS 1 -->
                                <div class="masonry-item cat-filter-1 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div  style="height:280px; width:320px:">
                                                <img src="upload/<?php echo $row['image']; ?>"style="height:280px; width:320px:" alt="">  
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="upload/<?php echo $row['image']; ?>"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a30"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a50 mb-5">
                                                    <h3 class="text-primary"><?php echo $row['name']; ?></h3>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                          $a++;
                        }
                        ?>
                                <!-- COLUMNS 2 -->
                               

                            </div>

                        </div>
                 </div>
                    </div>
                   
                </div>
            </div>
          
            
        </div>

 <?php include('inc/footer.php'); ?>

     
      
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
        
    </div>
 




<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script   src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script   src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
<script   src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script   src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
<script   src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script   src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script   src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script   src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 
<script   src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->

<!-- SLIDER REVOLUTION -->
<!-- REVOLUTION JS FILES -->
<script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
<!-- REVOLUTION SLIDER SCRIPT -->

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="js/rev-script-1.js"></script>
<script type="text/javascript">
    (function () {
        var options = {
            call: "+918737854494",
            whatsapp: "+918545911191",
            call_to_action: "BCS - INDIA ", 
            button_color: "#129BF4",
            position: "left",
            order: "call,whatsapp", 
            pre_filled_message: "Welcome to Be Confident Solutions\n\n How May I Assist You!",
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</body>

</html>
