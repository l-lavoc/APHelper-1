<?php
    $first = $_POST['first'];
    $last = $_POST['last'];
    $hosp = $_POST['organ'];
    $email = $_POST['email'];
    $passOne = $_POST['pass'];
    $passTwo = $_POST['passTwo'];
    $from = 'From: Healthshare Confirmation'; 
    $healthshare = 'healthshareinfo@gmail.com'; 
    $subject = 'Healthshare Registration Confirmation';
    
    $body = "To: $first $last\n From: $healthshare\n Message:\n Welcome to Healthshare!";
    
    if ($_POST['submit']) {
    	if(strpos($hosp, "Hospital")) {
			//if ($first != '' && $last != '' && $email != '' && $passOne != '' && $passTwo != '') {
				if($passOne == $passTwo) {
					if (mail ($email, $subject, $body, $from)) { 
						echo '<p>You have been registered. Please confirm your email address.</p>';
					} else { 
						echo '<p>Something went wrong. Please try again.</p>'; 
					}
				} else {
					echo '<p>Your passwords do not match.</p>';
			} //else {
				//echo '<p>You need to fill in at least your name, email, and password please</p>';
			//}
		} else {
		 echo '<p>You are not registered with a valid Hospital!</p>';
		}
	}
?>
