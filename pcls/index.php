<?php

	//Connect to database
	require '../pcls_db.php';
$errors = [];
$missing = [];
$coding = false;
$summer = false;
$fname="";
$lname="";
$phone="";
$comment="";
		   
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Volunteer Pierce County Library </title>



    <!-- Bootstrap Core CSS -->
    <link href="readable_css/bootstrap.css" rel="stylesheet">
    <link href="readable_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">	
	<div class="head">
    
        <div class="row">
            <div class="col-xs-12 col-lg-offest-1 col-lg-5">
			<p><img src="pcls.gif" class="text-center "></p>
			</div>
			<div class="col-xs-12  col-lg-5">
                <h2 class="text-center">Volunteer @ Pierce County Library</h2>
            </div>
        </div>
		</div>
	<div class="main">
        <div class="row ">
			<div class="col-xs-12 ">

			
			<?php
			if (isset($_POST['send'])) {
    $expected = ['fname', 'lname', 'phone', 'email', 'summer','coding', 'comments'];
    $required = ['fname', 'lname','phone', 'email', 'comments' ];
    $recipient = 'jschwarzwalder@piercecountylibrary.org';
	$subject = 'Emerald Ridge Volunteer';
	$headers = [];
    $headers[] = 'From: jamischwarzwalder@gmail.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fkentfoodbank@gmail.com';
    require './includes/process_mail.php';
		
		 //print_r($_POST);
		 $isValid = true;
		 
		foreach ($_POST as $key => $value) {
			
			if (empty($value) && $key >=0){
				$missing[] = $value;
				$$key = '';
				$isValid = false;
				
			 } 
		 }
		if ($isValid) {
		   	$fname = trim($_POST['fname']);
			$lname = trim($_POST['lname']);
			$phone = trim($_POST['phone']);
			$email = trim($_POST['email']);
			if (!empty($_POST['summer'])) {
				$summer = trim($_POST['summer']);
			  } else {
				$summer = false;
			  }
			if (!empty($_POST['coding'])) {
				$coding = trim($_POST['coding']);
			  } else {
				$coding = false;
			  }
			
				if (!empty($_POST['comments'])) {
				$comments = trim($_POST['comments']);
			  } else {
				$comments = "";
			  }
						
			$fname = mysqli_real_escape_string($cnxn, $fname);
			$lname = mysqli_real_escape_string($cnxn, $lname);
			$phone = mysqli_real_escape_string($cnxn, $phone);
			$email = mysqli_real_escape_string($cnxn, $email);
			$summer = mysqli_real_escape_string($cnxn, $summer);
			$coding = mysqli_real_escape_string($cnxn, $coding);
			$comments = mysqli_real_escape_string($cnxn, $comments);
		   
		   //Send to Database
		   $sql = "INSERT INTO volunteer(fname, lname, phone, email, summer, coding, comment ) VALUES ('$fname','$lname','$phone','$email','$summer','$coding','$comments')";
			$result = @mysqli_query($cnxn, $sql);
			if (!$result) {
			   echo "<p>Error: " . mysqli_error($cnxn) . "</p>";
			   return;
			} else {
				echo "<div class='row '>
								<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
										<h2 class='form-confirm'>Your information has been sent. Thank you!<br>We will contact you shortly about any openings.</h2>
										<p><a href='index.php'>Enter another application</a></p>
										
								</div>
							</div>";
							return;
					}
			}
		}
	  

			?>
			<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
				<h2 class="formError">Sorry, your mail couldn't be sent.</h2><br>
			<?php elseif ( $missing) : ?>
				<h2 class="formError">Please fix the item(s) indicated:</h2>
			<?php endif; ?>
			
			<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" role="form">
			 <div class="row ">
				
			   <div class="row">
						
				   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
					<!-- Error Message if first name not entered -->	
					<?php if ($missing && in_array('fname', $missing)) : ?>
								<label><span class="formError">Please enter your first name.</span></label>
								<?php endif; ?>
				   </div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
					<!-- Error Message if last name not entered -->
					<?php if ($missing && in_array('lname', $missing)) : ?>
								<label><span class="formError">Please enter your last name.</span></label>
								<?php endif; ?>
					</div>
			   </div>
				<div class="row">
						
				   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">		
				   <!-- First Name field -->
					   <fieldset class="form-group">
						   <label for="fname">First Name*</label><br>
						   <input name="fname" id="fname" class="input col-xs-12 form-control" type="text" placeholder="Enter your first name" value="<?php echo $fname; ?>">
					   </fieldset>
				   </div>
				   
				   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
					<!-- Last Name field -->
					   <fieldset class="form-group">
						   <label for="lname">Last Name*</label><br>
						   <input name="lname" id="lname" class="input col-xs-12 form-control" type="text" placeholder="Enter your last name" value="<?php echo $lname; ?>">
					   </fieldset>
				   </div>
				   
				   
			   </div>
			   <div class="row">
			   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					   <!-- Contact Phone -->
						   <label for="phone" class="control-label">
						   <?php if ($missing && in_array('phone', $missing)) : ?>
							<span class="formError">Please enter your phone.</span>
							<?php elseif (isset($errors['phone'])) : ?>
							<span class="formError ">Invalid phone number</span>
							<?php endif; ?>
							<br>Phone*</label><br>
						   <input name="phone" class="input col-xs-12 form-control bfh-phone" data-format="+1 (ddd) ddd-dddd"  id="phone"  type="tel" placeholder="Enter phone number xxx-xxx-xxxx" value="<?php echo $phone; ?>"><br><br>
					   </div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right form-group">
					
					<div class="form-group">
						
							<div class="col-xs-12">
							<p>
								<label for="email" class="control-label">
							<?php if ($missing && in_array('email', $missing)) : ?>
							<span class="formError">Please enter your e-mail.</span>
							<?php elseif (isset($errors['email'])) : ?>
							<span class="formError ">Invalid email address</span>
							<?php endif; ?>
							<br>E-mail address*
						</label><br>
						
							<input type="email" name="email" id="email" class="input form-control"
							<?php
								if ($errors || $missing) {
									echo 'value="' . htmlentities($email) . '">';
									
								} else {
									echo '"'; 
									
								}	
							?> 
						</p>
					    </div>
						
					</div>
				</div>
			</div>
			  
				<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						<div class="form-group">
						
						
					<?php
					//Validate Volunteer Opportunities
					
						if ($_POST && empty($_POST['summer']) && empty($_POST['coding']) && empty($_POST['food'])) {
							echo '<label class="formError text-center">Please select a Volunteer Opportunity.</label>';
							$isValid = false;
						} else {
							if (!empty($_POST['summer'])) {
								$summer = $_POST['summer'];
								
							}
							if (!empty($_POST['coding'])) {
								$coding= $_POST['coding'];
							}
							
						}
					?>
					   <fieldset class="form-group">
						   
							   <label >Volunteer Opportunities (check your interests)*</label>
							   <div class="checkbox">
							   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
								   <label for="summer">
								   <input type="checkbox" name="summer" id="summer"
								   <?php if ($summer) : ?>
									checked
									<?php endif; ?>
								   > Summer Reading
								   </label>
								   <p>Sit at table, explain Summer Reading Program to families. Hand out Prizes.</p>
								   </div>
						   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
								   <label for="coding">
								   <input type="checkbox" name="coding" id="coding"
								   <?php if ($coding) : ?>
									checked
									<?php endif; ?>
								   >Code Mentor
								   </label>
								   <p>Mentor youth in MIT Scratch and Robotics. Help set up programs. Model Problem Solving. </p>
							</div>
								   
						   </div>
					   </fieldset>
				   </div>
						</p>
						</div>
					</div>
				
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						<div class="form-group">
		
							<p>
								<label for="comments">Comments*
									<?php if ($missing && in_array('comments', $missing)) : ?>
									<span class="formError">You forgot to add any comments.</span>
									<?php endif; ?>
								</label><br>
								<textarea name="comments" id="comments" rows="5" class="input form-control"><?php
								//If php is not on the line above it and strange white space
									if ($errors || $missing) {
										
										echo htmlentities($comments);
									}
								?></textarea>
								
							</p>
						</div>
					</div>
					<p>
						* = Required field<br><br>
						<input type="submit" name="send" id="send" value="Send Comments">
					</p>
				</div>
			
				</div>
			
			</form>
				 
				
				 
				 
			
 
		
		 </div>
	    </div>
  
		</div>
		</div>
		</div>
		</body>
		</html>
 