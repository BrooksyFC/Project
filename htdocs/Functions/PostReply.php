<?php
session_start();
if($_SESSION['username']) {
	if (isset($_POST['reply_submit'])) {	//if the submit button has been pressed
		include_once("../Database/Connect.php");
		$creator = $_SESSION['uid'];
		$cid = $_POST['cid'];
		$tid = $_POST['tid'];
		$reply_content = $_POST['reply_content'];
		
		$query = "INSERT INTO posts (forum_id, topic_id, post_creator, post_content, post_date) VALUES ('".$cid."', '".$tid."', '".$creator."', '".$reply_content."', now())";
		$result = mysql_query($query) or die (mysql_error());
		
		$query2 = "UPDATE forums SET last_post_date=now(), last_user_posted='".$creator."' WHERE id='".$cid."' LIMIT 1";
		$result2 = mysql_query($query2) or die(mysql_error());
		
		$query3 = "UPDATE topics SET topic_reply_date=now(), topic_last_user='".$creator."' WHERE id='".$tid."' LIMIT 1";
		$result3 = mysql_query($query3) or die(mysql_error());
		
		if (($result) && ($result2) && ($result3)) {
			echo "Your reply has been posted. <a href='../ViewTopic.php?cid=".$cid."&tid=".$tid."'>Click here to return to the topic</a>";
		} else {
			echo "There was a problem posting your reply";
		}
	}
} else {
	exit();
}

?>