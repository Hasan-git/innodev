<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>INNODEV - Events</title>

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
			<div class="sub-header sub-header-1 sub-header-our-services fake-position">
				<div class="sub-header-content">
					<h2 class="text-cap white-text">Our Events</h2>
					<ol class="breadcrumb breadcrumb-arc text-cap">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="active">Events</li>
					</ol>
				</div>
			</div>
		</section>
		<!-- End Section Sub Header -->

		<section class="padding">
			<div class="container">
				<div class="row">
					<div class="title-block">
						<h2 class="title text-cap">Our Events</h2>
						<div class="divider divider-1">
							<svg class="svg-triangle-icon-container">
								<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
							</svg>
						</div>
					</div>
					<!-- End Title -->
					<div class="lastest-blog-container articles" >

						<!-- the event rows from table will go here -->
						<div class="col-md-6 records_article">
							<article class="lastest-blog-item">
								<figure class="latest-blog-post-img effect-zoe">
									<img id="img" src="" class="img-responsive" alt="Image">
									<div class="latest-blog-post-date text-cap">
										<span class="day" ></span>
										<span class="month"></span>
									</div>
								</figure>
								<div class="latest-blog-post-description">
									<span class="pull-right"><small><span id="projectName"></span> / <span id="location"></span></small></span>
									<h3 style="text-decoration: none;" ><span id="title"></span></h3>

									<p id="description">

									</p>
								</div>
							</article>
						</div>
						<!-- end projects rows -->

						<div class="clearfix"></div>

						<!-- the events navigation pages start here -->
						<div class="pagination-ourter text-center records_article_paginaton">
							<ul class="pagination">
                  <li><a class="first page-numbers" href="#/"><i class="fa fa-angle-double-left"></i></a></li>
                  <li><a class="pre page-numbers" href="#/"><i class="fa fa-angle-left"></i></a></li>
                  <li class=""> <a class="page-numbers page" href="#/"></a></li>
                  <li><a class="next page-numbers" href="#/"><i class="fa fa-angle-right"></i></a></li>
                  <li><a class="last page-numbers" href="#/"><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
						<!-- the events navigation pages end here -->

					</div>
				</div>
			</div>
		</section>
		<!-- End Section Lastest Blog -->

		<section>
			<div class="overlay-arc overlay-3">
				<div class="layer-1 text-center ">
					<div class="box-content-overlay-3">
						<h2 class=" wow fadeInDown" data-wow-delay=".15s">We aim for a society with active and responsible citizens capable<br> of making positive differences in their communities</h2>
						<a href="contact.php" class="ot-btn btn-dark-color btn-long text-cap wow fadeInUp2" data-wow-delay=".25s">Work with us</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Overlay -->

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
<script src="js/vendor/jquery-ui-1.12.1.js"></script>
<script type="text/javascript" src="js/controllers/events.js"></script>

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
