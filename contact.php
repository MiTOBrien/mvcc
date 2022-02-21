<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$formContents = "From: $name \n Feedback: $feedback";
$sendTo = "missionviejochessclub@gmail.com";
$subject = "MVCC Contact Form";
$mailHeader = "From: $email \r\n";
mail($sendTo, $subject, $formContents, $mailHeader) or die("Error!");
echo "Thank you for your message.  Someone will be back in touch with you soon." . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>