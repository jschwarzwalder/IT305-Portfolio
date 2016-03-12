<?php
	/* Jami Schwarzwalder
	*  3/16/2016
	*  Portfolio
	* 
	*/
	
	//Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  
	//Process the form…
	$name="";
	$phone="";
	$email="";
	$message="";
	$thanks = false;
					   
	
	 
		
	
?>
			
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jami Schwarzwalder</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Jami Schwarzwalder</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
					<li class="page-scroll">
                        <a href="#resume">Resume</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Jami Schwarzwalder</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Instructional Designer - User Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="http://teambinary.greenrivertech.net/" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
								<p>Kent Food Bank - Nonprofit.<br>Used: Bootstrap, PHP/MySQL, HTML5</p>
                            </div>
                        </div>
                        <img src="img/portfolio/KFB.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="http://thecatspajamas.neocities.org/" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
								<p>Cat's Pajamas - Indie Game Team.<br>Used: Bootstrap, HTML5</p>
                            </div>
                        </div>
                        <img src="img/portfolio/CatsPJs.png" class="img-responsive" alt="">
                    </a>
                </div>
                 <div class="col-sm-4 portfolio-item">
                    <a href="http://www.wyewood.org/wp/" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
								<p>Wyewood - Nonprofit.<br>Used: Wordpress, HTML5</p>
                            </div>
                        </div>
                        <img src="img/portfolio/Wyewood.png" class="img-responsive" alt="">
                    </a>
                </div>
				<div class="col-sm-4 portfolio-item">
                    <a href="http://dev.gogrowabroad.com/" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
								<p>Culture Scout - Startup.<br>Used: Wordpress, PHP</p>
                            </div>
                        </div>
                        <img src="img/portfolio/CultureScout.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="http://sh2015christmas.neocities.org/" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
								<p>Christmas Card - Nonprofit.<br>Used: HTML, CSS</p>
                            </div>
                        </div>
                        <img src="img/portfolio/SH2015.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="http://arts-unframed.weebly.com/" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
								<p>Arts Unframed - Educational Event.<br>Used: HTML5</p>
                            </div>
                        </div>
                        <img src="img/portfolio/ArtsUnframed.png" class="img-responsive" alt="">
                    </a>
                </div>
               
            </div>
        </div>
		<div class="col-xs-12 text-center"> <a href="http://jschwarzwalder.neocities.org/projects.html">See more</a></div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>I'm web designer & front-end developer with experience leading projects and working with end users of various skill levels. <br>I'm interested in all kinds of web development, but my major focus is on designing end user experiences on web, mobile & tablet interfaces.</p>
                </div>
                <div class="col-lg-4">
                    <p> I also have skills in other fields like instruction, usability and project management.<br> I care about my team mates, and strive to make my project great through encouraging contributions from everyone. <br>I am a life long learner, and am looking for my next challenge.
					</p>
                </div>
               
            </div>
        </div>
    </section>
	
	<!--RESUME SECTION -->
	<section id="resume" name="resume">
	<!--Resume Section -->
	<div class="container desc">
		<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Experience</h2>
                    <hr class="star-primary">
					
                </div>
            </div>
            <div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				
				<div class="col-lg-6">
					<p><t>Web Developer</t><br/>
						Class Project - Kent Food Bank<br/>
					</p>
					<p><t>Scrum Master for 3 Sprints. </t>
					<more>Worked on team of 3 to implement website using Bootstrap, PHP, jQuery, and MySQL. 
					<br>Utilized Usability tests and Paper Prototypes for Design.
					<br>Team employed Agile methodologies to assign roles on Waffle.io. 
					<br>Used GitHub Repository for version control. </more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JANUARY 2016 - MARCH 2016</sm></p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Web Developer</t><br/>
						Culture Scout<br/>
					</p>
					<p><more>Installed and built a customized theme for WordPress that utilized BadgeOS and BuddyPress. </more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>DECEMBER 2015</sm></p>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Producer</t><br/>
						Cat's Pajamas <br/>
					</p>
					<p><more>Worked with programmers to build a game in Unity within 72 Hours. 
					<br>Designed Levels, performed QA tests, promoted game in community.  
					</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>AUGUST 2015 - PRESENT</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Web Master</t><br/>
						Barony of Wyewood <br/>
					</p>
					<p><more>Manage listserv for board members. 
					<br>Organize information on web for better usability. 
					<br>Kept WordPress site up to date with plug-ins and content management.
					</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JANUARY 2015 - PRESENT</sm></p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Librarian</t><br/>
						Pierce County Library System <br/>
					</p>
					<p><more>Developed and Implemented Services for 19 locations. 
					<br>Provided Outreach Support to 13 School Districts. 
					<br>Lead 3 Annual Projects. Served on cross departmental committees. 
					<br>Worked with end user to troubleshoot common technology issues.
					<br>Tested website features and desktop images before staff launch. 
					</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>MAY 2007 - PRESENT</sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Web Application Development</t><br/>
						Green River Community College <br/>
						<i>1 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>GRADUATING IN MARCH 2017</sm><br/>
					<imp><sm>IN PROGRESS</sm></imp>
					</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Master of Information Science</t><br/>
						Indiana University <br/>
						<i>2 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>MAY 2007</sm></p>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Bachelors of Science</t><br/>
						Butler University <br/>
						<i>4 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>MAY 2005</sm></p>
				</div>
	
		</div><!--/.row -->
		
	</div><!--/.container -->
	</section>
	
    <!-- Contact Section -->
    <section class="success" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
					<form id="contactForm" action="mail/contact_me.php" method="post" > <!--<?= $_SERVER['PHP_SELF']; ?>-->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name." value="<?php echo htmlentities($name); ?>">
                                <?php if ($_POST && $Er_name) : ?>
									<p class="help-block text-danger">Please enter your name.</p>
								<?php endif; ?>
								
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address." value="<?php echo htmlentities($email); ?>">
                                <?php if ($_POST && $Er_name) : ?>
								<p class="help-block text-danger">Please enter your email address.</p>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." value="<?php echo htmlentities($phone); ?>">
                                <?php if ($_POST && $Er_phone) : ?>
								<p class="help-block text-danger">Please enter your phone number.</p>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message." value="<?php echo htmlentities($message); ?>"></textarea>
                                <?php if ($_POST && $Er_message) : ?>
								<p class="help-block text-danger">Please enter a message.</p>
								<?php endif; ?>
                            </div>
                        </div>
                        <br>
						
							<div id="success"></div>
						
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Seattle, WA</p>
                    </div>
                    <div class="footer-col col-md-6">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            
                            <li>
                                <a href="https://www.linkedin.com/in/jschwarzwalder" class="btn-social btn-outline"  target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
							 <li>
                                <a href="https://github.com/jschwarzwalder" class="btn-social btn-outline"  target="_blank"><i class="fa fa-fw fa-github"></i></a>
                            </li>
							<li>
                                <a href="https://bitbucket.org/jschwarzwalder" class="btn-social btn-outline"  target="_blank"><i class="fa fa-fw fa-bitbucket"></i></a>
                            </li>
                           <li>
                                <a href="http://2015.teensummerchallenge.org/" class="btn-social btn-outline"  target="_blank"><i class="fa fa-fw fa-wordpress"></i></a>
                            </li>
							<li>
                                <a href="https://teamtreehouse.com/jamischwarzwalder" class="btn-social btn-outline"  target="_blank"><i class="fa fa-fw fa-code"></i></a>
                            </li>
                       
							<li>
                                <a href="http://greenriverdevs.slack.com/" class="btn-social btn-outline"  target="_blank"><i class="fa fa-fw fa-slack"></i></a>
                            </li>
                        </ul>
                    </div>
                   
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Jami Schwarzwalder 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Phone Number Validation JavaScript -->
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	
	<script>
	jQuery.validator.setDefaults({
		debug: true,
		success: "valid"
	  });
	  $( "#contactForm" ).validate({
		rules: {
		  field: {
			required: true,
			phoneUS: true
		  }
		}
	  });
	</script>
	<!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
	
	<script>
	 function  showPhotos (){  
	   $(this).find('span').slideToggle(); 
	 }

	$(document).ready(function() {
	  $('#tour').on('click', 'button', function() {
		$('.photos').slideToggle();
	  });
	 
	  $('.photos').on('mouseenter', 'li', showPhotos);
	  $('.photos').on('mouseleave', 'li', showPhotos);
	});
	
	
	</script>

</body>

</html>
