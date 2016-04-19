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
		$queryreg = mysql_query("INSERT INTO users VALUES ('', '$fullname', '$username', '$password', '$email', '$random', '0')");
		
		$lastid = mysql_insert_id(); //gets the last auto increment user_id
		
		//Send email for activation
		$to = $email;
		$subject = "Activate account";
		$headers = "From: admin@gamer.co.uk";
		$body = "Hello $username, \n \n You have registered and just need to activate the account. 
				To do this, click the link bellow: http://localhost/Functions/Activate.php?user_id=$lastid&code=$random\n\nThanks!";
		
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
<h2>Register</h2>
<form action="Register2.php" method="POST">
	<table>
		<tr>
			<td>
			Full Name:
			</td>
			<td>
			<input type="text" name="fullname">
			</td>
		</tr>
		<tr>
			<td>
			Username:
			</td>
			<td>
			<input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>
			Password:
			</td>
			<td>
			<input type="password" name="password">
			</td>
		</tr>
		<tr>
			<td>
			Confirm Password:
			</td>
			<td>
			<input type="password" name="repeatpassword">
			</td>
		</tr>
		<tr>
			<td>
			Email:
			</td>
			<td>
			<input type="text" name="email">
			</td>
		</tr>
	</table>
	<input type="submit" name="submit" value="Register">
</form>
</div>
<div id="Footer"></div>
</body>
</html>