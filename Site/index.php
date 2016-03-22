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
	<link rel="icon" href="img/icons/tree.ico">
	
    <title>Jami Schwarzwalder</title>
	
	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Report Card CSS - To display Treehouse Badges -->
	<link rel="stylesheet" href="js/reportcard/css/badges.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic' rel='stylesheet' type='text/css'>
	
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
                        <a href="#skills">Skills</a>
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
        <div class="container desc">
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
                                <i class="fa fa-plus-circle fa-3x"></i>
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
                                <i class="fa fa-plus-circle fa-3x"></i>
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
                                <i class="fa fa-plus-circle fa-3x"></i>
								<p>Wyewood - Nonprofit.<br>Used: Wordpress, HTML5</p>
                            </div>
                        </div>
                        <img src="img/portfolio/Wyewood.png" class="img-responsive" alt="">
                    </a>
                </div>
				<div class="col-sm-4 portfolio-item">
                    <a href="http://jschwarzwalder.greenrivertech.net/wp/badge/vikings-2/" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-plus-circle fa-3x"></i>
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
                                <i class="fa fa-plus-circle fa-3x"></i>
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
                                <i class="fa fa-plus-circle fa-3x"></i>
								<p>Arts Unframed - Educational Event.<br>Used: HTML5</p>
                            </div>
                        </div>
                        <img src="img/portfolio/ArtsUnframed.png" class="img-responsive" alt="">
                    </a>
                </div>
               
            </div>
        </div>
		<div class="col-xs-12 text-center"> <a href="http://jschwarzwalder.neocities.org/projects.html" target="_blank">See more</a></div>
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
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p>I'm web designer & front-end developer with experience leading projects and working with end users of various skill levels.</p>
					<p>I'm interested in all kinds of web development, but my major focus is on designing end user experiences on web, mobile & tablet interfaces.</p>
					<hr >
                    <p> I also have skills in other fields like instruction, usability and project management.</p>
					<p> I care about my team mates, and strive to make my project great through encouraging contributions from everyone.</p>
					<p>I am a life long learner, and am looking for my next challenge.
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
					<h5>Web Developer</h5>
					<h5>	Class Project - Kent Food Bank<br/>
					</h5>
					<p>Scrum Master for 3 Sprints. 
					Worked on team of 3 to implement website using Bootstrap, PHP, jQuery, and MySQL. 
					<br>Utilized Usability tests and Paper Prototypes for Design.
					<br>Team employed Agile methodologies to assign roles on Waffle.io. 
					<br>Used GitHub Repository for version control. </p>
				</div>
				<div class="col-lg-3">
					<h5>JANUARY 2016 - MARCH 2016</h5>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<h5>Web Developer</h5>
					<h5>	Culture Scout<br/>
					</h5>
					<p>Installed and built a customized theme for WordPress that utilized BadgeOS and BuddyPress. </p>
				</div>
				<div class="col-lg-3">
					<h5>DECEMBER 2015</h5>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<h5>Project Manager</h5>
					<h5>Cat's Pajamas <br/>
					</h5>
					<p>Worked with programmers to build a game in Unity within 72 Hours. 
					<br>Designed Levels, performed QA tests, promoted game in community.  
					</p>
				</div>
				<div class="col-lg-3">
					<h5>AUGUST 2015 - PRESENT</h5>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<h5>Web Master</h5>
					<h5>Barony of Wyewood <br/>
					</h5>
					<p>Manage listserv for board members. 
					<br>Organize information on web for better usability. 
					<br>Kept WordPress site up to date with plug-ins and content management.
					</p>
				</div>
				<div class="col-lg-3">
					<h5>JANUARY 2015 - PRESENT</h5>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<h5>Librarian</h5>
					<h5>	Pierce County Library System <br/>
					</h5>
					<p>Developed and Implemented Services for 19 locations. 
					<br>Provided Outreach Support to 13 School Districts. 
					<br>Lead 3 Annual Projects. Served on cross departmental committees. 
					<br>Worked with end user to troubleshoot common technology issues.
					<br>Tested website features and desktop images before staff launch. 
					</p>
				</div>
				<div class="col-lg-3">
					<h5>MAY 2007 - PRESENT</h5>
				</div>
		</div><!--/.row -->
		<br>
		<hr class="star-primary">
	</div><!--/.container -->
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<h5>Web Application Development</h5>
						<p>Green River Community College <br/>
						<i>1 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<h5>GRADUATING IN MARCH 2017</h5>
					<h5><span class="highlight ">IN PROGRESS</span></h5>
					</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<h5>Master of Information Science</h5>
						<p>Indiana University <br/>
						<i>2 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<h5>MAY 2007</h5>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<h5>Bachelors of Science</h5>
						<p>Butler University <br/>
						<i>4 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<h5>MAY 2005</h5>
				</div>
	
		</div><!--/.row -->
	</div><!--/.container -->
	<!--Download Resume as PDF -->
	<div class="container desc">
		<div class="row">
		<hr class="star-primary">
			<div class="col-lg-4 col-lg-offset-4 text-center">
				<h5><a href="resume.pdf" target="_blank"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></h5>
			</div>
		</div>
	</div><!--/.container -->
	</section>
	
    
	<section  class="success"  id="skills" name="skills">
		<div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Skills</h2>
                    <hr class="star-light">
					
						<div class="report-card treehouse"></div>
						<div class="report-card codeschool"></div>
						
			
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Section -->
    <section  id="contact">
        <div class="container desc">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
					<form id="contactForm" action="mail/contact_me.php" method="post" > <!--<?= $_SERVER['PHP_SELF']; ?>-->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control desc" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name." value="<?php echo htmlentities($name); ?>">
                                <?php if ($_POST && $Er_name) : ?>
									<p class="help-block text-danger">Please enter your name.</p>
								<?php endif; ?>
								
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control desc" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address." value="<?php echo htmlentities($email); ?>">
                                <?php if ($_POST && $Er_email) : ?>
								<p class="help-block text-danger">Please enter your email address.</p>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control desc" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." value="<?php echo htmlentities($phone); ?>">
                                <?php if ($_POST && $Er_phone) : ?>
								<p class="help-block text-danger">Please enter your phone number.</p>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control desc" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message." value="<?php echo htmlentities($message); ?>"></textarea>
                                <?php if ($_POST && $Er_message) : ?>
								<p class="help-block text-danger">Please enter a message.</p>
								<?php endif; ?>
                            </div>
                        </div>
                        <br>
						
							<div id="success"></div>
						
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="submit" id="submit" class="btn btn-outline btn-lg">Send</button>
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
							
                        </ul>
                    </div>
					<div class="footer-col col-md-2 ">
                        <h3>Login</h3>
						<p><a href="admin/" class="btn-social btn-outline"><i class="fa fa-fw fa-sign-in"></i></a></p>
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


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
	

	<!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
	
	<!-- Report Card JS - To display Treehouse Badges -->
	<script src="js/reportcard/js/reportcard.js"></script>
	
	
	<script>
		
	 function  showPhotos (){  
	   $(this).find('span').slideToggle(); 
	 };
	 
	
	$(document).ready(function() {
	  $('#tour').on('click', 'button', function() {
		$('.photos').slideToggle();
	  });
	 
	  $('.photos').on('mouseenter', 'li', showPhotos);
	  $('.photos').on('mouseleave', 'li', showPhotos);
	  
	   // Using reportcard.js with Treehouse
	$('.report-card.treehouse').reportCard({
		userName: 'jamischwarzwalder',
		site: 'treehouse',
		badgesAmount: 7
	});
	$('.report-card.codeschool').reportCard({
		userName: 'Eiseldora',
		site: 'codeschool',
		badgesAmount: 7
	});
		
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
	  

	});
	
	
	</script>

</body>

</html>
