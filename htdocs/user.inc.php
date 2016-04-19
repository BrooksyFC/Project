<?php
include("Database/Connect.php");
function fetch_users(){
	$result = mysql_query("SELECT id AS id, username AS username FROM users");
	
	$users = array();
	
	while  ($row = mysql_fetch_assoc($result)){
		$users[] = $row;
		}
		return $users;
}

?>