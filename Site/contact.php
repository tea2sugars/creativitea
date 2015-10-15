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
				<div class="row">
					<p><perch:email id="email_message" encode="false" /></p>
  <table>
    <tr>
      <th>Name</th>
      <td><perch:email id="name" /></td>
	</tr>
    <tr>
      <th>Email</th>
      <td><perch:email id="email" /></td>
	</tr>
    <tr>
      <th>Message</th>
      <td><perch:email id="message" encode="false" /></td>
	</tr>
  </table>
				</div>
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