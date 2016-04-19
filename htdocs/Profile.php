<?php
session_start();
require("Functions/GetUserInfo.php");
if(!isset($_GET['id'])) header("Location: ?id=".getId($_SESSION['username'])); //give the profile an id number based on the username logged in
?>
<html>
<head>
<link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link id="pagestyle" href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<script>
function swapStyleSheet(sheet){
	document.getElementById('pagestyle').setAttribute('href', sheet);
}
</script>
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
    <li><a href="Videos.php">Videos</a></li>
    <li><a href="Price.php">Prices</a></li>
    <li class="active"><a href="Profile.php">Profile</a></li>
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
<div id="Content"><h2>Profile Page</h2>
<?php

if (!isset($_SESSION['username'])) //If session isnt set
{
	echo "You must be logged in. Click here to <a href='Register.php'>Register</a> or <a href='Login.php'>Login</a>";
}
?>

<?php if (isset($_SESSION['username']))
	{ 
		$usersData = getUserData(getId($_SESSION['username']));
		?>	
		<?php if(userExists(mysql_real_escape_string($_GET['id']))) 
		{ ?>
		<h3><strong>Welcome </strong>
		<?php echo $usersData['username']; ?>
		</h2><br>
		
		<strong>Profile Picture: </strong><br>
		<?php 
			if($usersData['profile']=="")
				echo '<img src="Images/profile.png" height="100" width="100" >';
			else
				echo '<img src="Images/Profile/'.$usersData['id'].'.'.$usersData['profile'].'" height="100" width="100" >';
		?><br>
		
		<strong>Fullname: </strong>
		<?php echo $usersData['fullname']; ?><br>
		
		<strong>About Me: </strong>
		<?php echo $usersData['about']; ?><br>
		
		<strong>Gender: </strong>
		<?php echo $usersData['gender']; ?><br>
		
		<strong>Age: </strong>
		<?php echo $usersData['age']; ?><br>
		
		<strong>City: </strong>
		<?php echo $usersData['city']; ?><br>
		<a href = "UpdateProfile.php">Update Profile</a>
	<?php } 
	else echo "Invalid ID"; 
	?>
	
<?php 
	} ?>
</div>
</div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>