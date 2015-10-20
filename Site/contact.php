<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Contact Creativitea - The brand, digital and print design agency | London, Guildford, Suffolk</title>
	
		<?php include('assets/php/includes/head-css.html');?>

</head>
<body>


<?php include('assets/php/includes/nav-fixed.html');?>	


	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- CONTACT -->
		<section class="module-small">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">

					<div class="col-sm-8 col-sm-offset-2">

						<h1>Contact our team today</h1>
						<p class="lead">Smoke Signals&hellip;</p>
							<p>Smoke Signals are probably the oldest forms of long-distance visual communication. Native American's used to light smokey fires and use the smoke to spread news and warnings and to call people together for gatherings.</p>
							<p>Whilst the idea of lighting a fire and getting together for some kind of tribal gathering / creative meeting sounds great, Life is a lot simpler now, just use the devices below to say hello to the team and we'll get back to you as soon as possible!</em></p>
					</div>
					
					<div class="col-sm-7 col-sm-offset-2">
						<h3>Send us a message</h3>
					<!--<iframe id="typeform-full" width="100%" height="100%" style="display: block;" frameborder="0" src="https://creativitea.typeform.com/to/H1Gm5d"></iframe>-->
					
						<form id="contact-form" role="form" novalidate="">

							<div class="form-group">
								<label class="sr-only" for="cname">Name</label>
								<input type="text" id="cname" class="form-control" name="cname" placeholder="Name*" required="" data-validation-required-message="Please enter your name.">
								<p class="text-danger"></p>
							</div>

							<div class="form-group">
								<label class="sr-only" for="cemail">Your Email</label>
								<input type="email" id="cemail" name="cemail" class="form-control" placeholder="Your E-mail*" required="" data-validation-required-message="Please enter your email address.">
								<p class="text-danger"></p>
							</div>
							
							<div class="form-group">
								<label class="sr-only" for="cphone">Your Phone Number</label>
								<input type="text" id="cphone" name="cphone" class="form-control" placeholder="Phone Number" required="" data-validation-required-message="Please enter your phone number.">
								<p class="text-danger"></p>
							</div>
							
							<div class="form-group">
								<label for="cdetail">Tell us about yourself, are you?</label>
								<p><input type="radio" name="cdetail" value="prospect" checked> Looking for an awesome creative team.
								<br>
								<input type="radio" name="cdetail" value="supplier"> Someone with an exciting service you want us to look at.
								<br/>
								<input type="radio" name="cdetail" value="contractor"> A quality designer, developer or business person looking for work.
								<br/>
								<input type="radio" name="cdetail" value="alien"> An Alien.
								<br/>
								<input type="radio" name="cdetail" value="other"> Other.</p>
								<p class="help-block text-danger"></p>
							</div>
							
							

							<div class="form-group">
								<textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message*" required="" data-validation-required-message="Please enter your message."></textarea>
							</div>
							
							<div class="text-center">
								<button type="submit" class="btn btn-y btn-lg">Send a digital smoke signal</button>
							</div>

						</form>

						<!-- Ajax response -->
						<div id="contact-response" class="ajax-response"></div>
						<!-- DIVIDER -->
						<hr class="divider-w m-t-20 m-b-20">
						<!-- /DIVIDER -->
						<h3 class="align-center">Alternatively&hellip;</h3>
						<article class="align-center col-xs-12 col-md-6">
							<p class="lead"><a href="call:02081230246">0208 123 0246</a></p>
						</article>
						<article class="align-center col-xs-12 col-md-6">
							<p class="lead"><a href="mailto:info@creativitea.co.uk">info@creativitea.co.uk</a></p>
						</article>
						
						<article class="align-center col-sm-12">
							<!-- DIVIDER -->
						<hr class="divider-w m-t-20 m-b-20">
						<!-- /DIVIDER -->
							<h3>You can also find us on&hellip;</h3>
						<h2>
									<a href="https://twitter.com/Creativitea_Ltd" target="_blank"><i class="fa-twitter fa-icons fa" aria-label="Twitter"></i></a>
									<a href="https://www.facebook.com/creativitea.design.studio" target="_blank"><i class="fa-facebook fa-icons fa" aria-label="Facebook"></i></a> 
									<a href="https://instagram.com/creativiteadesign" target="_blank"><i class="fa-instagram fa-icons fa" aria-label="Instagram"></i></a> 
									<a href="https://www.behance.net/Creativitea"><i class="fa-behance fa-icons fa" aria-label="Behance"></i></a> 
									<a href="https://plus.google.com/+CreativiteaCoUk/posts" target="_blank"><i class="fa-google-plus fa-icons fa" aria-label="Google Plus"></i></a> 
									<a href="https://vimeo.com/creativitea/videos" target="_blank"><i class="fa-vimeo-square fa-icons fa" aria-label="Vimeo"></i></a></h2>
						</article>

					</div>
					
					
				</div>
				<!-- /MODULE TITLE -->


		</section>
		<!-- /CONTACT -->

		<!-- DIVIDER -->
		<hr class="divider-w">
		<!-- /DIVIDER -->

		<?php include('assets/php/includes/footer-services.html');?>
		<?php include('assets/php/includes/footer-contact.html');?>
	
	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>
	<script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script>

</body>
</html>