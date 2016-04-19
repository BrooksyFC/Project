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
    <li><a href="Review.php">Reviews</a></li>
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
	echo "<li class='active'><a href='Register.php'><span class='glyphicon glyphicon-user'></span> Register</a></li>
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
<?php
error_reporting(0);
$submit = $_POST['submit'];

//form data
$fullname = $_POST['fullname'];
$username = strtolower($_POST['username']); //string to lower case to check if username exists
$password = $_POST['password']; //md5 tag to decript 
$repeatpassword = $_POST['repeatpassword'];
$email = $_POST['email'];

if ($submit)
{
		//Connect to database
		$connect = mysql_connect("localhost", "root", "");
		//Select databse
		mysql_select_db("login");
		
		//Query to database to check if Username already exists
		$namecheck = mysql_query("SELECT username FROM users WHERE username = '$username'");
		$name = mysql_num_rows($namecheck); //If 0 - Username is free. If 1 - Username taken
		
		if ($name !=0)
		{
			die("Username already taken. Please try another");
		}
	
	if ($fullname&&$username&&$password&&$repeatpassword) //if all fields exist
	{
		
		if ($password==$repeatpassword)
		{
			
		//check string length of Full Name and Username
		if (strlen($fullname)>30||strlen($username)>30)
		{
			echo "Length of Fullname or Username is too long (30 Char Max)";
		}
		else
		{
		//check string length of Password
		if (strlen($password)>30||strlen($password)<8)
		{
		echo "Password must be between 8 and 30 characters";	
		}
		else
		{
		//encrypt passwords	
		$password = md5($password);
		$repeatpassword = md5($repeatpassword);
		
		//generate random number for activation
		$random = rand(23456789,98765432);
	
		//Insert data into database
		$queryreg = mysql_query("INSERT INTO users VALUES ('', '$fullname', '$username', '$password', '$email', '$random', '0', '$profile', '$gender', '$about', '$city', '$age')");
		
		$lastid = mysql_insert_id(); //gets the last auto increment user_id
		
		//Send email for activation
		$to = $email;
		$subject = "Activate account";
		$headers = "From: admin@gamer.co.uk";
		$body = "Hello $username, \n \n You have registered and just need to activate the account. 
				To do this, click the link bellow: '<a href='http://localhost/Functions/Activate.php?id=$lastid&code=$random'></a>'\n\nThanks!";
		
		//Function to sent email
		mail($to, $subject, $body, $headers);
		
		die ("You have been registered, check your email!");
		}
				
		}
		
		}
		else
			echo "Your passwords do not match";

	}
	else
		echo "Fill in the fields";	

}
?>
<form action="Register.php" method="POST">
<div class="panel panel-default">
 <div class="panel-heading">
  <h3 class="panel-title">Registration Form</h3>
 </div>
  <div class="panel-body">

<div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
    <input type="text" class="form-control" name="fullname" placeholder="Please enter your Full Name">                                        
</div>

<div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
    <input type="text" class="form-control" name="username" placeholder="Please enter a Username">                                        
</div>

<div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    <input type="password" class="form-control" name="password" placeholder="Please enter a Password">                                        
</div>

<div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    <input type="password" class="form-control" name="repeatpassword" placeholder="Please repeat your Password">                                        
</div>

<div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
    <input type="text" class="form-control" name="email" placeholder="Please enter your Email">                                        
</div>	
	<input type="submit" name="submit" value="Register" class="btn btn-info btn-block">							
  </div>
</div>

</form>
</div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>