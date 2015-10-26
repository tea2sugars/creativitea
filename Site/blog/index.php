<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creativitea's blog brings you an insight to creative industry, agency news, inspiration and our personal opinions related to creative culture.">
	<meta name="author" content="Creativitea">
	
	<!-- Facebook Conversion Code for Key Page Views – Rik Barwick 1 -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6038156343123', {'value':'0.01','currency':'GBP'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6038156343123&amp;cd[value]=0.01&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>
	
	<title>Design Blog | Agency News | Press | Creativitea</title>
	
	<?php include('../assets/php/includes/head-css-internal.html');?>	
	<!--Share widget-->
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "0750579a-dfe6-4d2b-a96d-da69d0aa188f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	
</head>
<body>

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
				 		perch_blog_recent_posts(18);
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