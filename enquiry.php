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
    <title>Contact Us : Be Confident Solutions Orai, OT Beds, OT Table, OT Light, Hospital Furniture, Hospital Beds, Hospital Doors, X-ray machine, Medical Devices, CT Scan Machine, MRI Machine, Couche, Sidetable, Ambulance Customizati </title>
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
                                <li><a href="bcs_india_products">Products</a></li>
                                <li><a href="bcs_india_media">Media</a></li>
                                 <li class="active"><a href="enquiry">Contact</a></li>
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
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- Section content -->
            <div class="wt-contact-wrap row ">
            
                <!-- MAP BLOCK START -->
                <div class="contact-left-part">
                    <div class="gmap-outline">
                        <div id="gmap_canvas" class="google-map">
                          

                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.020153913694!2d79.47199261502583!3d26.000157183529133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399d78cd9c368eb9%3A0x44d413307fcee328!2sGovernment%20Medical%20College%2COrai%2C%20Jalaun!5e0!3m2!1sen!2sin!4v1682322366879!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           
                        </div>
                    </div>
                </div>
                <!-- MAP BLOCK END -->
                
                <!-- RIGHT PART START -->
                <div class="contact-right-part">
                
                    <!-- CONTACT DETAIL -->
                    <div class="p-a30  wt-box">
                        <h4 class="text-uppercase">Enquiry Detail </h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                        <div class="wt-icon-box-sm site-bg-primary m-b20">
                                            <span class="icon-cell text-white">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                        <div class="icon-content">
                                            <h5>Phone</h5>
                                            <p><a href="tel:+91 8737854494">(+91) 87378 54494</a></p>
                                            <p><a href="tel:+91 8545911191">(+91) 85459 11191</a></p>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm site-bg-primary m-b20">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h6>Email</h6>
                                        <p><a href="mailto:info@beconfidentsolutions.com">info@beconfidentsolutions.com</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm site-bg-primary m-b20">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5>Address</h5>
                                         <p> Corp-Office : Near Medical College, Kalpi Road, NH-4, Orai, Uttar Pradesh-285001</p>
                                  <p>HEAD Office : C-507, Amrapali Pricely   Estate, Sec - 76 Uttar Pradesh-201301</p>
                                        </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
                    <!-- CONTACT FORM -->
                    <div class="p-lr30">
                        <h4 class="text-uppercase"><b>ENQUIRY FORM </b></h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="m-a30 wt-box border-2">
                    
                       	<form action="" method="POST" onsubmit="return validation()">
               <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="query" id="query" rows="5" placeholder="Message" required></textarea>
              </div>
              <button  name="send" type="submit" class="btn btn-primary waves-effect waves-light add">Submit</button>
            </form>
            <?php
          if (isset($_POST['send'])) {
            $name = htmlentities($_POST['name']);
            $phone = htmlentities($_POST['phone']);
            $email = htmlentities($_POST['email']);
            $query = htmlentities($_POST['query']);
            $subject = "New Enquiry from Be Confident Solutions Web Leads";
            $from1 = 'info@beconfidentsolutions.com';
             $to_mail = 'info@beconfidentsolutionsl.com';
            
            $pattern = " /[6-9]\d{9}$/";
            $length = strlen($phone);
            $mlength = strlen($subject);
            $correct_way = " /^[A-Z a-z]+$/";
            $error = "";
            if (!preg_match($correct_way, $name))
              $error = "Name is Not valid";
           else if (!preg_match($pattern, $phone) || $length != 10) {
              $error = "Mobile Number is not valid";
            } else if ($mlength > 255) {
              $error = "message to Long";
            } 

            // email validation
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $error = "Email is not valid";
            } else {
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


              $headers .= 'From: ' . $from1 . "\r\n" .
                'Reply-To: ' . $from1 . "\r\n" .
                'X-Mailer: PHP/' . phpversion();




              $email_message = '<html><body><table border="1" solid blue cellpadding = "5" cellspacing = "0" ><tr><td colspan=2" align="center" style="color:#f40;"><h3>New Enquiry</h3></caption>';
              $email_message .= '<tr><td>Name:</td><td>' . $name . '</td></tr>';
              $email_message .= '<tr><td>Mobile No:</td><td>' . $phone . '</td></tr>';
              $email_message .= '<tr><td>Email-Id:</td><td>' . $email . '</td></tr>';
              $email_message .= '<tr><td>Query:</td><td>' . $query . '</td></tr>';
              // $email_message .= '<tr><td>Image:</td><td><img src="2.jpg" alt="image" width="50" height="50"> </td></tr>';

              $email_message .= '</table></body></html>';

              $success = mail($to_mail, $subject, $email_message, $headers);

              if ($success) {
                echo "<center><h3>Thankyou for your enquiry with us ! we will get back to you as soon as possible ....<h3></center>";
                header('refresh:2;url=index.php');
              } else
                echo "something went wrong";
            }
            echo "<center><h3>$error</h3></center>";
          }
          ?>
          <script>
            function validation() {

              /* [Validation for name box] */
              var correct_way = /^[A-Z a-z]+$/;
              var a = document.getElementById('name').value;
              if (a.length < 1) {
                document.getElementById("validname").innerHTML = '**Please write your name.';
                return false;
              }
              if (a.match(correct_way))
                true;
              else {
                document.getElementById("validname").innerHTML = "** Only alphabet are allowed.";
                return false;
              }


              /* [Validation for mobile box] */

              var b = document.getElementById('mobile').value;
              if (b.length < 1) {
                document.getElementById("validmobile").innerHTML = '**Please write your mobile number.';
                return false;
              }
              if (isNaN(b)) {
                document.getElementById("validmobile").innerHTML = "** Only numbers are allowed.";
                return false;
              }
              if (b.length < 10) {
                document.getElementById("validmobile").innerHTML = "** Mobile number must be 10 digits.";
                return false;
              }
              if (b.length > 10) {
                document.getElementById("validmobile").innerHTML = "** Mobile number must be 10 digits.";
                return false;
              }
              if ((b.charAt(0) != 9) && (b.charAt(0) != 8) && (b.charAt(0) != 7) && (b.charAt(0) != 6)) {
                document.getElementById("validmobile").innerHTML = "** Mobile number must start with 9,8,7 & 6.";
                return false;
              }

              /* [Validation for email box] */
              var email = document.getElementById('email').value;
              if (email.length < 1) {
                document.getElementById("validemail").innerHTML = '**Please write your email id.';
                return false;
              }
              if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
                true;
              else {
                document.getElementById('validemail').innerHTML = '**Email Id not correct.';
                return false;
              }
           
              /* [Validation for vehicle model box] */
              var query = document.getElementById('query').value;
              if (query.length < 1) {
                document.getElementById("validquery").innerHTML = '**Please write your query.';
                return false;
              }
              

            }
          </script>
                    </div>
                    
                </div>
                <!-- RIGHT PART END -->
            
            </div>
            <!-- Section content END -->  
           
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
