<?php $pagename='action'; ?>
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

    <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="js/plugins/toaster/toastr.min.css">

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
                    <h2 class="text-cap white-text">Take Action</h2>
                    <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">Take Action</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Section Sub Header -->

        <section class="padding padding-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="about-intro">
                        <div class="col-lg-8">
                            <h2>Join Our Team</h2>
                            <form class="form-contact-arc padding-bot-30" id="contactForm"  name="contact" method="post" action="">
                                <div class="row">
                                    <div class="form-group col-sm-12 ">
                                        <input type="text" class="form-control" data-validation="required" name="yourName" id="yourName" placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <input type="email" class="form-control" data-validation="required email" name="yourEmail" id="yourEmail" placeholder="Your Email" >
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <input type="text" class="form-control"  name="yourPhone" id="phoneNumber" placeholder="Phone Number" >
                                    </div>
                                </div>
                                <div class="input-content">
                                    <div class="form-group form-textarea">
                                        <textarea id="textarea" class="form-control" data-validation="required" name="comments" rows="6" placeholder="Your Message" ></textarea>
                                    </div>
                                </div>
                                <button  class="ot-btn btn-main-color btn-long text-cap btn-submit" id="send" type="button" >Send Email</button>
                            </form> <!-- End Form -->
                        </div>
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
<script src="js/plugins/toaster/toastr.min.js"></script>
<script src="axispanel/vendor/plugins/jqueryFormValidator/form-validator/jquery.form-validator.js"></script>

<!-- Initializing Owl Carousel
================================================== -->
<script src="js/plugins/owl.carousel.js"></script>
<script src="js/plugins/custom-owl.js"></script>
<!-- Mobile Menu
================================================== -->
<script src="js/plugins/jquery.mobile-menu.js"></script>

<script src="js/controllers/action.js"></script>

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
