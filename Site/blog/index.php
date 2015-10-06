<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Creativitea - A brand, digital and print design agency | London, Guildford, Suffolk</title>
	
	<!-- Bootstrap core CSS -->
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Plugins -->
	<link href="../assets/css/simpletextrotator.css" rel="stylesheet">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/et-line-font.css" rel="stylesheet">
	<link href="../assets/css/magnific-popup.css" rel="stylesheet">
	<link href="../assets/css/flexslider.css" rel="stylesheet">
	<link href="../assets/css/animate.css" rel="stylesheet">
	
	<!-- Template core CSS -->
	<link href="../assets/css/style.css" rel="stylesheet">
	
	<!-- Custom css -->
	<link href="../assets/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6440332/629266/css/fonts.css" />
	
	<!--Share widget-->
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "0750579a-dfe6-4d2b-a96d-da69d0aa188f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	
</head>
<body>
<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Brewing...</div>
	</div>
	<!-- /PRELOADER -->

	<?php include('../assets/php/includes/nav-internal.html');?>


	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- HOME -->
		<section class="module module-header bg-dark bg-dark-50" data-background="../assets/images/blog-header.jpg">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<h1 class="module-title align-center">Our Creative World</h1>

						<div class="module-subtitle align-center">
							The latest news and musings from our agency, the industry and life in general
							<div class="post-share">
								<span class="yellow lead">–</span><br/>
								<span class='st_sharethis_large' displayText='ShareThis'></span>
								<span class='st_facebook_large' displayText='Facebook'></span>
								<span class='st_twitter_large' displayText='Tweet'></span>
								<span class='st_linkedin_large' displayText='LinkedIn'></span>
								<span class='st_pinterest_large' displayText='Pinterest'></span>
								<span class='st_pocket_large' displayText='Pocket'></span>
								<span class='st_instapaper_large' displayText='Instapaper'></span>
								<span class='st_email_large' displayText='Email'></span>
							</div>

						</div>
						
					</div>

				</div>
				<!-- /MODULE TITLE -->

			</div>

		</section >
		<!-- /HOME -->

	
		<section class="module p-b-0">

			<div class="container">
				
				<div class="row">
					<div class="col-sm-4">
						<h2>Our Blog</h2>
					</div>
				</div>
				
				<div class="row multi-columns-row post-columns">
					
							<!-- this is an example blog homepage showing a simple call to perch_blog_recent_posts()
			
			Posts are displayed using the templates stored in perch/apps/perch_blog/templates/blog you can edit these as you wish, making sure that the 
			paths used in these templates are correct for your installation.
			 -->
			 		<?php 
				 		perch_blog_recent_posts(12);
					?>
		    
				</div>
				
	</section>
	
	<!-- DIVIDER -->
		<hr class="divider-w">
		<!-- /DIVIDER -->
	
		<?php include('../assets/php/includes/footer-services.html');?>
		<?php include('../assets/php/includes/footer-contact.html');?>
	
	<!-- Javascript files -->
	<script src="../assets/js/jquery-2.1.3.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="../assets/js/appear.js"></script>
	<script src="../assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="../assets/js/jqBootstrapValidation.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="../assets/js/gmaps.js"></script>
	<script src="../assets/js/isotope.pkgd.min.js"></script>
	<script src="../assets/js/imagesloaded.pkgd.js"></script>
	<script src="../assets/js/jquery.flexslider-min.js"></script>
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/jquery.fitvids.js"></script>
	<script src="../assets/js/smoothscroll.js"></script>
	<script src="../assets/js/wow.min.js"></script>
	<script src="../assets/js/contact.js"></script>
	<script src="../assets/js/custom.js"></script>

</body>
</html>