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
<nav class="navbar navbar-inverse">

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
    <li><a href="#">Reviews</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Prices</a></li>
    <li><a href="Profile.php">Profile</a></li>
    <li><a href="#">Forum</a></li>
      <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>	
      </ul>
   </div>
</nav>
<div id="Content"><h2>Search Results:</h2>
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
</div>

<div id="Footer"></div>
</div>
</body>
</html>