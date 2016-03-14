<?php
session_start();
require '/home/jschwarzwalder/db.php';
$loginMessage	= "";
	 if(isset($_POST['submit'])){
		if(isset($_POST['username']) && isset($_POST['pword'])){
            $sql = sprintf("SELECT * FROM admins WHERE username='%s'",
            mysqli_real_escape_string($cnxn, $_POST['username'])
        );

        $result = mysqli_query($cnxn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row){

            $hash = $row['password'];

            if($_POST['pword'] == $hash) {

                $_SESSION['jschwarzwalder_username'] = $row['username'];

                header('Location: index.php');

            }else{
                $loginMessage	= "<span>Login failed</span>";
            }

        } else {
                $loginMessage	= "<span>Login failed</span>";
        }

	}
		mysqli_close($cnxn);
}
?>
