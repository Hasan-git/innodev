<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>INNODEV - News</title>

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
					<div class="sub-header sub-header-1 sub-header-blog-grid fake-position">
						<div class="sub-header-content">
							<h2 class="text-cap white-text">News Detail</h2>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="news.php">News</a>
								</li>
								<li class="active">News Detail</li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->

				<section id="content" class="padding">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<main id="main" class="site-main" >

									<!-- the news details from table will go here -->
									<div class="blog-detail news_article">
										<h1 id="title"></h1>
										<div class="latest-blog-post-data text-cap">
											<span class="tags"><a href="#" id="author"></a></span>
										</div>
										<div class="latest-blog-post-date-2  text-cap">
											<span class="month" id="month">May</span>
											<span class="day" id="day">21</span>,
											<span class="year" id="year">2016</span>
										</div>
										<div class="lastest-news-detail">
											<img id="img_" src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image">
											<h4 id="content">Content of News</h4>
											<p id="text"> </p>
										</div>
										<div class="footer-data text-cap">
											<div class="share">
												<p>SHARE&nbsp;: &nbsp;<a href=""> Facebook</a>,&nbsp; <a href="">Twitter</a></p>
											</div>
										</div>
										<div class="divider-line"></div>

									</div>
								</main>

							</div> <!-- End Col -->
							<div class="col-md-3">
								<div class="main-sidebar">

									<aside class="promotion clearfix">
										<img src="http://placehold.it/540x440/ccc.jpg" class="img-responsive" alt="Image">
										<div class="promotionText">
											<p>Amazing! You can work with us, just send email.</p>
											<a href="contact.php" class="ot-btn btn-border btn-border-dark text-cap"> Contact Now</a>
										</div>
									</aside>

									<aside class="widget widget_archive">
										<h3 class="widget-title text-cap">Archives</h3>
										<div class="tiny-border"></div>
										<ul id="archive">

										</ul>
									</aside>

								</div>
							</div><!-- End Col -->
						</div>
					</div>
				</section>
				<!-- End Content -->

				<?php include_once('includes/footer.php'); ?>
			</div>
		</div>
		<!-- End page -->

		<a id="to-the-top"><i class="fa fa-angle-up"></i></a>
		<!-- Back To Top -->
		<!-- SCRIPT -->
		<script src="js/vendor/jquery.min.js"></script>
		<script src="js/vendor/jquery-ui-1.12.1.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/plugins/wow.min.js"></script>
		<script type="text/javascript" src="js/plugins/skrollr.min.js"></script>
		<script type="text/javascript" src="js/controllers/factory.js"></script>
		<script type="text/javascript" src="js/controllers/newsDetails.js"></script>

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
