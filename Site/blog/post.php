<?php include('../perch/runtime.php'); ?>
<?php $excerpt = strip_tags(perch_blog_post_field(perch_get('s'), 'excerpt', true));?>
<?php $postTitle = strip_tags(perch_blog_post_field(perch_get('s'), 'postTitle', true));?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content="<?php echo $excerpt ?>"/>
	<meta name="author" content="">
	
	<title><?php echo $postTitle ?> - Design Blog by Creativitea</title>
	
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
	<script type="text/javascript" src="http://www.ela-3-tnk.com/js/31081.js"></script>
<noscript><img src="http://www.ela-3-tnk.com/31081.png" style="display:none;" /></noscript>
	<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2549852-4', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>