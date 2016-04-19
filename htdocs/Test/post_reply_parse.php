<?php
// Building A PHP MySQL Forum Tutorial Series
// Published by Tim Kipp @ www.timkipptutorials.com on February 14, 2011
// This script will parse the information from the post_reply.php page and add it to the database

session_start(); // Start your sessions to allow your page to interact with session variables

// Check to see if the person accessing this page is logged in
if ($_SESSION['uid']) {
	if (isset($_POST['reply_submit'])) {
		// Connect to the database
		include_once("connect.php");
		// Assign local variables
		$creator = $_SESSION['uid'];
		$cid = $_POST['cid'];
		$tid = $_POST['tid'];
		$reply_content = $_POST['reply_content'];
		// Insert query to enter the information into the posts table
		$sql = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) VALUES ('".$cid."', '".$tid."', '".$creator."', '".$reply_content."', now())";
		// Execute the INSERT query
		$res = mysql_query($sql) or die(mysql_error());
		// Update query that will update the category that is associated with this topic reply
		$sql2 = "UPDATE categories SET last_post_date=now(), last_user_posted='".$creator."' WHERE id='".$cid."' LIMIT 1";
		// Execute the category UPDATE query
		$res2 = mysql_query($sql2) or die(mysql_error());
		// Update query that will update the topic that is associated with this topic reply
		$sql3 = "UPDATE topics SET topic_reply_date=now(), topic_last_user='".$creator."' WHERE id='".$tid."' LIMIT 1";
		// Execute the topic UPDATE query
		$res3 = mysql_query($sql3) or die(mysql_error());
		
		
		// Check to make sure all the required queries have been executed
		if (($res) && ($res2) && ($res3)) {
			echo "<p>Your reply has been successfully posted. <a href='view_topic.php?cid=".$cid."&tid=".$tid."'>Click here to return to the topic.</a></p>";
		} else {
			echo "<p>There was a problem posting your reply. Try again later.</p>";
		}
		
	} else {
		exit();
	}
} else {
	exit();
}
?>