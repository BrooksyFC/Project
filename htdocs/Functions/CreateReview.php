<?php
session_start();
if ($_SESSION['username'] == "") {	//if there is no user logged in, send back to home page.
	header("Location: ../Design.php");
	exit();
}

if(isset($_POST['review_submit'])) {	//if button has been pressed
	if (($_POST['review_title'] == "") && ($_POST['review_content'] == "")) {	//and if none of the fields have been filled in
		echo "You need to fill in all the fields";
		exit();
	} else {
		include_once("../Database/Connect.php"); //database connection
		$cid = $_POST['cid']; //decare variables
		$title = $_POST['review_title'];
		$content = $_POST['review_content'];
		$creator = $_SESSION['uid'];
		
		$query = "INSERT INTO reviews (game_id, review_title, review_creator, review_date, review_reply_date) 
		VALUES ('".$cid."', '".$title."', '".$creator."', now(), now())"; //insert data into topics table
		$result = mysql_query($query) or die(mysql_error()); 
		
		$new_review_id = mysql_insert_id(); //creates a unique ID number called new topic ID
		$query2 = "INSERT INTO comments (game_id, review_id, comment_creator, comment_content, comment_date) 
		
		VALUES ('".$cid."', '".$new_review_id."', '".$creator."', '".$content."', now())"; //inserts data into the posts table
		$result2 = mysql_query($query2) or die(mysql_error()); 
		
		$query3 = "UPDATE games SET last_post_date=now(), last_user_posted='".$creator."' WHERE id='".$cid."' LIMIT 1"; //who posted last to date table, only 1 category
		$result3 = mysql_query($query3) or die(mysql_error());
		
		if (($result) && ($result2) && ($result3)) {	//if all queries run
			header("Location:../ViewReview.php?cid=".$cid."&tid=".$new_review_id);
		} else {
			echo "There was a problem, try again";	//else respond with error message
		}
	}
}
?>