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
      .photoHolder{float:left;background:url(../images/aboutUsPictureFrame.png) no-repeat top center;width:214px;height:287px;padding:20px 0 0 32px;}.photoHolder img{border:1px solid #E2E2E2;}
      .simpleSlide-slide div{
	width: 557px;
	height: 282px;
	position: relative;
}

.simpleSlide-window {
	border: 1px solid #FCF4F4;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
}

.slideshow {
	position: relative;
	overflow: auto;
}

.left-button {
	background-image:url("../images/left-arrow.png");	
}

.right-button {
	background-image:url("../images/right-arrow.png");
	right: 1px;
}

.left-button, .right-button {
	cursor:pointer;
	height:72px;
	position:absolute;
	width:50px;
	display: none;
	z-index: 9999;
	top:50%;
	margin-top: -36px;
}

.slide_headline {
	color:#FCF4F4;
	font-size:46px;
	font-weight:bold;
	letter-spacing:-0.04em;
	top: 20px;
	left: 20px;
	position: absolute;
}

.body_headline {
	color:#FCF4F4;
	font-size:46px;
	font-weight:bold;
	letter-spacing:-0.04em;
}

.slide_number {
	color:#FCF4F4;
	font-size:180px;
	font-weight:bold;
	right:400px;
	top:100px;
	position:absolute;
	text-align: right;
}
	
.slide_copy {
	color:#FCF4F4;
	left:159px;
	top:111px;
	position:absolute;
	width:375px;
	line-height: 22px;
}
.simpleSlideStatus-tray {
	margin: 5px auto;
}
    </style>
    
    <!-- Le Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="../js/simpleSlide.js" type="text/javascript"></script>

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
          <a class="brand" href="../html/index.html">Healthshare</a>
          <ul class="nav">
            <li><a href="../html/index.html">Home</a></li>
            <li><a href="../html/about.html">About Us</a></li>
            <li><a href="../html/participate.html">Participate</a></li>
            <li><a href="../html/login.html">Login</a></li>
            <li class="../html/active"><a href="analytics.html">Analytics</a></li>
            <li><a href="../html/contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

      <div class="content">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
           <div id="main">
			  <div class="page-header">
				<h1>Analytics <small>Learn more about inequality in our health systems!</small></h1>
			  </div>
			  <div class="row">
			  
			  	<div class="span-two-thirds">
				  <h3>See how your hospital in your state fares</h3>
				                 <td width="*" valign="top" scope="col" class="pagecontent">
                    <form action="../php/analytics.php" method="GET">
                        <input type="hidden" name="menuId" id="menuId" value="5"/>
                        <input type="hidden" name="level" id="level" value="0"/>
                 
                        <h3>To start, select a State:</h3>
                        <div align="center">
                        	<label for="stname">&nbsp;</label>
                            <select name="state" id="stname">
                                <option selected="selected" value="">Georgia</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                            <input type="submit" value="Submit"/>
                        </div>
                        <div align="center">
                            
                            <img src="../images/GA_0_N_Speedo.gif" width="475" height="313" alt="United States Map" title="United States Map" border="0" usemap="#map">
                        </div>
                    </form>
                </td>
                <!-- spacing cell -->
                <td width="12" valign="top" scope="col">&nbsp;</td>
            </tr>
        </table>
			  </div><!-- /row -->
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

