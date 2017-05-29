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
							<h2 class="text-cap white-text">Our News</h2>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li class="active">News</li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->
				
				<section id="content" class="padding">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="blog-list">
									<article>
										<figure class="latest-blog-post-img effect-zoe">
											<img src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image">
											<div class="latest-blog-post-date text-cap">
												<span class="day">18</span>
				                                <span class="month">May</span>
				                            </div>
				                        </figure>
				                        <div class="latest-blog-post-description">
				                            <a href="newsdetail.php"><h3>The News Title</h3></a>
				                            <p>some news brief text some news brief text some news brief text some news brief text some news brief text some news brief text some news brief text.</p>
				                            
				                            <a href="newsdetail.php" class="ot-btn btn-main-color text-cap">
				                            	Continue Reading...
				                            </a>
				                        </div>
									</article>
									<article>
										<figure class="latest-blog-post-img effect-zoe">
											<img src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image">
											<div class="latest-blog-post-date text-cap">
												<span class="day">18</span>
				                                <span class="month">May</span>
				                            </div>
				                        </figure>
				                        <div class="latest-blog-post-description">
				                            <a href="newsdetail.php"><h3>The News Title</h3></a>
				                            <p>some news brief text some news brief text some news brief text some news brief text some news brief text some news brief text some news brief text.</p>
				                            
				                            <a href="newsdetail.php" class="ot-btn btn-main-color text-cap">
				                            	Continue Reading...
				                            </a>
				                        </div>
									</article>

								</div>
								<div class="pagination-ourter text-left">
		                            <ul class="pagination">
		                                <li><a href="#" class="page-numbers current">1</a></li>
		                                <li><a class="page-numbers" href="#">2</a></li>
		                                <li><a class="page-numbers" href="#">3</a></li>
		                                <li><a class="page-numbers" href="#">...</a></li>
		                                <li><a class="page-numbers" href="#">25</a></li>
		                                <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
		                            </ul>
		                        </div>
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
		                                <ul>
							                  <li><a href="#">March 2016</a>
							                      <span class="count">(4)</span>
							                  </li>
							                  <li><a href="#">Febuary 2016</a>
							                      <span class="count">(9)</span>
							                  </li>
							                  <li><a href="#">January 2016</a>
							                      <span class="count">(34)</span>
							                  </li>
							                  <li><a href="#">December 2015</a>
							                      <span class="count">(22)</span>
							                  </li>
							                  <li><a href="#">November 2015</a>
							                      <span class="count">(35)</span>
							                  </li>
							                   <li><a href="#">Octorber 2015</a>
							                      <span class="count">(4)</span>
							                  </li>
							                   <li><a href="#">September 2015</a>
							                      <span class="count">(26)</span>
							                  </li>
							                   <li><a href="#">August</a>
							                      <span class="count">(11)</span>
							                  </li>
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
    <script src="js/vendor/bootstrap.min.js"></script>
 	<script src="js/plugins/wow.min.js"></script>
    <script type="text/javascript" src="js/plugins/skrollr.min.js"></script>
    <script src="js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>

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