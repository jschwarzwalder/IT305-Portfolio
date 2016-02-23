<?php
	//Connect to database
	require '../pcls_db.php';

    
   //Define the SELECT query
    $sql = "SELECT * FROM volunteer";

	//Send the query to the database
    $result = @mysqli_query($cnxn, $sql);

	
	echo '<table>';
	echo '<tr><th>Name</th><th>Email</th>';
	//echo '<th>Summer Reading</th><th>Reading Buddies</th><th>Code Mentor</th><th>Volunteering</th>';
	echo '<th>Phone</th><th>Comments</th>';
	echo '</tr>';
	//Process the rows
    while ($row = mysqli_fetch_assoc($result)) {

       
        $fname = $row['fname'];
        $lname = $row['lname'];
		$phone = $row['phone'];
        $email = $row['email'];
        $summer = $row['summer'];
		$reading = $row['reading'];
		$coding = $row['coding'];
		$general = $row['general'];
		$comments = $row['comment'];
		
        
		echo  "<tr><td> $fname $lname </td><td>  $email</td>";
		// echo '<td>';
		// if ('summer'){
			// echo ' Summer Reading ';
		// } 
		// echo '</td><td>';
		// if ('reading'){
			// echo ' Reading Buddies ';
		// }
		// echo '</td><td>';
		// if ('coding'){
			// echo ' Code Mentor ';
		// }
		// echo '</td><td>';
		// if ('general'){
			// echo ' Volunteering ';
		// }
		echo "<td> $phone</td>";
		echo "<td> $comments</td>";
		
		// echo '</td>';   
		echo '</tr>';		
	}     
		
	echo '</table>';
?>