
<!DOCTYPE HTML PUBLIC>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mediaQuerries.css" rel="stylesheet" type="text/css">
<title>Space Event! | Sky Phenomena</title>
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
       <?php
            include_once("dojo.inc.php");
       ?>

</head>

<body class="tundra">

<div id="pagewrap">

	<header id="header">

		<hgroup>
			<!--<p>
				<img src="logo.png" alt="space event" title="space event" height="60" />
			</p>-->
			<h1><a href="#"><img src="image/logo100px.png" width="100" id="site-logo" /></a></h1>
			<h2 id="site-description">The best about Sky Phenomena</h2>
		</hgroup>

		<nav>
			<?php include_once("_menu.php");?>
		</nav>

		<form id="searchform">
			<input type="search" id="s" placeholder="Search">
		</form>

	</header>
	
	
	<div id="contentauth">
            <center>
                <?php
                    $response = $_GET['response'];
                    $name = $_GET['name'];
                    switch($response) {
                        case '0':
                            echo "<h3>A problem occured: </h3>";
                            echo "<a style='color: red;'>Your mail already exist</a></br>";
                            //echo "<a href=''>Forgot your mail?</a>";
                            break;
                        case '1':
                            echo "<h3>A problem occured: </h3>";
                            echo "<a style='color: red;'>Please check mail format</a></br>";
                            break;
                        case '2':
                            echo "<h3 style='color: #008aff;'>Congratulation " . $name . ": </h3>";
                            echo "<a style='color: red;'>Please check your email to confirm</a></br>";
                            echo "<a style='color: red;'>We've sent you a verification mail.</a></br>";
                            break;
                    }
                ?>
            </center>
	</div>
	

	<footer id="footer">
		<center>
			<p>Space Event | <a href="#">Home</a> | <a href="#">About</a> | <a href="">Facebook</a> | <a href="">Google+</a> | <a href="">Twitter</a> | ESIH team 2014</p>
		</center>
	</footer>
</div>
</body>
</html>
	