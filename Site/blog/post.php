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
	
	<!-- BLOG SINGLE -->
		<section class="module">

			<div class="container">

				<div class="row">

					<div class="col-sm-8 col-sm-offset-2">
						
						<!-- POST -->
						<div class="post">
		   
							<?php perch_blog_post(perch_get('s')); ?>
		    	
							<div class="meta">
				           		 <div class="cats col-sm-6">
				               		 <?php perch_blog_post_categories(perch_get('s')); ?>
								</div>
								<div class="tags col-sm-6">
				               		 <?php perch_blog_post_tags(perch_get('s')); ?>
				            	</div>
				        	</div>
						</div>
					</div>
				</div>
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