<?php
	/* Jami Schwarzwalder
	 *  3/16/2016
	 *  Portfolio - See Contact Messages
	 */

	
	 
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Bootstrap for dataTables -->
		<link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css"
          rel="stylesheet">

</head>

<body id="page-top" class="index">



<div class="container-fluid">	


	
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
			<!-- Messages from Contact Form -->
			<h3>Contact Form</h3>
			<?php
				//Connect to database
				require '/home/jschwarzwalder/db.php';


			   //Define the SELECT query
				$sql = "SELECT * FROM `Portfolio_Contacts` ORDER BY sent DESC";
				// SELECT `index`, `sent`, `name`, `email`, `phone`, `message` FROM `Portfolio_Contacts` ORDER BY sent DESC

				//Send the query to the database
				$result = @mysqli_query($cnxn, $sql);


				echo '<table width="100%" class="table table-bordered table-striped" id="contact_me">';
				echo '<thead>';
				echo '<tr><th class="">Name</th>';
				echo '<th class="">Phone</th><th class="">Email</th>';
				echo '<th class=" hidden-xs">Message</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				//Process the rows
				while ($row = mysqli_fetch_assoc($result)) {


					$name = htmlentities($row['name']);
					$sent = htmlentities($row['sent']);
					$message = htmlentities($row['message']);
					$phone = htmlentities($row['phone']);
					$email = htmlentities($row['email']);

					//Print rows
					echo  "<tr><td> $name </td>";
					echo "<td> $phone</td>";
					echo "<td> $email</td>";
					echo "<td class='hidden-xs'>$message</td>";
					echo '</tr>';
					
				}     
					echo '</tbody></table>';


			?>
			<p>Back to  <a href="../index.php">Portfolio</a>.</p>

			</div>
		</div>
	</div>
</div>
	<!-- Bootstrap core JavaScript -->
    <!-- ================================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	
	  
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="//maxcdn.bootstrapcdn.com/3.3.6/js/bootstrap.min.js"></script>
      <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
      

	<script>
		//$('#contact_me').DataTable();    
	</script>

</body>
</html>
