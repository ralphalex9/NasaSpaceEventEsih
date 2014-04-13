
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
       <?php include_once("dojo.inc.php");?>

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
	
	
	<div id="content">

			<!--<header>
				<h1 class="post-title"><a href="#">Red sky</a></h1>
				<p class="post-meta"><time class="post-date" datetime="2011-05-08" pubdate>May 8, 2011</time> <em>in</em> <a href="#">Category</a></p>
			</header>
			<figure class="post-image"> 
				<img src="images/sample-image.jpg" /> 
			</figure>
			<button dojoType="dijit.form.Button" title="Ajoutez un Auteur" id="addAuthor" onclick="dijit.byId('addAuth').show()">Test</button>-->

	</div>
	
	
	<aside id="sidebar">

		<section class="news">
			<h4 class="alert">Recent News</h4>
			<ul>
				<li><a href="#">Meteo</a></li>
				<li><a href="#">Spatial mission</a></li>
				<li><a href="#">Constellations </a></li>
                <li><a href="#">Moon Phenomena </a></li>
			</ul>
		</section>
		

		<section class="news spac">
			<h4 class="alert">Subscribe our Newsletter</h4>
		
			<li>
				<form id="frm" action="controlClient.php?action=registerClient" method="POST">
					<input type="text" name="nom" placeholder="Full Name" id="name" class="inText" required /><br/>
					<input type="text" name="email" placeholder="Your e-mail here" id="mail" class="inText" required/><br/>
					<input type="submit" name="Subscribe" value="Subscribe" class="login"/>
					
				</form>

			</li>
		<br>
		
		<li><h4 class="alert">Follow us on:</h4></li>	
		<li><a href="https://twitter.com/nasaspacesih"><img src="image/twitter.png" height="25"/></a>
		<a href="https://www.facebook.com/pages/Esih-Space-Apps-Challenge/747349095298787"><img src="image/facebook.png" height="25"/></a>
		<a href="https://plus.google.com/u/0/b/110734633034018752723/110734633034018752723/posts"><img src="image/google.png" height="25"/></a>
		</li>
		
		</section>
		
		<section class="news spac">
		      <div id="cont_a0e7daf6cb5707f33b796c62e2ba7b6a" style="border: none;">
                        <span id="h_a0e7daf6cb5707f33b796c62e2ba7b6a"><a id="a_a0e7daf6cb5707f33b796c62e2ba7b6a" href="http://www.yourweather.co.uk/" target="_blank" style="color:#808080;font-family:2;font-size:14px;">Meteo</a> Port-au-Prince</span>
			<script type="text/javascript" src="http://www.yourweather.co.uk/wid_loader/a0e7daf6cb5707f33b796c62e2ba7b6a"></script>
                      </div>
		</section>
		
	</aside>

	<?php include_once("_footer.php");?>
	<div id="addAuth" dojoType="dijit.Dialog" style="width: 500px; height: 300px;" title=""></div>

</div>
</body>
</html>
	