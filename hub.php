<?php $pagename='hub'; ?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INNODEV - About</title>

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
    <!-- ANIMATE
    ================================================== -->
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>

<?php include_once('includes/mobilemenu.php'); ?>

<div id="page">
    <div id="skrollr-body">
        <?php include_once('includes/header.php'); ?>

        <section>
            <div class="sub-header sub-header-1 sub-header-about fake-position">
                <div class="sub-header-content">
                    <h2 class="text-cap white-text">HUB</h2>
                    <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">HUB</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Section Sub Header -->

        <section class="padding padding-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="about-intro">
                        <div class="col-lg-12">
                            <h1 align="center" class="text-warning"> Coming Soon </h1>
                            <p>&emsp14;</p><p>&emsp14;</p><p>&emsp14;</p>
                        </div>
                        <div class="col-lg-8">&emsp14;</div>
                        <div class="col-lg-8">&emsp14;</div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Section About Intro -->

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
<script type="text/javascript" src="js/plugins/skrollr.min.js"></script>
<script src="js/plugins/wow.min.js"></script>

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
            timeout:        0.5,
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
