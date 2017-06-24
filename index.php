<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

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

		<!-- Main Style -->
		<link rel="stylesheet" href="style.css">

		<!-- Favicons
		  ================================================== -->
	  	<link rel="shortcut icon" href="favicon.ico">
		<style rel="stylesheet">
			.loader:after {
				content: "Welcome To";
				position: absolute;
				top: -50px;
				left: -95px;
				z-index: 99999;
				font-size: 80px;
				font-weight: 600;
				color: #ebcd1e;
				font-family: initial;
				text-decoration: none;
				width: 600px;
			}

			.loader:after {
				color: rgb(246, 238, 47);
				transform: translate3d(0, 0, 0);
				-webkit-animation-name: animatedText,fadeInDown;
				-webkit-animation-duration: 2s, 1.82s;
				animation-name: animatedText,fadeInDown;
				animation-duration: 2s, 1.82s;
				animation-iteration-count:1,1;
			}

			@media only screen and (max-width: 767px) {
				/*welcome to*/
				.loader:after {
					top: -50px;
					left: -60px;
					font-size: 48px;
					width: 400px;
					font-weight: 400;
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

								<!-- LAYER NR. 1 -->
								<div class="tp-caption heading-2 white-text"
									 data-x="center"
									 data-y="center"  data-voffset="-80"
							  		 data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;"
			 						 data-transform_out="y:-80px;opacity:0;s:300;"

									 data-start="1000"
									>Youth in Creative
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-1 white-text text-cap "
									 data-x="center"
									 data-y="center"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
				 					 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
									>INNODEV
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption btn-1"
									 data-x="center"  data-hoffset="-85"
									 data-y="center"  data-voffset="100"
								  	 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
				 					data-transform_out="y:200px;opacity:0;s:300;"
									 data-start="1600"
									>
									<a href="" class="ot-btn btn-main-color text-cap ">Our Projects</a>

								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption btn-2"
									 data-x="center"  data-hoffset="85"
									 data-y="center"  data-voffset="100"
									 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
				 					 data-transform_out="y:200px;opacity:0;s:300;"

									 data-start="1600"
									>
	              					<a href="" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a>
								</div>

							</li>
							<li data-transition="parallaxtoright" data-masterspeed="1000" >

								<!-- MAIN IMAGE -->
								<img src="images/slider/2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

								<!-- LAYER NR. 1 -->
								<div class="tp-caption heading-2 white-text"
									 data-x="center"
									 data-y="center"  data-voffset="-80"
							  		 data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;"
			 						 data-transform_out="y:-80px;opacity:0;s:300;"

									 data-start="1000"
									>Innovative & Productive
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-1 white-text text-cap "
									 data-x="center"
									 data-y="center"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
				 					 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
									>INNODEV
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption btn-1"
									 data-x="center"  data-hoffset="-85"
									 data-y="center"  data-voffset="100"
								  	 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
				 					data-transform_out="y:200px;opacity:0;s:300;"
									 data-start="1600"
									>
									<a href="" class="ot-btn btn-main-color text-cap ">Our Events</a>

								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption btn-2"
									 data-x="center"  data-hoffset="85"
									 data-y="center"  data-voffset="100"
									 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
				 					 data-transform_out="y:200px;opacity:0;s:300;"

									 data-start="1600"
									>
	              					<a href="" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a>
								</div>

							</li>
							<!-- SLIDE  -->
							<li data-transition="parallaxtoright" data-masterspeed="1000" >

								<!-- MAIN IMAGE -->
								<img src="images/slider/3.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

								<!-- LAYER NR. 1 -->
								<div class="tp-caption heading-2 white-text"
									 data-x="center"
									 data-y="center"  data-voffset="-80"
							  		 data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;"
			 						 data-transform_out="y:-80px;opacity:0;s:300;"

									 data-start="1000"
									>Activities & Programs
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption heading-1 white-text text-cap "
									 data-x="center"
									 data-y="center"
									 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
				 					 data-transform_out="y:80px;opacity:0;s:300;"
									 data-start="1400"
									>INNODEV
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption btn-1"
									 data-x="center"  data-hoffset="-85"
									 data-y="center"  data-voffset="100"
								  	 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
				 					data-transform_out="y:200px;opacity:0;s:300;"
									 data-start="1600"
									>
									<a href="" class="ot-btn btn-main-color text-cap ">Our News</a>

								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption btn-2"
									 data-x="center"  data-hoffset="85"
									 data-y="center"  data-voffset="100"
									 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
				 					 data-transform_out="y:200px;opacity:0;s:300;"

									 data-start="1600"
									>
	              					<a href="" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a>
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
								<h2 class="title text-cap">About Us</h2>
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
							</p>
							<div class="about-us-info">
								<div class="col-md-4">
									<div class="about-info-item">
										<span class="counter color1">10</span>
										<h5 class="text-cap"><b>Years of experience</b></h5>
										<p>Our team comprises
											of a dynamic pool of experts, which include social workers, consultants, activists,
											lawyers, and educators.</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="about-info-item">
										<span class="counter">30</span>
										<h5 class="text-cap"><b>Number of Events</b></h5>
										<p>We aim for a society with active and responsible citizens capable of making positive differences
											in their communities.</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="about-info-item">
										<span class="counter">58</span>
										<h5 class="text-cap"><b>Activities completed</b></h5>
										<p>We are implementing an Environmental Awareness Program in Public Schools, for up to 18 schools in different areas.</p>
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
										<span class="order order2">02</span><h4 class="text-cap"> - Concept</h4>
										<p>INNODEV believes in transparency, accountability, empowerment, equality, partnership,
											networking and nondiscrimination.</p>
									</div>
								</div>
								<div class="col-md-3   wow fadeInRight" data-wow-delay="0.45s">
									<div class="process-2-item">
										<span class="order order3">03</span><h4 class="text-cap"> - Professional</h4>
										<p>INNODEV provides professional expertise to people with passion to make a positive
											change in their communities.</p>
									</div>
								</div>
								<div class="col-md-3   wow fadeInRight" data-wow-delay=".55s">
									<div class="process-2-item">
										<span class="order order4">04</span><h4 class="text-cap"> - Students</h4>
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
								<h3 class="text-cap">Creativ Life</h3>
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
				<!-- End promotion Content Box -->

				<section class="padding">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap">Current Projects</h2>
								<div class="divider divider-1">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title -->
							<div class="row current_projects">

								<!-- only 2 projects -->
								<!-- get the last project added-->
								<div class="block-img-full-width project_article">
									<div class="latest-blog-post-img block-img-left ">
										<div class="text-box">
											<h3 class="text-cap" id="title"></h3>
											<p class="three_lines" id="description">

											</p>
											<a class="ot-btn btn-info text-cap mgb0" id="activitiesLink" href="activities.php">View Activities</a>
											<a class="ot-btn btn-main-color text-cap mgb0" id="eventsLink"  href="activities.php">View Events</a>
										</div>
										<div class="img-block"><img id="image" src="http://placehold.it/850x478/ccc.jpg" class="img-responsive" alt="Image"></div>
									</div>
								</div>

								<!-- get before the last project added-->
								<div class="block-img-full-width project_article">
									<div class="latest-blog-post-img block-img-right mgb0">
										<div class="text-box">
											<h3 class="text-cap">Project title</h3>
											<p>
												project description 3 lines only.
											</p>
											<a class="ot-btn btn-info text-cap mgb0" href="activities.php">View Activities</a>
											<a class="ot-btn btn-main-color text-cap mgb0" href="activities.php">View Events</a>
										</div>
										<div class="img-block">
											<img src="http://placehold.it/850x478/ccc.jpg" class="img-responsive" alt="Image">
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
				<!-- End Section What we do -->

				<section class="padding bg-grey">
					<div class="container">
						<div class="row">
							<div class="title-block">
								<h2 class="title text-cap">Upcoming Events</h2>
								<div class="divider divider-1">
									<svg class="svg-triangle-icon-container">
										<polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
									</svg>
								</div>
							</div>
							<!-- End Title -->
							<div class="lastest-blog-container current_events">


								<!-- get the last 2 events added only -->
								<div class="col-md-6 event_article">
									<article class="lastest-blog-item">
										<figure class="latest-blog-post-img effect-zoe">

											<img id="image" src="http://placehold.it/850x478/ccc.jpg" class="img-responsive" alt="Image">

											<div class="latest-blog-post-date text-cap">
												<span class="day"></span>
												<span class="month"></span>
											</div>
										</figure>
										<div class="latest-blog-post-description">
											<h3 id="title">event title</h3>
											<p id="description">

											</p>
										</div>
									</article>
								</div>
								<div class="col-md-6 event_article">
									<article class="lastest-blog-item">
										<figure class="latest-blog-post-img effect-zoe">

											<img src="http://placehold.it/850x478/ccc.jpg" class="img-responsive" alt="Image">

											<div class="latest-blog-post-date text-cap">
												<span class="day">29</span>
												<span class="month">May</span>
											</div>
										</figure>
										<div class="latest-blog-post-description">
											<h3>event title</h3>
											<p>
												event text description.
											</p>
										</div>
									</article>
								</div>
								<!-- end events-->


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
											<p id="text">
											</p>
										</div>
										<a class="ot-btn btn-main-color text-cap" id="newsDetailLink" href="newsdetail.php">Read more</a>
									</div>
								</div>

								<div class="col-sm-6 col-md-4 wow fadeInRight news_article" data-wow-delay=".25s">
									<div class="latest-blog-post-img block-img-full">
										<a class="img-block"><img src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image"></a>
										<div class="text-box">
											<h4 class="text-cap">News title</h4>
											<p>
												news text content.
											</p>
										</div>
										<a class="ot-btn btn-main-color text-cap " href="newsdetail.php">Read more</a>
									</div>
								</div>

								<div class="col-sm-6 col-md-4 wow fadeInRight news_article" data-wow-delay=".25s">
									<div class="block-img-full">
										<a class="img-block"><img src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image"></a>
										<div class="text-box">
											<h4 class="text-cap">News title</h4>
											<p>
												news text content.
											</p>
										</div>
										<a class="ot-btn btn-main-color text-cap" href="newsdetail.php">Read more</a>
									</div>
								</div>


								<!-- End Col -->
							</div>
							<!-- End Row -->
						</div>
					</div>
				</section>
				<!-- End Section What we do -->

				<section class="padding bg-grey padding-bottom-0">
					<div class="title-block">
						<h2 class="title text-cap">Our Activities</h2>
						<div class="divider divider-1">
							<svg class="svg-triangle-icon-container">
							  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
							</svg>
						</div>
					</div>
					<!-- End Title -->
				    <div class="lastest-project-warp clearfix">
						<div class="projectFilter project-terms line-effect-2">

							<!-- types will go here -->
							<a href="#" data-filter="*" class="current text-cap"><h4>All Projects</h4></a>
							<a href="#" data-filter=".General" class="text-cap"><h4>General</h4></a>
							<a href="#" data-filter=".School" class="text-cap"><h4>School</h4></a>
							<a href="#" data-filter=".Natural" class="text-cap"><h4>Natural</h4></a>


						</div> <!-- End Project Fillter -->

						<div class="clearfix projectContainer current_activities">


							<!-- activities rows will go here -->
							<div class="element-item activity_article "><!-- atype go here as class (Natural) -->
								 <img id="image" src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image">
								 <div class="project-info">
									 <a href="actdetail.php">
										<h4 class="title-project text-cap text-cap" id="title"></h4>
									 </a>
									 <a href="" class="cateProject"><span id="atype"></span> / <span id="prName"></span></a>
								 </div>
							</div>

						</div>  <!-- End project Container -->
				    </div> <!-- End  -->
					<div class="overlay-arc">
						<div class="layer-1">
							<a href="activities.php" class="ot-btn btn-dark-color text-cap">View all Activities</a>
						</div>
					</div>
				</section>
				<!-- End Section Isotop Lastest Project -->

				<?php include_once('includes/team.php'); ?>

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
		                timeout:        1,
		                showInfo:       true,
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
