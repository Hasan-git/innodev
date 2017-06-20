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

                     <!-- types will go here -->
                     <a href="#" data-filter="*" class="current text-cap">
                        <h4>All Projects</h4>
                     </a>
                     <a href="#" data-filter=".School" class="text-cap">
                        <h4>School</h4>
                     </a>
                     <a href="#" data-filter=".Natural" class="text-cap">
                        <h4>Natural</h4>
                     </a>
                     <a href="#" data-filter=".General" class="text-cap">
                        <h4>General</h4>
                     </a>
                     <!-- end types -->

                  </div>
                  <!-- End Project Fillter -->
                  <div class="clearfix projectContainer portfolio-grid-2-container records_article">



                  </div>
                  <!-- End project Container -->

                  <div class="clearfix"></div>

                  <!-- the activities navigation pages start here -->
                  <div class="pagination-ourter text-center records_article_paginaton" >
                     <ul class="pagination">
                        <li><a class="first page-numbers" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li><a class="pre page-numbers" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class=""> <a class=" page-numbers page" href="#"></a></li>
                        <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
                        <li><a class="last page-numbers" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                     </ul>
                  </div>
                  <!-- the activities navigation pages end here -->

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

      <script type="text/javascript" src="js/controllers/activities.js"></script>

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

