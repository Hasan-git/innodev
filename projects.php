<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>INNODEV - Projects</title>

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
						<h2 class="text-cap white-text">Our Projects</h2>
						<ol class="breadcrumb breadcrumb-arc text-cap">
							<li>
								<a href="#">Home</a>
							</li>
							<li class="active">Projects</li>
						</ol>
					</div>
				</div>
			</section>
			<!-- End Section Sub Header -->

			<section class="padding padding-bot-30">
				<div class="container">
					<div class="row">

						<!-- the projects rows from table will go here -->
						<div class="col-md-12">
							<div class="block-img-full service-item records_article">
								<div class="latest-blog-post-img col-md-8 ">
									<a class="img-block">
										<img id="imageName" src="http://placehold.it/810x451/ccc.jpg" class="img-responsive" alt="Image">
									</a>
								</div>
								<div class="col-md-4">
									<table class="table">
										<tr>
											<th>Project Name:</th>
											<td id="projectName">the Name of the project</td>
										</tr>
										<tr>
											<th>Project Target:</th>
											<td id="target">target of the project</td>
										</tr>
										<tr>
											<th>Doner Name:</th>
											<td id="doner">project doner name</td>
										</tr>
										<tr>
											<th>Start Date:</th>
											<td id="startDate">start date</td>
										</tr>
										<tr>
											<th>End Date:</th>
											<td id="endDate">end date</td>
										</tr>
										<tr>
											<td><a class="btn btn-warning" id="eventsLink" href="#">View Events</a></td>
											<td><a class="btn btn-success" id="activitiesLink" href="#">View Activities</a></td>
										</tr>
									</table>
								</div>
								<div class="clearfix"></div>
								<div class="text-box col-md-12">
									<h4 class="text-cap" id="title">Project Title</h4>
									<p id="description">
										Project Definition Project Definition Project Definition Project Definition Project Definition Project Definition Project Definition Project Definition.
									</p>
									<a class="ot-btn btn-main-color text-cap mgb0" href="activities.php">View Project Activities</a>
								</div>
							</div>
						</div>
						<!-- end projects rows -->

						<!-- the projects navigation pages start here -->
						<div class="pagination-ourter text-right records_article_paginaton">
							<ul class="pagination">
								<li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- the projects navigation pages end here -->

					</div>
				</div>
			</section>
			<!-- End Portfolio Detail 1 -->

			<section>
				<div class="overlay-arc overlay-3">
                	<div class="layer-1 text-center">
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
	    <script src="js/vendor/jquery-ui-1.12.1.js"></script>
	    <script src="js/vendor/bootstrap.min.js"></script>
	    <script src="js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
	    <script src="js/plugins/wow.min.js"></script>
	    <script type="text/javascript" src="js/plugins/skrollr.min.js"></script>
	    <script type="text/javascript" src="js/controllers/projects.js"></script>


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
