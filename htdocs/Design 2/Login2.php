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
<form action="Functions/Login.php" method="POST">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>	
	<input type="submit" value="Log In"><br>
	
	<a href="Register2.php">Register</a>
	</form>
</div>
<div id="Footer">

</div>
</div>
</body>
</html>