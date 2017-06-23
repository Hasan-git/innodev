<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>INNODEV - Activities</title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Font -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/elegant-font.css">
   <!-- SCROLL BAR MOBILE MENU
   ================================================== -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
   <!-- OWL CAROUSEL
   ================================================== -->
   <link rel="stylesheet" href="css/owl.carousel.css">
   <!-- Main Style -->
   <link rel="stylesheet" href="style.css">

   <!-- Favicons
   ================================================== -->
   <link rel="shortcut icon" href="favicon.png">
</head>
<body>
<?php include_once('includes/mobilemenu.php'); ?>

<div id="page">
   <div id="skrollr-body">
      <?php include_once('includes/header.php'); ?>

      <section>
         <div class="sub-header sub-header-1 sub-header-our-services-2 fake-position">
            <div class="sub-header-content">
               <h2 class="text-cap white-text">Activity Details</h2>
               <ol class="breadcrumb breadcrumb-arc text-cap">
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <a href="activities.php">Avtivities</a>
                  </li>
                  <li class="active">Details</li>
               </ol>
            </div>
         </div>
      </section>
      <!-- End Section Sub Header -->
      <section class="padding">
         <div class="container">
            <div class="row">
               <div class="sidebar-services sidebar-right">
                  <div class="box-question-sidebar text-center">
                     <p>Have questions about our activities?</p>
                     <a href="contact.php" class="ot-btn btn-main-color text-cap">Contact Us</a>
                  </div>
               </div>
               <div class="main-services main-services-left">
                  <div class="slide-services">
                     <div class="customNavigation">
                        <a class="btn prev-detail-services"><i class="fa fa-angle-left"></i></a>
                        <a class="btn next-detail-services"><i class="fa fa-angle-right"></i></a>
                     </div>
                     <div id="sync3" class="owl-carousel owl-detail-services clearfix">

                     </div>
                     <!-- End Main Sync owl -->
                     <div id="sync4" class="owl-carousel thumb-service-slide">

                     </div>
                     <!-- End Navithumbnail Owl Sync -->
                  </div>
                  <div class="content-text-services">
                     <div class="row">
                        <div class="col-md-12">
                           <h3 id="title"></h3>
                           <span class="text-info"><span id="prName"></span> / <span id="atype"></span> / <span id="location"></span> / <span id="actDate"></span></span>
                           <p id="description">
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Section How This Would Help You -->

      <?php include_once('includes/footer.php'); ?>
   </div>
</div>
<!-- End page -->
<a id="to-the-top"><i class="fa fa-angle-up"></i></a>
<!-- Back To Top -->
<!-- SCRIPT -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/plugins/wow.min.js"></script>
<script type="text/javascript" src="js/plugins/skrollr.min.js"></script>

<script type="text/javascript" src="js/controllers/factory.js"></script>
<script type="text/javascript" src="js/controllers/actDetails.js"></script>



<!-- Initializing Owl Carousel
================================================== -->
<script src="js/plugins/owl.carousel.js"></script>
<script src="js/plugins/custom-owl.js"></script>

<!-- Mobile Menu
================================================== -->
<script src="js/plugins/jquery.mobile-menu.js"></script>



<!-- PreLoad
================================================== -->
<script type="text/javascript" src="js/plugins/royal_preloader.min.js"></script>
<script type="text/javascript">
   (function($) { "use strict";
      Royal_Preloader.config({
         mode:           'logo', // 'number', "text" or "logo"
         logo:           'images/logo/loader.jpg',
         timeout:       1,
         showInfo:       false,
         opacity:        1,
         background:     ['#FFFFFF']
      });
   })(jQuery);
</script>

<!-- Global Js
================================================== -->
<script src="js/plugins/custom.js"></script>
</body>
</html>