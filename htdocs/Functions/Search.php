<?php
mysql_connect("localhost","root","");
mysql_select_db("login");

//if search button pressed
if(isset($_GET['search'])){
	
	$search_value = $_GET['value'];
	
	$query = "SELECT * FROM Images WHERE Keyword LIKE '%$search_value%'";
	
	$run = mysql_query($query);
	
	while($row=mysql_fetch_array($run)){
		
		$Name = $row['Name'];
		$Image = $row['Image'];
		
		echo "<h1>$Name</h1><img src=$Image></img>";
		
	}
	
}
?>