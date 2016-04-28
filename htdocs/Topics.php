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
<div id="Content"><h2>Topics</h2>
<?php
error_reporting(0);

include("Database/Connect.php");

// Function that will convert a user id into their username
function getusername($uid) {
	$sql = "SELECT username FROM users WHERE id='".$uid."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['username'];
}

function getgametitle($cid) {
	$sql = "SELECT forum_title FROM forums WHERE id='".$cid."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['forum_title'];
}

// Function that will count how many replies each topic has
function topic_replies($cid, $tid) {
	$sql = "SELECT count(*) AS topic_replies FROM posts WHERE forum_id='".$cid."' AND topic_id='".$tid."'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	return $row['topic_replies'] - 1;
}

$cid = $_GET['cid'];

$query = "SELECT id FROM forums WHERE id='".$cid."' LIMIT 1";
$result = mysql_query($query) or die(mysql_error());
if (mysql_num_rows($result) == 1) { //if there are topics that have been posted in this category
	$query2 = "SELECT * FROM topics WHERE forum_id='".$cid."' ORDER BY topic_reply_date DESC";
	$result2 = mysql_query($query2) or die(mysql_error());
	echo "<h3>".getgametitle($cid)."</h3>";
	
if (isset($_SESSION['username'])) { //If session has been created with correct username
	echo "<a href='TopicDetails.php?cid=".$cid."'>Click here to create a topic</a><hr>";
} else {//else, you need to be logged in.
	echo ("You must be logged in to create a topic. Click here to <a href='Register.php'>Register</a> or here to<a href='Login.php'> Login</a>");
}	
	
	if (mysql_num_rows($result2) > 0) { //if there are topics that have been posted in this category
		$topics .= "<table width='100% style='border-collapse: collapse;'>";
		$topics .= "<tr><td colspan='3'><a href='Forum.php'>Go back</a><hr></td></tr>";
		$topics .= "<tr style='background-color: #dddddd;'><td>Topic Title</td><td width='65' align='center'>Replies</td><td width='65' align='center'>Views</td></tr>";
		$topic .= "<tr><td colspan='3'><hr></td><tr>";
		while ($row = mysql_fetch_assoc($result2)) {
			$tid = $row['id'];
			$title = $row['topic_title'];
			$views = $row['topic_views'];
			$date = $row['topic_date'];
			$creator = $row['topic_creator'];
			$topics .= "<tr><td><a href='ViewTopic.php?cid=".$cid."&tid=".$tid."'>".$title."</a><br /><span class='post_info'>Posted by: ".getusername($creator)." on ".$date."</span></td><td align='center'>".topic_replies($cid, $tid)."</td><td align='center'>".$views."</td></tr>";
			$topics .= "<tr><td colspan='4'><hr /></td></tr>";
		}
		$topics .= "</table>";
		echo $topics;
		
	} else {
		echo "<a href='Forum.php'>Go back</a><hr>"; //If no categories exists, return to previous page
		echo "No topics exists in this cat";
	}
} else{
	echo "<a href='Forum.php'>Go back</a><hr>"; //If no categories exists, return to previous page
	echo "No category exists";
}
?>
</div>
</div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>