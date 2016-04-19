<?php
session_start();
?>
<html>
<head>
<link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link id="pagestyle" href="CSS/Layout.css" rel="stylesheet" type="text/css" />
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
    <li><a href="Review.php">Reviews</a></li>
    <li class="active"><a href="Videos.php">Videos</a></li>
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
<a href="http://www.darksouls3.com/en/" target="_blank">Dark Souls 3</a>
<a href="http://www.lego.com/en-gb/starwars/games/videogame" target="_blank">Lego Star Wars: The Force Awakens</a>	
<a href="http://www.unchartedthegame.com/en-gb/" target="_blank">Uncharted 4: A Thiefs End</a>
<a href="http://doom.com/en-gb/" target="_blank">Doom</a>
<a href="http://eu.battle.net/overwatch/en/" target="_blank">Overwatch</a>
<a href="http://www.mirrorsedge.com/" target="_blank">Mirrors End Catalyst</a>
</li>
  </ul>
	</nav>	
<nav class="navbar navbar-inverse nav-stacked">
  <div class="container-fluid">
  <ul class="nav nav-pills">
<h4 align="center">Top 5 Games of 2015</h4>
<li align="center">
<a href="http://thewitcher.com/en/witcher3" target="_blank">Witcher 3: Wild Hunt</a>
<a href="http://www.rockstargames.com/V/" target="_blank">Grand Theft Auto: V</a>
<a href="https://www.fallout4.com/" target="_blank">Fallout 4</a>	
<a href="http://www.konami.jp/mgs5/tpp/certification.php5" target="_blank">Metal Gear Solid V: The Phantom Pain</a>
<a href="http://www.zelda.com/majoras-mask/" target="_blank">The Legend of Zelda: Majora's Mask</a>
</li>
  </ul>
	</nav>
<div id="Content"><h2>Videos</h2>
<h2>Featured: GuideWars 2</h2>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=guildwars2&!autoplay" height="400" width="770" frameborder="0" scrolling="no"></iframe>
<h2>Featured: Rainbow 6</h2>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=rainbow6&!autoplay" height="400" width="770" frameborder="0" scrolling="no"></iframe>
<h2>Featured: Rocket League</h2>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=esl_teknolink&!autoplay" height="400" width="770" frameborder="0" scrolling="no"></iframe>
<h2>League of Legends</h2>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=imaqtpie&!autoplay" height="230" width="385" frameborder="0" scrolling="no"></iframe>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=nightblue3&!autoplay" height="230" width="385" frameborder="0" scrolling="no"></iframe>
<h2>Dota 2</h2>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=dota2ruhub2&!autoplay" height="230" width="385" frameborder="0" scrolling="no"></iframe>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=esl_joindotared&!autoplay" height="230" width="385" frameborder="0" scrolling="no"></iframe>
<h2>Minecraft</h2>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=ungespielt&!autoplay" height="230" width="385" frameborder="0" scrolling="no"></iframe>
<iframe class="videoplayer" src="http://player.twitch.tv/?channel=thatmumbojumbo&!autoplay" height="230" width="385" frameborder="0" scrolling="no"></iframe>
</div>
</div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>