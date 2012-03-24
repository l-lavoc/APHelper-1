<? 
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Healthshare - Equal Healthcare Now</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="../bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="index.html">Healthshare</a>
          <ul class="nav">
            <li class="active"><a href="profile.php">Profile</a></li>
            <li><a href="share.php">Share</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="request.php">Request</a></li>
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

	<div class="container">
      <div class="content">
      
        <div class="row">
		  <div class="span4">
			<img src="../images/unknown.jpg" alt="profile picture" width="200px" height="180px">
		  </div>
          <div class="span12">
            <div class="page-header">
			  <h1>Dr. Bones of New York Presbyterian Hospital</h1>
			</div>
            <div class="span5">
            	<h2>Urgent Requests</h2>
            	<br/>
            	<p>We are in desperate need of stethoscopes and bandages : from Alameda Hospital—Alameda</p>
            	<br/>
            	<p>Please help us by sharing your old MRI machines : from Alta Bates Summit Medical Center—Berkeley</p>
            </div>
          </div>
        </div>
      </div>
     </div>
        <hr>
        <footer>
          <p>&copy; 2012 Healthshare</p>
        </footer>
      </div>
    </div>

  </body>
</html>