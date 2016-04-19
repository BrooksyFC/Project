<html>
<head>
<link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="CSS/Layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Main">
<div> <img src="Images/Logo.png" alt="Logo"></div>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
  <ul class="nav nav-pills nav-justified">
    <li><a href="Design3.php">Home</a></li>
    <li><a href="#">Reviews</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Prices</a></li>
    <li><a href="Profile3.php">Profile</a></li>
    <li><a href="#">Forum</a></li>
      <li><a href="Register3.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li class="active"><a href="Login3.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </ul>
  </div>
</nav>
<form action="Result.php" method="get">
<input type="text" id="search" name="value" placeholder="Search">
<input type="submit" name="search" value="Search">
</form>
<nav class="navbar navbar-default nav-stacked">
  <div class="container-fluid">
  <ul class="nav nav-pills">
<h4 align="center">Platforms</h4>
<li>
<a href="XboxOne3.php"><img src="Images/Xbox_One_logo.svg.png" alt="xbox logo" height="20px"></a>
<a href="PS43.php"><img src="Images/PlayStation_4_logo_and_wordmark.svg.png" alt="ps4 logo" height="20px"></a>
<a href="PC3.php"><img src="Images/7ZQgwGH.png" alt="pc logo" height="40px"></a>	
<a href="Wii3.php"><img src="Images/Nintendo-Wii-U-Logo.png" alt="wii" height="20px"></a>
<a href="Xbox3603.php"><img src="Images/Xbox_360_full_logo.svg.png" alt="xbox 360 logo" height="20px"></a>
<a href="PS33.php"><img src="Images/PS3_Logo.png" alt="ps3 logo" height="30px"></a>
<a href="DS3.php"><img src="Images/2000px-Nintendo_DS_Logo.svg.png" alt="ds" height="15px"></a>
</li>	
  </ul>
	</nav>
<div id="Content">
<h2>Login</h2>
<?php
session_start();

error_reporting(0);

if ($_SESSION['username']) //If session has been created with correct username
	echo "Your are already logged in";
?>
<form action="Functions/Login.php" method="POST">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>	
	<input type="submit" value="Log In"><br>
	
	<a href="Register3.php">Register</a>
	</form>
</div>

</div>

<div id="Footer"></div>
</div>
</body>
</html>
