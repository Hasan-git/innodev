<?php $pagename='index'; ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="author" content="INNODEV">
		<meta name="keywords" content="innodev, society, citizens, communities, youth in creative, innovative, productive, sustainable activities, activities, potentials, involved citizens" />

		<meta property="og:image" content="http://www.innodevlb.org/assets/ico/144.png" />
		<meta property="og:description" content="INNODEV engages youth in creative, innovative, productive and sustainable activities and programs, which allow them to realize their potentials and become involved citizens and agents of change in their communities." />

		<title>INNODEV - HomePage</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/elegant-font.css">
		<link rel="stylesheet" href="css/linearicons.css">


		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
		<!-- REVOLUTION LAYERS STYLES -->
		<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
		<!-- REVOLUTION NAVIGATION STYLES -->
		<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
		<!-- OWL CAROUSEL
	  	================================================== -->
	  	<link rel="stylesheet" href="css/owl.carousel.css">
	  	<!-- SCROLL BAR MOBILE MENU
  		================================================== -->
 		 <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />

 		 <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="js/plugins/toaster/toastr.min.css">

		<!-- Main Style -->
		<link rel="stylesheet" href="style.css">

		<!-- Favicons
		  ================================================== -->
	  	<link rel="shortcut icon" href="favicon.ico">
		<style rel="stylesheet">
			.loader:after {
				content: "Welcome To";
				position: absolute;
				top: -60px;
				left: -38px;
				z-index: 99999;
				font-size: 80px;
				font-weight: 500;
				color: #ebcd1e;
				font-family: initial;
				text-decoration: none;
				width: 800px;
			}

			.loader:after {
				color: rgb(246, 238, 47);
				transform: translate3d(0, 0, 0);
				-webkit-animation-name: animatedText,fadeInDown;
				-webkit-animation-duration: 6s, 5.82s;
				animation-name: animatedText,fadeInDown;
				animation-duration: 6s, 5.82s;
				animation-iteration-count:1,1;
			}

			@media only screen and (max-width: 991px) {
				/*welcome to*/
				.loader:after {
					top: -40px;
					left: -10px;
					font-size: 35px;
					width: 400px;
					font-weight: 300;
					margin: 0 auto;
				}
			}
			.three_lines{
				line-height:1.2em;
				height:3.6em;
				overflow:hidden;
			}
		</style>
	</head>
	<body class="main-page">
		<?php include_once('includes/mobilemenu.php'); ?>

	    <div id="page">
	    	<div id="skrollr-body">
				<?php include_once('includes/header.php'); ?>

				<section>
					<div class="rev_slider_wrapper">
					<!-- START REVOLUTION SLIDER 5.0 auto mode -->
					<div id="slider-h1" class="rev_slider slider-home-1" data-version="5.0">
						<ul>
							<!-- SLIDE  -->
							<li data-transition="parallaxtoright" data-masterspeed="1000" >

								<!-- MAIN IMAGE -->
								<img src="images/slider/1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-2 white-text text-cap "
									 data-x="center"
									 data-y="bottom"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
									 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
								><b style="background-color: rgba(0,0,0,0.4);" >Art & Culture</b>
								</div>
							</li>
							<li data-transition="parallaxtoright" data-masterspeed="1000" >

								<!-- MAIN IMAGE -->
								<img src="images/slider/2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-2 white-text text-cap "
									 data-x="center"
									 data-y="bottom"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
									 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
								><b style="background-color: rgba(0,0,0,0.4);" >Youth Empowerment</b>
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-transition="parallaxtoright" data-masterspeed="1000" >

								<!-- MAIN IMAGE -->
								<img src="images/slider/3.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-2 white-text text-cap "
									 data-x="center"
									 data-y="bottom"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
									 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
								><b style="background-color: rgba(0,0,0,0.4);" >School Awareness</b>
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-transition="parallaxtoright" data-masterspeed="1000" >

								<!-- MAIN IMAGE -->
								<img src="images/slider/4.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-2 white-text text-cap "
									 data-x="center"
									 data-y="bottom"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
									 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
								><b style="background-color: rgba(0,0,0,0.4);" >Reduce, Reuse, Recycle</b>
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-transition="parallaxtoright" data-masterspeed="1000" >

								<!-- MAIN IMAGE -->
								<img src="images/slider/5.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-2 white-text text-cap "
									 data-x="center"
									 data-y="bottom"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
									 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
								><b style="background-color: rgba(0,0,0,0.4);" >Environmental Awareness</b>
								</div>
							</li>
						</ul>
					</div><!-- END REVOLUTION SLIDER -->
					</div><!-- END REVOLUTION SLIDER WRAPPER -->
				</section>
				<!-- End Section Slider -->

				<section class="padding padding-bot-90">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap">Who we are!</h2>
								<div class="divider divider-1">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title -->
							<div class="clearfix mgb30"></div>
							<p class="text-center">
								<b class="text-warning">INNODEV</b> engages youth in creative, innovative, productive and sustainable activities and programs,<br>
								which allow them to realize their potentials and become involved citizens and agents of change in their communities.<br>
								<b class="text-warning">INNODEV</b> promotes a positive and active social, environmental and educational attitude and conditions, thus endows the youth with skills,<br>
								resources and awareness to achieve better livelihoods in a just, secure and healthy society.
								<br/><a href="about.php" class="text-warning hover-style-4"><b>Read More...</b></a>
							</p>

							<div class="about-us-info">
								<div class="col-md-4">
									<div class="about-info-item">
										<span class="counter color1">3</span>
										<h5 class="text-cap"><b>Years of experience</b></h5>
									</div>
								</div>
								<div class="col-md-4">
									<div class="about-info-item">
										<span class="counter">30</span>
										<h5 class="text-cap"><b>Number of Events</b></h5>
									</div>
								</div>
								<div class="col-md-4">
									<div class="about-info-item">
										<span class="counter">58</span>
										<h5 class="text-cap"><b>Activities completed</b></h5>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- End Section About Us  Counter Up-->

				<section class="padding bg-grey">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap">Our Process</h2>
								<div class="divider divider-1">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title -->
							<div class="process-2-container">
								<div class="col-md-3 wow fadeInRight" data-wow-delay=".25s">
									<div class="process-2-item">
										<span class="order order1">01</span><h4 class="text-cap"> - Youth</h4>
										<p>INNODEV works primarily on youth empowerment because it hold within them
											the potentials for transforming the present into a better future.</p>
									</div>
								</div>
								<div class="col-md-3   wow fadeInRight" data-wow-delay=".35s">
									<div class="process-2-item">
										<span class="order order2">02</span><h4 class="text-cap"> - Women</h4>
										<p>INNODEV believes in transparency, accountability, empowerment, equality, partnership,
											networking and nondiscrimination.</p>
									</div>
								</div>
								<div class="col-md-3   wow fadeInRight" data-wow-delay="0.45s">
									<div class="process-2-item">
										<span class="order order3">03</span><h4 class="text-cap"> - Environment</h4>
										<p>INNODEV provides professional expertise to people with passion to make a positive
											change in their communities.</p>
									</div>
								</div>
								<div class="col-md-3   wow fadeInRight" data-wow-delay=".55s">
									<div class="process-2-item">
										<span class="order order4">04</span><h4 class="text-cap"> - Art & Culture</h4>
										<p>INNODEV is keen on raising awareness and concern among Lebanese on environmental
											challenges and understanding on waste problems.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Section Our Process -->

				<section>
					<div class="promotion-box-2">
						<figure class="promotion-box-dark box-pro-4">
							<div class="box-dark-content">
								<span class="lnr lnr-layers icon-promotion"></span>
								<h3 class="text-cap">Creative Life</h3>
							</div>
						</figure>
						<figure class="promotion-box-dark box-pro-1">
							<div class="box-dark-content">
								<span class="lnr lnr-crop icon-promotion"></span>
								<h3 class="text-cap">We Love Space</h3>
							</div>
						</figure>
						<figure class="promotion-box-dark box-pro-2">
							<div class="box-dark-content">
								<span class="lnr lnr-leaf icon-promotion"></span>
								<h3 class="text-cap">Green Design</h3>
							</div>
						</figure>
						<figure class="promotion-box-dark box-pro-3">
							<div class="box-dark-content">
								<span class="lnr lnr-layers icon-promotion"></span>
								<h3 class="text-cap">Expert Education</h3>
							</div>
						</figure>

					</div>
				</section>
				<!-- End promotion Content Box --

				<section class="padding">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap">Current Programs</h2>
								<div class="divider divider-1">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title --
							<div class="row current_projects">

								<!-- only 2 projects -->
								<!-- get the last project added--
								<div class="block-img-full-width project_article">
									<div class="latest-blog-post-img block-img-left ">
										<div class="text-box">
											<h3 class="text-cap" id="title"></h3>
											<p class="three_lines" id="description">

											</p>
											<a class="ot-btn btn-main-color text-cap mgb0" id="projectLink" href="projects.php">View Project Details</a>
										</div>
										<div class="img-block"><img id="image" src="http://placehold.it/850x478/ccc.jpg" class="img-responsive" alt="Image"></div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</section>
				-- End Section current projects -->

				<section class="padding">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap ">Latest from News</h2>
								<div class="divider divider-1">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title -->
							<div class="row current_news">

								<!-- get the last 3 news added -->
					<!-- NOTE the data-wow-delay must be .25 for the first row and then .5 for the second, .75 for the last -->
								<div class="col-sm-6 col-md-4 wow fadeInRight news_article" data-wow-delay=".25s">
									<div class="latest-blog-post-img block-img-full">
										<a class="img-block"><img id="image" src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image"></a>
										<div class="text-box">
											<h4 class="text-cap" id="title"></h4>
											<p id="text" class="three_lines" style="text-space: 400; text-after-overflow: ...">
											</p>
										</div>
										<a class="ot-btn btn-main-color text-cap" id="newsDetailLink" href="newsdetail.php" target="_blank">Read more</a>
									</div>
								</div>
								<!-- End Col -->
							</div>
							<!-- End Row -->
						</div>
					</div>
				</section>
				<!-- End Section What we do -->


				<section>
					<div class="overlay-arc overlay-3">
						<div class="layer-1 text-center ">
							<div class="box-content-overlay-3">
								<h2 class=" wow fadeInDown" data-wow-delay=".15s">We aim for a society with active and responsible citizens capable<br> of making positive differences in their communities</h2>
								<a href="action.php" class="ot-btn btn-dark-color btn-long text-cap wow fadeInUp2" data-wow-delay=".25s">Work with us</a>
							</div>
						</div>
					</div>
				</section>
				<!-- End Section Overlay -->


				<section class="padding bg-parallax section-dark-testimonials">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap">What People Says</h2>
								<div class="divider divider-2">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title -->
							<div class="testimonial-warp testimonial-2-col">
								<div class="customNavigation">
									<a class="btn prev-testimonials-2-columns"><i class="fa fa-angle-left"></i></a>
									<a class="btn next-testimonials-2-columns"><i class="fa fa-angle-right"></i></a>
								</div>

								<div id="owl-testimonials-2-columns" class="owl-carousel owl-theme clearfix">

									<div class="item item-testimonials text-left">
										<p class="quote-icon">“</p>
										<p><i>Youth is happy because it has the ability to see beauty. Anyone who keeps the ability to see beauty never grows old. </i></p>
										<div class="avatar-testimonials">
											<img src="images/people/Franz-Kafka.jpg" class="img-responsive" alt="Image">
										</div>
										<h4 class="name-testimonials text-cap">Franz Kafka</h4>
										<span class="job-testimonials"></span>
									</div><!-- end item -->

									<div class="item item-testimonials text-left">
										<p class="quote-icon">“</p>
										<p><i>In youth we learn; in age we understand.</i></p>
										<div class="avatar-testimonials">
											<img src="images/people/Marie-von-Ebner-Eschenbach.jpg" class="img-responsive" alt="Image">
										</div>
										<h4 class="name-testimonials text-cap">Marie von Ebner-Eschenbach</h4>
										<span class="job-testimonials"></span>
									</div><!-- end item -->

									<div class="item item-testimonials text-left">
										<p class="quote-icon">“</p>
										<p><i>The youth is the hope of our future.</i></p>
										<div class="avatar-testimonials">
											<img src="images/people/Jose-Rizal.jpg" class="img-responsive" alt="Image">
										</div>
										<h4 class="name-testimonials text-cap">Jose Rizal</h4>
										<span class="job-testimonials"></span>
									</div><!-- end item -->

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Section Owl Testimonials -->

				<section class="padding ">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap">Don't forget to sign up!</h2>
								<div class="divider divider-1">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title -->
							<div class="form-subcribe">

								<p class="text-center">Find out early about all upcoming Events and Activities releases with our newsletter.</p>
								<form method="post" id="subscribeForm" action=""><!-- sendmail.php -->
									<input name="email" class="newsletter-email input-text" id="email" placeholder="email@example.com" type="email">
									<button class="ot-btn btn-main-color text-cap" id="btnSubscribe" type="button">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
			</section>
				<!-- End Section subcribe -->

				<?php include_once('includes/footer.php'); ?>
			</div>
		</div>
		<!-- End page -->

		<a id="to-the-top"><i class="fa fa-angle-up"></i></a>
		<!-- Back To Top -->


		<!-- SCRIPT -->


		<script src="js/vendor/jquery.min.js"></script>
	    <script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/plugins/jquery.waypoints.min.js"></script>
	    <script src="js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
	    <script src="js/plugins/wow.min.js"></script>
	    <script type="text/javascript" src="js/plugins/skrollr.min.js"></script>

		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
			(Load Extensions only on Local File Systems !
			The following part can be removed on Server for On Demand Loading) -->
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
		<script src="js/plugins/toaster/toastr.min.js"></script>
		<!-- Intializing Slider-->
		<script type="text/javascript" src="js/plugins/slider.js"></script>

		 <!-- Mobile Menu
	    ================================================== -->
	     <script src="js/plugins/jquery.mobile-menu.js"></script>

	  	<!-- Initializing the isotope
	    ================================================== -->
	    <script src="js/plugins/isotope.pkgd.min.js"></script>
	    <script src="js/plugins/custom-isotope.js"></script>
	    <!-- Initializing Owl Carousel
	    ================================================== -->
	    <script src="js/plugins/owl.carousel.js"></script>
	    <script src="js/plugins/custom-owl.js"></script>

	    <script src="js/vendor/jquery-ui-1.12.1.js"></script>
	    <script src="js/controllers/home.js"></script>

		<!-- Initializing Counter Up
            ================================================== -->
		<script src="js/plugins/jquery.counterup.min.js"></script>

     	<!-- PreLoad
	    ================================================== -->
	    <script type="text/javascript" src="js/plugins/royal_preloader.min.js"></script>
		<script type="text/javascript">
		(function($) { "use strict";
		            Royal_Preloader.config({
		                mode:           'logo',
		                logo:           'images/logo/loader.jpg',
		                timeout:        4,
		                showInfo:       false,
		                opacity:        1,
		                background:     ['#FFFFFF']
		            });
		})(jQuery);
		</script>

	 	<!-- Global Js
	    ================================================== -->
	    <script src="js/plugins/custom.js"></script>
		<script src="js/plugins/custom-h4.js"></script>

	</body>
</html>
