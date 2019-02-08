<?php

	$to = "website@aandechumchal.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_first_name = $_POST['fname'];
	$sender_last_name = $_POST['lname'];
	$number_of_gustes = $_POST['guest'];
	$events = $_POST['events'];
	$notes = $_POST['notes'];


	$subject = $sender_first_name . "Form submission";
	$message = $sender_first_name . " " . $sender_last_name . " is attending!" . "\n\n" . "* Number of guest of is : " .  $number_of_gustes . "\n\n" . "* Selected event is " . $events . "\n\n" . "* Wrote the following... ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>
