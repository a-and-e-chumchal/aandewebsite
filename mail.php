<?php

	$to = "website@aandechumchal.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_first_name = $_POST['fname'];
	$sender_first_name = $_POST['lname'];
	$number_of_gustes = $_POST['guest'];
	$events = $_POST['events'];
	$notes = $_POST['notes'];


	$subject = "Form submission";
	$message = $sender_first_name . $sender_first_name . " is attending! The number of gustes of his / her is : " .  $number_of_gustes . " and his / her selected event is " . $events . ". He / she worte the following... ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>
