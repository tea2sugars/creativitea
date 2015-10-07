<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<perch:blog id="excerpt" type="textarea" label="Excerpt" markdown="true" order="3" size="s" />">
	<meta name="author" content="">
	
	<title><perch:blog id="postTitle" type="text" label="Title" required="true" size="xl autowidth" order="1" /> - Creativitea - A brand, digital and print design agency | London, Guildford, Suffolk</title>
	
	<?php include('../assets/php/includes/head-css-internal.html');?>	
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
	
		<?php include('assets/php/includes/footer-services.html');?>
		<?php include('assets/php/includes/footer-contact.html');?>
		<?php include('assets/php/includes/foot-scripts-internal.html');?>
</body>
</html>