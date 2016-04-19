<?php
session_start();
?>
<html>
<head>
<link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Main">
<div> <img src="Images/Logo.png" alt="Logo"></div>
<nav class="navbar navbar-inverse" id="inverse1">
   <div>
      <ul class="nav nav-pills nav-justified">
	      <li><a href="Design.php">Home</a></li>
         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">News<span class = "caret"></span>
            </a>
            <ul class = "dropdown-menu">
               <li><a href = "XboxOne.php">Xbox One</a></li>
               <li><a href = "PS4.php">PlayStation 4</a></li>
               <li><a href = "PC.php">PC</a></li>
               <li><a href = "Wii.php">Nintendo Wii</a></li>
               <li><a href = "Xbox360.php">Xbox 360</a></li>			   
               <li><a href = "PS3.php">PlayStation 3</a></li>			   
               <li><a href = "DS.php">Nintendo DS</a></li>			
            </ul>
        </li>
    <li class="active"><a href="Review.php">Reviews</a></li>
    <li><a href="Videos.php">Videos</a></li>
    <li><a href="Price.php">Prices</a></li>
    <li><a href="Profile.php">Profile</a></li>
    <li><a href="Forum.php">Forum</a></li>	
      </ul>
   </div>
</nav>
<nav class="navbar navbar-inverse" id="inverse2">
   <div>
      <ul class="nav nav-pills nav-justified">
	  <?php
	  if (!isset($_SESSION['username'])) {
	echo "<li><a href='Register.php'><span class='glyphicon glyphicon-user'></span> Register</a></li>
      <li><a href='Login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
		";
} else {
	echo "You are logged is as ".$_SESSION['username']." <a href='LoggingOut.php'>Logout</a>";
}
?>
      </ul>
   </div>
</nav>
<form action="Results.php" method="get">
<input type="text" id="search" name="value" placeholder="Search">
<input type="submit" name="search" value="Search">
</form>
<nav class="navbar navbar-inverse nav-stacked">
  <div class="container-fluid">
  <ul class="nav nav-pills">
<h4 align="center" color="red">Coming Soon</h4>
<li align="center">
<a href="PS43.php">Dark Souls 3</a>
<a href="PC3.php">Lego Star Wars: The Force Awakens</a>	
<a href="Wii3.php">Uncharted 4: A Thiefs End</a>
<a href="Wii3.php">Doom</a>
<a href="Wii3.php">Overwatch</a>
<a href="Wii3.php">Mirrors End Catalyst</a>
</li>
  </ul>
	</nav>	
<nav class="navbar navbar-inverse nav-stacked">
  <div class="container-fluid">
  <ul class="nav nav-pills">
<h4 align="center">Top 5 Games of 2015</h4>
<li align="center">
<a href="XboxOne3.php">Witcher 3: Wild Hunt</a>
<a href="PS43.php">Grand Theft Auto: V</a>
<a href="PC3.php">Fallout 4</a>	
<a href="Wii3.php">Metal Gear Solid V: The Phantom Pain</a>
<a href="Wii3.php">The Legend of Zelda: Majora's Mask</a>
</li>
  </ul>
	</nav>
<div id="Content">
<h2>Latest Critic Reviews</h2>
<h5>Or <a href='UserReviews.php'>click here</a> to submit your own user reviews</h5>
<table class="table table-striped">
<tr>
	<th  BGCOLOR="#A0A0A0">
    <font face="verdana" size="4px"><a href="Reviews/Fallout4.php">Witcher 3: Wild Hunt</a></font>
	<img src ="Images/Witcher_3_cover_art.jpg"></img>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<br>
	<h4><a href="http://uk.ign.com/articles/2015/05/12/the-witcher-3-the-wild-hunt-review" target="_blank"><img src="Images/Ign-logo.png"></img>IGN: 9.3/10</a></h4> <br>
	<h4><a href="http://www.gamespot.com/the-witcher-3-wild-hunt/reviews/" target="_blank"><img src="Images/gamespot-logo.png"></img>Gamespot: 10/10</a></h4><br>
	<h4><a href="http://www.gamesradar.com/witcher-3-wild-hunt-review/" target="_blank"><img src="Images/gr_logo_tumblr.png"></img>GamesRadar: 4/5</a></h4>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<br>
	<h4><a href="http://www.metacritic.com/game/playstation-4/the-witcher-3-wild-hunt" target="_blank"><img src="Images/meta.jpg"></img>Metacritic: 92/100</a></h4><br>
	<h4><a href="http://www.eurogamer.net/articles/2015-05-18-the-witcher-3-wild-hunt-review" target="_blank"><img src="Images/Eurogamer_new_article.jpg"></img>Eurogamer:5/5</a></h4><br>	
	<h4><a href="http://www.polygon.com/2015/5/13/8533059/the-witcher-3-review-wild-hunt-PC-PS4-Xbox-one" target="_blank"><img src="Images/Logo_of_Polygon.png"></img>Polygon: 8/10</a></h4>
	</th>
</tr>

<tr>
	<th BGCOLOR="#A0A0A0">
    <font face="verdana" size="4px"><a href="Reviews/Fallout4.php">GTA V</a></font>
	<img src ="Images/CoverArt-GTAV.png"></img>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<h4><a href="http://uk.ign.com/articles/2013/09/16/grand-theft-auto-v-review" target="_blank"><img src="Images/Ign-logo.png"></img>IGN: 10/10</a></h4><br>
	<h4><a href="http://www.gamespot.com/reviews/grand-theft-auto-5-ps4-xbox-one-pc-review/1900-6415959/" target="_blank"><img src="Images/gamespot-logo.png"></img>Gamespot: 9/10</a></h4><br>
	<h4><a href="http://www.gamesradar.com/gta-5-review/" target="_blank"><img src="Images/gr_logo_tumblr.png"></img>GamesRadar: 5/5</a></h4>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<h4><a href="http://www.metacritic.com/game/playstation-4/grand-theft-auto-v" target="_blank"><img src="Images/meta.jpg"></img>Metacritic: 97/100</a></h4><br>
	<h4><a href="http://www.eurogamer.net/articles/2013-09-16-grand-theft-auto-5-review" target="_blank"><img src="Images/Eurogamer_new_article.jpg"></img>Eurogamer: 9/10</a></h4><br>	
	<h4><a href="http://www.polygon.com/2013/9/16/4720458/gta-5-review-grand-theft-auto" target="_blank"><img src="Images/Logo_of_Polygon.png"></img>Polygon: 9.5/10</a></h4>
	</th>
</tr>

<tr>
	<th BGCOLOR="#A0A0A0">
    <font face="verdana" size="4px"><a href="HUBArea/Fallout4.php">Fallout 4</a></font>
	<img src ="Images/Fallout_4_box_cover.jpg"></img>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<h4><a href="http://uk.ign.com/articles/2015/11/09/fallout-4-review" target="_blank"><img src="Images/Ign-logo.png"></img>IGN: 9.5/10</a></h4><br>
	<h4><a href="http://www.gamespot.com/fallout-4/reviews/" target="_blank"><img src="Images/gamespot-logo.png"></img>Gamespot: 9/10</a></h4><br>
	<h4><a href="http://www.gamesradar.com/fallout-4-review/" target="_blank"><img src="Images/gr_logo_tumblr.png"></img>GamesRadar: 5/5</a></h4>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">	
	<h4><a href="http://www.metacritic.com/game/xbox-one/fallout-4" target="_blank"><img src="Images/meta.jpg"></img>Metracritic: 88/100</a></h4><br>
	<h4><a href="http://www.eurogamer.net/articles/2015-11-09-fallout-4-review" target="_blank"><img src="Images/Eurogamer_new_article.jpg"></img>Eurogamer: 4/5</a></h4><br>
	<h4><a href="http://www.polygon.com/2015/11/9/9648824/fallout-4-review-xbox-one-PS4-PC" target="_blank"><img src="Images/Logo_of_Polygon.png"></img>Polygon: 9.5/10</a></h4>
	</th>
</tr>

<tr>	
	<th BGCOLOR="#A0A0A0">
    <font face="verdana" size="3px"><a href="Reviews/Fallout4.php">Metal Gear Solid V: The Phantom Pain</a></font>
	<img src ="Images/Metal_Gear_Solid_V_The_Phantom_Pain_cover.png"></img>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<br>
	<h4><a href="http://uk.ign.com/articles/2015/08/24/metal-gear-solid-5-the-phantom-pain-review" target="_blank"><img src="Images/Ign-logo.png"></img>IGN: 10/10</a></h4><br> 
	<h4><a href="http://www.gamespot.com/reviews/metal-gear-solid-v-the-phantom-pain-review/1900-6416224/" target="_blank"><img src="Images/gamespot-logo.png"></img>Gamespot: 10/10</a></h4><br>
	<h4><a href="http://www.gamesradar.com/metal-gear-solid-5-phantom-pain-review/" target="_blank"><img src="Images/gr_logo_tumblr.png"></img>GamesRadar: 5/5</a></h4>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<br>
	<h4><a href="http://www.metacritic.com/game/playstation-4/metal-gear-solid-v-the-phantom-pain" target="_blank"><img src="Images/meta.jpg"></img>Metacritic: 93/100</a></h4><br>
	<h4><a href="http://www.eurogamer.net/articles/2015-09-01-metal-gear-solid-5-the-phantom-pain-review" target="_blank"><img src="Images/Eurogamer_new_article.jpg"></img>Eurogamer: 5/5</a></h4><br>
	<h4><a href="http://www.polygon.com/2015/8/27/9207599/metal-gear-solid-5-the-phantom-pain-review-ps4-xbox-one-PC" target="_blank"><img src="Images/Logo_of_Polygon.png"></img>Polygon: 9/10</a></h4>
	</th>
</tr> 

<tr>	
	<th BGCOLOR="#A0A0A0">
    <font face="verdana" size="4px"><a href="Reviews/Fallout4.php">The Legend Of Zelda: Majora's Mask</a></font>
	<img src ="Images/Majora's_Mask_3D_(EU).jpg"></img>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">
	<h4><a href="http://uk.ign.com/articles/2015/02/04/the-legend-of-zelda-majoras-mask-3d-review" target="_blank"><img src="Images/Ign-logo.png"></img>IGN: 8.7/10</a></h4> <br>
	<h4><a href="http://www.gamespot.com/reviews/the-legend-of-zelda-majora-s-mask-3d-review/1900-6416013/" target="_blank"><img src="Images/gamespot-logo.png"></img>Gamespot: 9/10</a></h4><br>
	<h4><a href="http://www.gamesradar.com/the-legend-of-zelda-majoras-mask-3d-review/" target="_blank"><img src="Images/gr_logo_tumblr.png"></img>GamesRadar: 4.5/5</a></h4>
	</th>
	<th  BGCOLOR="#F8F8F8" width="620">	
	<h4><a href="http://www.metacritic.com/game/3ds/the-legend-of-zelda-majoras-mask-3d" target="_blank"><img src="Images/meta.jpg"></img>Metacritic: 89/100</a></h4><br>
	<h4><a href="http://www.eurogamer.net/articles/2015-02-10-the-legend-of-zelda-majoras-mask-3d-review" target="_blank"><img src="Images/Eurogamer_new_article.jpg"></img>Eurogamer: 4/5</a></h4>	<br>
	<h4><a href="http://www.polygon.com/2015/2/4/7874951/zelda-majoras-mask-3d-review-legend-new-3ds-xl" target="_blank"><img src="Images/Logo_of_Polygon.png"></img>Polygon: 9/10</a></h4>
	</th>
</tr>
</table>
</div>
</div> 
</div>
</div>
</div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>