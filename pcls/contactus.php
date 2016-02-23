<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'email', 'comments'];
    $recipient = 'Tina Ostrander <tostrander@greenriver.edu >';
	$subject = 'Feedback from online form';
	$headers = [];
    $headers[] = 'From: kentfoodbank@gmail.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fkentfoodbank@gmail.com';
    require './includes/process_mail.php';
    if ($mailSent) {
        //header('Location: contact-thank-you.php');
       // exit;
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kent Food Bank & Emergency Services</title>



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
	<div class="main">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xs-12 col-lg-offest-1 col-lg-10">
                <h2>Pierce COunty Library</h2>
            </div>
        </div>
	
        <div class="row ">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

			<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
				<h2 class="formError">Sorry, your mail couldn't be sent.</h2><br>
			<?php elseif ($errors || $missing) : ?>
				<h2 class="formError">Please fix the item(s) indicated:</h2>
			<?php endif; ?>
			<?php
					if ($_POST && $mailSent) {
						echo "<div class='row '>
								<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
										<p class='form-confirm'>Your message has been sent. Thank you!</p>
								</div>
							</div>";
					}
				?>
			
			<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" role="form">
			 <div class="row ">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
					<div class="form-group">
						
								<div class="col-xs-12">
									<p>
								<label for="name">
								<?php if ($missing && in_array('name', $missing)) : ?>
								<span class="formError">Please enter your name.</span>
								<?php endif; ?>
								<br>Name*
							</label><br>
						
							<input type="text" name="name" id="name"  class="input form-control 
							<?php
								if ($errors || $missing) {
									echo 'has-error has-feedback" ';
									echo 'value="' . htmlentities($name) . '"';
								} else {
									echo '"';
								}
							?>
							>
							</p>
							</div>
						
					</div>
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
						<p><label for="subject">Interest</label><br>
						<input type="text" name="subject" id="subject" class="form-control
						<?php
							if ($errors || $missing) {
								echo 'has-error has-feedback" ';
								echo 'value="' . htmlentities($subject) . '"';
							} else {
									echo '"';
								}
						?> >
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
								//If php is not on the line above it ands strange white space
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
 