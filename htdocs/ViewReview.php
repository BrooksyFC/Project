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
	      <li class="active"><a href="Design.php">Home</a></li>
         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">News<span class = "caret"></span></a>
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
    <li class="dropdown">
	<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Reviews<span class = "caret"></span></a>
	<ul class = "dropdown-menu">
        <li><a href = "Review.php">Critic Reviews</a></li>
        <li><a href = "UserReviews.php">User Reviews</a></li>	
    </ul> 
	</li>
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
<a href="HUBArea/Witcher3.php">Witcher 3: Wild Hunt</a>
<a href="HUBArea/GTAV.php">Grand Theft Auto: V</a>
<a href="HUBArea/Fallout4.php">Fallout 4</a>	
<a href="HUBArea/MetalGear.php">Metal Gear Solid V: The Phantom Pain</a>
<a href="HUBArea/Zelda.php">The Legend of Zelda: Majora's Mask</a>
</li>
  </ul>
	</nav>
<div id="Content"><h2>View Review</h2>
<?php
include_once("Database/Connect.php");

// Function that will convert a user id into their username
function getusername($uid) {
	$sql = "SELECT username FROM users WHERE id='".$uid."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['username'];
}

function getprofile($uid) {
	$sql = "SELECT profile FROM users WHERE id='".$uid."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['profile'];
}

function getid($uid) {
	$sql = "SELECT id FROM users WHERE id='".$uid."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['id'];
}

$cid = $_GET['cid'];
$tid = $_GET['tid'];
$query = "SELECT * FROM reviews WHERE game_id='".$cid."' AND id='".$tid."' LIMIT 1";
$result = mysql_query($query) or die(mysql_error());
if (mysql_num_rows($result) == 1) {
	echo "<table width='99%'>";
	if (!$_SESSION['username'] == "") { 
		echo "<tr><td colspan='2'><input type='submit' value='Comment on Review' onClick=\"window.location = 'ReviewReply.php?cid=".$cid."&tid=".$tid."'\" /><hr>"; 
		} else 
		{ echo "<tr><td colspan='2'><p>Please login to add a comment</p><hr></td></tr>"; 
	}
	while ($row = mysql_fetch_assoc($result)) {
		$query2 = "SELECT * FROM comments WHERE game_id='".$cid."' AND review_id='".$tid."'";
		$result2 = mysql_query($query2) or die(mysql_error());
		while ($row2 = mysql_fetch_assoc($result2)) {
			echo"<tr><td valign='top' style='border: 1px solid black;'><div style='min-height: 125px;'>".$row['review_title']."<br> by ".getusername($row2['comment_creator'])." - ".$row2['comment_date']."<hr>".$row2['comment_content']."</div></td>
			<td width='200' valign='top' align='center' style='border: 1px solid black;'>Username: ".getusername($row2['comment_creator'])."<br><img src='Images/Profile/".getid($row2['comment_creator']).".".getprofile($row2['comment_creator'])."' height='100' width='100'></img></td></tr><tr><td colspan='2'><hr></td></tr>";
		}
		$old_views = $row['review_views'];
		$new_views = $old_views + 1;
		$query3 = "UPDATE reviews SET review_views='".$new_views."' WHERE game_id='".$cid."' AND id='".$tid."' LIMIT 1";
		$result3 = mysql_query($query3) or die(mysql_error());
	}
	echo "</table>";
} else {
	echo "This review doesn't exist!";
}
?>
</div>
</div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>