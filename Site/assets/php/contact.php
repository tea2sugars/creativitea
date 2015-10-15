<?php

	// Mail settings
	$to = "info@creativitea.co.uk";
	$subject = "Creativitea Contact Form";
	
	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

		$content  = "Name: "     . $_POST["name"]    . "\r\n";
		$content .= "Email: "    . $_POST["email"]   . "\r\n";
		$content .= "Phone Number: "    . $_POST["phone"]   . "\r\n";
		$content .= "Enquiry Type: "    . $_POST["detail"]   . "\r\n";
		$content .= "Message: "  . "\r\n" . $_POST["message"];

		if (mail($to, $subject, $content, $_POST["email"])) {

			$result = array(
				"message" => "Thanks for contacting us. We'll get back to you as soon as possible!",
				"sendstatus" => 1
			);

			echo json_encode($result);

		} else {

			$result = array(
				"message" => "Sorry, something is wrong. Please try again.",
				"sendstatus" => 0
			);

			echo json_encode($result);

		}

	}

?>