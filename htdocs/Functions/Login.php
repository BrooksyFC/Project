<?php
error_reporting(0);

include_once("Database/Connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
	
if ($username&&$password) //if username AND password is true
{ 

$query = mysql_query("SELECT * FROM users WHERE username='$username'"); //Select usernames from database

$numrows = mysql_num_rows($query);

if ($numrows!=0) //If there is username in that row, login
{
	
	while ($row = mysql_fetch_assoc($query)) //fetches query data and put its into $row
	{
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
		$activated = $row['active'];
		$uid = $row['id'];
		
		if ($activated=='0') //if it is not active
		die("your account is not yet active");
	}
		// Select data from the users table depending on the entered inputs
	$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	// Execute the SELECT query
	$res = mysql_query($sql) or die(mysql_error());
	

	//do they match
	if ($username==$dbusername&&md5($password)==$dbpassword)
	{
		echo "You're in! <br><br> Click here to enter <a href='../Profile.php'>Profile Page</a>"; //Allows to log into Profile page
		$row = mysql_fetch_assoc($res);
		// Assign session variables with the id and username from the database
		$_SESSION['username']= $dbusername;
		$_SESSION['uid']= $uid;
	}
	else
		echo "Incorrect Password";
	
}
else
	die ("That user doesn't exist");
}
else 
	die("Enter a username and password");
?>