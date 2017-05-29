<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>INNODEV - Contact</title>

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
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<?php include_once('includes/mobilemenu.php'); ?>

<div id="page">
	<div id="skrollr-body">
		<?php include_once('includes/header.php'); ?>

		<section>
			<div class="sub-header sub-header-1 sub-header-contact fake-position">
				<div class="sub-header-content">
					<h2 class="text-cap white-text">Contact Us</h2>
					<ol class="breadcrumb breadcrumb-arc text-cap">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
		</section>
		<!-- End Section Sub Header -->
		<!-- Section form contact -->
		<section class="padding">
			<div class="container">
				<div class="row">
					<div class="contact-warp">
						<div class="col-md-6 ">
							<div class="left-contact">
								<h3 class="text-cap"> Send Us a Message</h3>
								<form class="form-inline form-contact-arc" name="contact" method="post" action="send_form_email.php">
									<div class="row">
										<div class="form-group col-sm-12 ">
											<input type="text" class="form-control" name="yourName" id="yourName" placeholder="Your Name">
										</div>
										<div class="form-group col-sm-12">
											<input type="email" class="form-control" name="yourEmail" id="yourEmail" placeholder="Your Email" >
										</div>
										<div class="form-group col-sm-12">
											<input type="text" class="form-control" name="yourPhone" id="phoneNumber" placeholder="Phone Number" >
										</div>
									</div>
									<div class="input-content">
										<div class="form-group form-textarea">
											<textarea id="textarea" class="form-control" name="comments" rows="6" placeholder="Your Messages" ></textarea>
										</div>
									</div>
									<button  class="ot-btn btn-main-color btn-long text-cap btn-submit" type="submit" >Send Mail</button>
								</form> <!-- End Form -->
							</div> <!-- End col -->
						</div>
						<div class="col-md-6 ">
							<div class="right-contact">
								<h3 class="text-cap">Contact Info</h3>
								<ul class="address">
									<li><p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp; 7th floor, Hamra St, Beirut, Lebanon</p></li>
									<li><p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; +961 1 746236</p></li>
									<li><p><i class="fa fa-fax" aria-hidden="true"></i> &nbsp; +961 1 746236</p></li>
									<li><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp; info@innodevlb.org</p></li>
									<li><p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp; Mon - Fri&nbsp; 09:00 - 17:00</p></li>
								</ul>
							</div>
						</div> <!-- End col -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Section -->
		<!-- Section Google Map -->
		<div class="no-padding ">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.7481750632164!2d35.48172801521107!3d33.896138880648685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDUzJzQ2LjEiTiAzNcKwMjknMDIuMSJF!5e0!3m2!1sen!2slb!4v1495717483976" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
		<!-- End Section -->

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
<!-- Initializing Google Maps -->
<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
<script src="js/plugins/contact.js"></script>

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