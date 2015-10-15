<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Creativitea - A brand, digital and print design agency | London, Guildford, Suffolk</title>
	
		<?php include('assets/php/includes/head-css.html');?>
		<style type="text/css">
    html{
      margin: 0;
      height: 100%;
      overflow: hidden;
    }
    iframe{
      position: absolute;
      left:0;
      right:0;
      bottom:0;
      top:0;
      border:0;
    }
  </style>

</head>
<body>


	<?php include('assets/php/includes/nav-transparent.html');?>
	

	<!-- GOOGLE MAP -->
	<section id="map-section" class="module-hero module-parallax module-fade">
		<div id="map"></div>
	</section>
	<!-- /GOOGLE MAP -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- CONTACT -->
		<section class="module">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<h2 class="module-title align-center font-alt">Get in touch</h2>

						<div class="module-subtitle align-center font-inc">
							A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
						</div>

					</div>

				</div>
				<!-- /MODULE TITLE -->
				<perch:form id="contact" method="post" app="perch_forms" class="form-horizontal">
	<div class="form-group">
  		<perch:label for="name" class="col-sm-2 control-label">Name</perch:label>
	  	<div class="col-sm-10">
		    <perch:input type="text" id="name" required="true" label="Name" />
			<perch:error for="name" type="required">Please add your name</perch:error>
		</div>  
	</div>
  <div class="form-group">
		<perch:label for="email" class="col-sm-2 control-label">Email</perch:label>
		<div class="col-sm-10">
			<perch:input type="email" id="email" required="true" label="Email" placeholder="you@company.com" />
			<perch:error for="email" type="required">Please add your email address</perch:error>
			<perch:error for="email" type="format">Please check your email address</perch:error>
		</div>
  </div>
  <div class="form-group">
	  	<perch:label for="message" class="col-sm-2 control-label">Message</perch:label>
	  	<div class="col-sm-10">
		  	<perch:input type="textarea" id="message" required="true" label="Message" />
		  	<perch:error for="message" type="required">Please add a message</perch:error>
		</div>
  </div>
  <div class="form-group">
	  	<div class="col-sm-offset-2 col-sm-10">
	  		<perch:input type="submit" id="submit" value="Send Message" class="btn btn-success btn-lg"/>
	  	</div>
  </div>
  <perch:success>
        <perch:content id="success" type="textarea" label="Thank you message" textile="true" editor="markitup" />
   </perch:success>
</perch:form>
				<!-- CONTACT FORM -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3" style="height:400px;">
					<iframe id="typeform-full" width="100%" height="100%" style="display: block;" frameborder="0" src="https://creativitea.typeform.com/to/H1Gm5d"></iframe>
					</div>
				</div>

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