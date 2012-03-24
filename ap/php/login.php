<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
	$query = "SELECT email,pass FROM members
				WHERE email='$email' AND pass='$pass'";
	
	if(mysql_num_rows(queryMysql($query)) == 0) {
		$error = "Username/Password invalid";
	} else {
		$_SESSION['email'] = $email;
		$_SESSION['pass'] = $pass;
		//return the 
	}
?>
