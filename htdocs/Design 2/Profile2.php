<html>
<head>
<link href="CSS/Layout2.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Site">
<div id="Header"> <a href="Design2.php"></a></div>
<div id="Tabs">
	<ul>
		<li><a href="Login2.php">Login</a>
		<li><a href="Register2.php">Register</a>
		<li><a href="#">News</a>
		<li><a href="#">Xbox One</a>
		<li><a href="#">PS4</a>
		<li><a href="#">PC</a>
		<li><a href="#">Nintendo</a>
		<li><a href="#">Reviews</a>
		<li><a href="#">Videos</a>
		<li><a href="#">Prices</a>	
		<li><a href="#">Profile</a>	
		<li><a href="#">Forum</a>	
	</ul>
</div>
<div id="Content">
<?php
session_start();

error_reporting(0);

if ($_SESSION['username']) //If session has been created with correct username
	echo "Welcome, ".$_SESSION['username']."!<br><a href='Functions/Logout.php'>Logout</a>";
else //else, you need to be logged in.
	die("You must be logged in");
?>

</div>
<div id="Footer">Footer</div>
</div>
</body>
</html>