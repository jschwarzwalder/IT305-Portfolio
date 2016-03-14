<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

 //Where did we come from?
 $from = $_SERVER['HTTP_REFERER'];

 //Make sure we came from our own site
 if (!strstr($from, "jschwarzwalder.greenrivertech.net") && !strstr($from, "jschwarzwalder.neocities.org")) {
	 echo "Error Processing Form";
	 return false;
  } else {
	 $isValid = true;
  }
	 
	 
	 //Connect to database
	 require ("../../../db.php");
	 //echo "I connected to database";

	 //Validate name
	 if (!empty($_POST['name'])) {
		 if (ctype_alpha($_POST['name'])) {
			 $name = $_POST['name'];
			 $Er_name=false;
		 } else {
			 $isValid = false;
			 $Er_name=true;
		 }
		 
	 } else {
		 $Er_name=true;
		 $isValid = false;
		 
	 }
	 
	 //Validate email
	 
	 if (!empty($_POST['email'])) {
		 if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			 $email = $_POST['email'];
			 $Er_email=false;
		 } else {
			 $isValid = false;
			 $Er_email=true;
			 
		 }
		 
	 } else {
		 $Er_email=true;
		 $isValid = false;
	 }
	 
	 //Validate phone
	 if (!empty($_POST['phone'])) {
		 $phone = $_POST['phone'];
		 $Er_phone=false;
		 $isValid = true;
		 
	 } 
	 else {
		 $Er_phone=true;
		 $isValid = false;
	 }
	 
	 //Validate message
	 if (!empty($_POST['message'])) {
		 $message = $_POST['message'];
		 $Er_message=false;
		 $isValid = true;
		 
	 }else {
		 $Er_message=true;
		 $isValid = false;
	 }
	 
	 
	 if ($isValid) {
		//Send email
		  
		$name = $_POST['name'];
		$email_address = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
			
		// Create the email and send the message
		$to = 'jamischwarzwalder@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Website Contact Form:  $name";
		$email_body = "You have received a new message from your website contact form.\n\n"
					."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
		$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers .= "Reply-To: $email_address";	
		mail($to,$email_subject,$email_body,$headers);
			 
		 //Send to Database
		 //Escape the data
		 $name = mysqli_real_escape_string($cnxn, $name);
		 $phone = mysqli_real_escape_string($cnxn, $phone);
		 $email = mysqli_real_escape_string($cnxn, $email);
		 $message = mysqli_real_escape_string($cnxn, $message);
		 
		 //Define the query
		  $sql = "INSERT INTO `Portfolio_Contacts` (name, phone, email, message)
				 VALUES ( '$name', '$phone', '$email', '$message')";
		  $result = @mysqli_query($cnxn, $sql);
		 if (!$result) {
			 echo "<p>Error: " . mysqli_error($cnxn) . "</p>";
			 return false;
		 } else {
			 return true;	
		 }
	 }
		 
				

