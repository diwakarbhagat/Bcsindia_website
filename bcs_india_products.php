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
    <title>BCS India Products: Be Confident Solutions Orai, OT Beds, OT Table, OT Light, Hospital Furniture, Hospital Beds, Hospital Doors, X-ray machine, Medical Devices, CT Scan Machine, MRI Machine, Couche, Sidetable, Ambulance Customizati </title>
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
                                <li ><a href="about_bcs_india">About Us</a></li>
                                <li  class="active"><a href="bcs_india_products">Products</a></li>
                                <li ><a href="bcs_india_media">Media</a></li>
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
                        <h1 class="text-white"> BCS Products</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
            
               <!-- OUR SERVICES SECTION START  -->
            <!-- <div class="section-full bg-gray p-t100 p-b20 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container-fluid">
                    
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary">Our </span>Products</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>                            
                        </div>
                      <p style="font-16">Paper bags also called paper packaging bags are more often used for packaging purpose with no folds i.e. Gussets. These bags cannot carry very heavy weights but are durable and ideal for small products.</p>
                    </div>
                </div>
            </div> -->
             <!-- <div class="section-full bg-gray p-t100 p-b20 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                         <h1><span class="site-text-primary"></span> Types</h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>                            
                        </div>                       
                   <p style="font-16">To cater to fulfil all the needs of such bags, we manufacture these bags in standard sizes due to its high demand in almost all industries. We are planning to manufacture these bags also in materials like food grade and OGR paper for packaging of liquid items. Hence various types of bags help us to make our product to reach all types of industries.</p>
                    </div>
                </div>
            </div> -->
             <!-- <div class="section-full bg-gray p-t100 p-b20 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                         <h1><span class="site-text-primary"></span> Applications</h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>                            
                        </div>                       
                   <p style="font-16">These bags are primarily used to pack eatables, food parcels, pastry boxes, clothes and medicine packaging hence it’s suitable for consumption ideally for industries like pharmaceuticals, apparels, cakes confectioneries, and imitation etc.</p>
                    </div>
                </div>
            </div> -->
             <div class="section-full bg-gray p-t100 p-b20 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head  ">
                         <h1 class="text-center"><span class="site-text-primary">Product </span> USP</h1>
                        <div class="wt-separator-outer text-center " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>                            
                        </div>                       
                   <p style="font-16 text-justify: ;">
                   Hospital furniture is an essential part of medical care for hospitals. It includes trolleys, side screens and beds to name just a few. Medical devices alongside modern furnishings have played an important role within health care ever since its inception. Hospital Furniture is one thing that every hospital must possess. The hospitals are committed to ensuring that patients feel comfortable and safe during their treatments, which is why they use advanced furniture technology in all their clinical settings. Medical examination of patients is a crucial part in diagnosing them, and ICU hospital furniture helps to ensure the safety for critical ill people. Clinical furnishings thus have immense variety applications which can be found at any medical facility. Hospital furniture is a necessary and important part of any healthcare system. It can make or break the quality care patients receive while hospitalized, so its design must be top notch. From beds to stretchers, even medical carts, there are numerous types that each has their own specific purpose in mind for hospital use which will help you provide comfort as well maintain safety on both sides with ease. Furniture is essential for creating a comfortable and welcoming environment. It’s also necessary to ensure that furniture can be easily maintained, as well as being durable enough so it lasts through years of use without showing too much wear or tear from normal usage by patients in your hospital facility. The right medical supplier will help to me et al. these needs with their wide variety products available on the market today including: office chairs (especially those designed specifically towards hospitals), tables made especially low height spaces like examining rooms where people may want extra space around them when sitting down but not folded up completely against wall.   </p>
                    
                </div>
                </div>
            </div>
             <!-- <div class="section-full bg-gray p-t100 p-b20 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                         <h1><span class="site-text-primary"></span> Customization</h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>                            
                        </div>                       
                   <p style="font-16">In the new world where we need things as per our convenience, providing customization is the key to make your products reach more audience. These bags are easily customizable with accordance to client's requirements and can be manufactured in brown, wood and off white colours and different sizes as per client requirement.</p>
                    </div>
                </div>
            </div> -->
                
   <div class="section-full bg-gray p-t100 p-b70 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                      <h1 style="color: #c5167f;"><span class="site-text-primary">Hospital </span>Furniture</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>|| OT Table || OT Light || OT Bed ||</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                        
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="ot_table"><img src="upload/60.png" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="ot_table">OT Table </a></h3>
                                        <p><a href="ot_table">Hospital Furniture</a></p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="ot_light"><img src="upload/bcs1063-removebg-preview.png" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="ot_light">OT Light</a></h3>
                                        <p><a href="ot_light">Hospital Furniture</a></p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="ot_bed"><img src="upload/19.png" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="ot_bed">OT Bed</a></h3>
                                        <p><a href="ot_bed">Hospital Furniture</a></p>
                                    </div>
                                </div>
                            </div>
           

                        </div>
                    </div>
                </div>
 </div>
 <!-- medical Devices start -->
 <div class="section-full bg-gray p-t100 p-b70 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                      <h1 style="color: #c5167f;"><span class="site-text-primary">Medical </span>Devices</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>|| ICU Bed|| ICU Devices || Laparoscopy ||</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                        
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="icu_bed"><img src="upload/FM012.png" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="icu_bed">ICU Beds </a></h3>
                                        <p><a href="icu_bed">Medical Devices</a></p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="icu_device"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAGgTz6b-qz_4sC3ELPfYs6NceZkZoX1ixVA&usqp=CAU" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="icu_device">ICU Devices</a></h3>
                                        <p><a href="icu_device">Medical Devices</a></p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="laparoscopy"><img src="upload/CT048.png" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="laparoscopy"> Laparoscopy</a></h3>
                                        <p><a href="laparoscopy">Medical Devices</a></p>
                                    </div>
                                </div>
                            </div>
           

                        </div>
                    </div>
                </div>
 </div>
 <!-- medical Devices end -->


 <!-- mattress start -->
 <div class="section-full bg-gray p-t100 p-b70 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                      <h1 style="color: #c5167f;"><span class="site-text-primary">Mat</span>tress</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>|| Mattress ||</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                        
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="mattress"><img src="upload/JH-M-05.png" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="mattress">Mattress </a></h3>
                                        <p><a href="mattress">Mattress</a></p>
                                    </div>
                                </div>
                            </div>
                             <!-- <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="icu_device"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAGgTz6b-qz_4sC3ELPfYs6NceZkZoX1ixVA&usqp=CAU" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="icu_device">ICU Devices</a></h3>
                                        <p><a href="icu_device">Medical Devices</a></p>
                                    </div>
                                </div>
                            </div> -->
                             <!-- <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                       <a href="laparoscopy"><img src="upload/CT048.png" style="height: 322px; width: 422px;" class="radius-bx"  alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="laparoscopy"> Laparoscopy</a></h3>
                                        <p><a href="laparoscopy">Medical Devices</a></p>
                                    </div>
                                </div>
                            </div> -->
           

                        </div>
                    </div>
                </div>
 </div>
 
 <!-- mattress end -->
        




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
