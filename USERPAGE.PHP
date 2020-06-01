<?php
session_start();
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "system"); 
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

if($_SESSION["username"]==true)
{
echo "Welcome"." ".$_SESSION["username"];
}
else
{
	 header('location:loginuser.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Printing Services</title>
</head>
<style>/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}
	.button {
  background-color:plum;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}</style>
<body>
<div class="navbar">
  <a href="logout.php">LOGOUT</a>
  <a href="USERPAGE.PHP">HOME</a>
</div>

	<center><font size="10"><a href="#" class="button">Anything</a></a></font></center><br><br>
	<center><font size="10"><a href="#" class="button">Anything</a></a></font></center>
    
<center>

</center>
</body>
</html>
