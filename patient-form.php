<?php 
$to = 'chauhanjeet3@gmail.com'; // Put in your email address here
$subject  = "Physiotherapy New  Appoinment Request"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$fname = stripslashes($_REQUEST['fname']); // sender's name
$lname = stripslashes($_REQUEST['lname']); // sender's name
$email = stripslashes($_REQUEST['email']); 
$phone = stripslashes($_REQUEST['phone']);
$city = stripslashes($_REQUEST['city']);
$zipcode = stripslashes($_REQUEST['zipcode']); 
$preferredday = stripslashes($_REQUEST['preferredday']); 
$timeday = stripslashes($_REQUEST['timeday']); 
$message = stripslashes($_REQUEST['message']); 
$serviceour = stripslashes($_REQUEST['serviceour']); 

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "First Name: ".$fname."\r\n\n";  // add sender's name to the message
$msg .= "Last Name: ".$lname."\r\n\n";  // add sender's name to the message
$msg .= "E-mail: ".$email."\r\n\n";  // add sender's email to the message
$msg .= "Phone: ".$phone."\r\n\n";  // add sender's phone to the message
$msg .= "City: ".$city."\r\n\n";  // add sender's phone to the message
$msg .= "Zip Code: ".$zipcode."\r\n\n";  // add sender's phone to the message
$msg .= "Preferred Date: ".$preferredday."\r\n\n";  // add sender's job to the message
$msg .= "Time Day: ".$timeday."\r\n\n";  // add sender's salary expectation to the message
$msg .= "Service: ".$serviceour."\r\n\n"; // add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "Message: ".$message."\r\n\n";  // add sender's email to the message
$msg .= "Subject: ".$subject."\r\n\n"; // add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "\r\n\n"; 

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	header("location:index.html");
	//This is the message that will be shown when the message is successfully send
	
} else {
	echo 'Die Nachricht konnte nicht gesendet werden.';   //This is the message that will be shown when an error occured: the message was not send
}

?>