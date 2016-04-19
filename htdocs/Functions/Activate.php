<?php
error_reporting(0);
$connect = mysql_connect("localhost", "root", "") or die ("Couldn't Connect To Server"); //Connect to server
mysql_select_db("login") or die ("Couldn't Connect To Database"); //Connect to database

$id = $_GET['id'];
$code = $_GET['code'];

if ($id&&$code)
{
	$check = mysql_query("SELECT * FROM users WHERE id='$id' AND random='$code'");
	$checknum = mysql_num_rows($check); //returns the number of rows from database
	
	if ($checknum==1)
	{
		
	$activate = mysql_query("UPDATE users SET active='1' WHERE id='$id'");
	die("Account activated, please log in");	
	}
	else
		die("Invalid ID or Activation Code");
	
}
else
	die("Data Missing");
?>