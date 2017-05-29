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
               <div class="sub-header sub-header-1 sub-header-portfolio-grid-1 fake-position">
                  <div class="sub-header-content">
                     <h2 class="text-cap white-text">Our Activities</h2>
                     <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                           <a href="index.php">Home</a>
                        </li>
                        <li class="active">Activities</li>
                     </ol>
                  </div>
               </div>
            </section>
            <!-- End Section Sub Header -->
            <section class="padding bg-grey padding-bottom-0">
               <div class="lastest-project-warp portfolio-grid-2-warp clearfix">
                  <div class="projectFilter project-terms line-effect-2">
                     <a href="#" data-filter="*" class="current text-cap">
                        <h4>All Projects</h4>
                     </a>
                     <a href="#" data-filter=".Residential" class="text-cap">
                        <h4>Residential</h4>
                     </a>
                     <a href="#" data-filter=".Ecommercial" class="text-cap">
                        <h4>Ecommercial</h4>
                     </a>
                     <a href="#" data-filter=".Office" class="text-cap">
                        <h4>Office</h4>
                     </a>
                     <a href="#" data-filter=".Hospital" class="text-cap">
                        <h4>Hospital</h4>
                     </a>
                  </div>
                  <!-- End Project Fillter -->
                  <div class="clearfix projectContainer portfolio-grid-2-container">
                     <div class="element-item  Residential">
                        <a class="portfolio-img-demo" href="actdetail.php">
                           <img src="http://placehold.it/960x720/ccc.jpg" class="img-responsive" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="actdetail.php">
                              <h4 class="title-project text-cap text-cap">Activity Title</h4>
                           </a>
                           <a href="actdetail.php" class="cateProject">Type</a>
                        </div>
                     </div>
                     <div class="element-item Residential ">
                        <a class="portfolio-img-demo" href="actdetail.php">
                           <img src="http://placehold.it/960x720/ccc.jpg" class="img-responsive" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="actdetail.php">
                              <h4 class="title-project text-cap text-cap">Activity Title</h4>
                           </a>
                           <a href="actdetail.php" class="cateProject">Type</a>
                        </div>
                     </div>
                     <div class="element-item Ecommercial">
                        <a class="portfolio-img-demo" href="actdetail.php">
                           <img src="http://placehold.it/960x720/ccc.jpg" class="img-responsive" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="actdetail.php">
                              <h4 class="title-project text-cap text-cap">Activity Title</h4>
                           </a>
                           <a href="actdetail.php" class="cateProject">Type</a>
                        </div>
                     </div>
                     <div class="element-item Ecommercial ">
                        <a class="portfolio-img-demo" href="actdetail.php">
                           <img src="http://placehold.it/960x720/ccc.jpg" class="img-responsive" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="actdetail.php">
                              <h4 class="title-project text-cap text-cap">Activity Title</h4>
                           </a>
                           <a href="actdetail.php" class="cateProject">Type</a>
                        </div>
                     </div>
                     <div class="element-item Office">
                        <a class="portfolio-img-demo" href="actdetail.php">
                           <img src="http://placehold.it/960x720/ccc.jpg" class="img-responsive" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="actdetail.php">
                              <h4 class="title-project text-cap text-cap">Activity Title</h4>
                           </a>
                           <a href="actdetail.php" class="cateProject">Type</a>
                        </div>
                     </div>
                     <div class="element-item Office">
                        <a class="portfolio-img-demo" href="actdetail.php">
                           <img src="http://placehold.it/960x720/ccc.jpg" class="img-responsive" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="actdetail.php">
                              <h4 class="title-project text-cap text-cap">Activity Title</h4>
                           </a>
                           <a href="actdetail.php" class="cateProject">Type</a>
                        </div>
                     </div>

                  </div>
                  <!-- End project Container -->
               </div>
               <!-- End  -->
               <div class="overlay-arc">
                  <div class="layer-1">
                     <a href="contact.php" class="ot-btn btn-border btn-border-dark btn-long text-cap">Get a Quote</a>
                  </div>
               </div>
            </section>
            <!-- End Section Isotop Lastest Project -->

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
      
      <!-- Mobile Menu
         ================================================== --> 
      <script src="js/plugins/jquery.mobile-menu.js"></script>  
      <!-- Initializing the isotope
         ================================================== --> 
      <script src="js/plugins/isotope.pkgd.min.js"></script>
      <script src="js/plugins/custom-isotope.js"></script>
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

