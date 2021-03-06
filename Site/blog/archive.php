<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creativitea's blog brings you an insight to creative industry, agency news, inspiration and our personal opinions related to creative culture.">
	<meta name="author" content="">
	
	<?php if (perch_get('cat')) {
		            echo '<title>'.perch_blog_category(perch_get('cat'), true).' | Creativitea | Brand Design Agency London & Guildford </title>';}
		            ?>
		            
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

						 <?php if (perch_get('cat')) {
		            echo '<h1 class="module-title align-center">'.perch_blog_category(perch_get('cat'), true).'</h1>';}
		            ?>
		           		 <?php if (perch_get('tag')) {	
			           		 echo '<h1 class="module-title align-center">'.perch_blog_tag(perch_get('tag'), true).'</h1>';}
		            	?>
		            

						<div class="module-subtitle align-center">
							<h3>Yummy, inspirational mind-candy</h3>
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
			

			<div class="container" id="category_list">
				
										
									    <?php 	        
		        // defaults for all modes
		        $posts_per_page = 18;
		        $template 		= 'post_in_list.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;

		        /* 
		        	perch_get() is used to get options from the URL.
					
					e.g. for the URL 
						/blog/archive.php?cat=news

					perch_get('cat') would return 'news' because cat=news.


					The code below looks for different options in the URL, and then displays different types of listings based on it.
		        */

		        
		        /* --------------------------- POSTS BY CATEGORY --------------------------- */
		        if (perch_get('cat')) {
		 			            perch_blog_custom(array(
								'category'   => perch_get('cat'),
								'template'   => $template,
								'count'      => $posts_per_page,
								'sort'       => $sort_by,
								'sort-order' => $sort_order,
			                    ));
		            $posts_displayed = true;
		        }
		        
		        
		        /* --------------------------- POSTS BY TAG --------------------------- */
		        if (perch_get('tag')) {
		            
		            perch_blog_custom(array(
							'tag'   	 => perch_get('tag'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }
		        
		        

		        /* --------------------------- POSTS BY DATE RANGE --------------------------- */
		        if (perch_get('year')) {
		            
					$year              = intval(perch_get('year'));
					$date_from         = $year.'-01-01 00:00:00';
					$date_to           = $year.'-12-31 23:59:59';
					$title_date_format = '%Y';
		            
		            
		            // Month and Year?
		            if (perch_get('month')) {
						$month             = intval(perch_get('month'));
						$date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
						$date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
						$title_date_format = '%B, %Y';
		            }

		            echo '<h1>Archive of: '.strftime($title_date_format, strtotime($date_from)).'</h1>';

		            perch_blog_custom(array(
							'filter'     => 'postDateTime',
							'match'      => 'eqbetween',
							'value'      => $date_from.','.$date_to,
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }
		        
		        

		        /* --------------------------- POSTS BY AUTHOR --------------------------- */
		        if (perch_get('author')) {

		        	echo '<h1>Posts by '.perch_blog_author(perch_get('author'), array(
		        											'template' => 'author_name.html',
		        											), true).'</h1>';


		        	perch_blog_custom(array(
							'author'   	 => perch_get('author'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }

		        
		      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

		      	if ($posts_displayed == false) {

		      		// No other options have been used; no posts have been displayed yet.
		      		// So display all posts.
		      		 
		      		echo '<h1>Archive</h1>';

		      		perch_blog_custom(array(
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		      	}

		    ?>

				
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