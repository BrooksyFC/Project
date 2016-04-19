<?php
include("Database/Connect.php");

function getUserData($id)
{
	$array = array();	
	$query = mysql_query("SELECT * FROM users WHERE id='$id'");
	while($result = mysql_fetch_assoc($query))
	{
		$array['id'] = $result['id'];
		$array['username'] = $result['username'];
		$array['email'] = $result['email'];
		$array['profile'] = $result['profile'];
		$array['gender'] = $result['gender'];
		$array['about'] = $result['about'];
		$array['fullname'] = $result['fullname'];
		$array['city'] = $result['city'];
		$array['age'] = $result['age'];
	}
	return $array;
}

function getId($username)
{
	$query2 = mysql_query("SELECT id FROM users WHERE username='".$username."'");
	while($result2 = mysql_fetch_assoc($query2))
	{
		return $result2['id'];
	}
}

function userExists($id)
{
	$numrows = mysql_num_rows(mysql_query("SELECT id FROM users WHERE id=".$id));
	if($numrows==1)
		return true;
	else
		return false;
}

function updateFullName($id, $fullname)
{
	if(mysql_query("UPDATE users SET fullname ='".$fullname."' WHERE id = ".$id))
		return true;
	else
		return false;
}

function updateProfile($id, $tmpName,$ext)
{
	if(move_uploaded_file($tmpName,"Images/Profile/".$id.".".$ext) && mysql_query("UPDATE users SET profile ='" .$ext."' WHERE id=".$id))
		return true;
	else
		return false;
}
?>