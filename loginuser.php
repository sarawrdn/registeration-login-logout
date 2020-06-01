<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
	
</head>
     
 <style type="text/css">
	 body {
	margin:0;
	padding:0;
	background:url("paint.jpg") ;
	background-repeat:no-repeat;
	background-size: 100% 720px;
    font-family: sans-serif;	
}

.loginbox{
	width: 320px;
	height: 420px;
	background:#EC3437;
	color:#fff;
    top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
body {
    background-color:pink;
}
</style>
   

<header>
  <h2><em><u><img src="512x512_print-512.png" width="67" height="66" alt=""/>first copy printing</u></em></h2>
</header>
<center>
	
<link rel="stylesheet" type="text/css" href="style.css">
	
<div class="loginbox">

<p>WELCOME BACK</p>
<p>&nbsp;</p>

	
<form name="form1" method="post" action="loginuser.php">	
	
	
			
<p>
  <input type="text" placeholder=" Username " name="username">
</p>
				
		
<input type="Password" placeholder ="Password"  name="password">
			
	<p>
	  <input type = "checkbox"  >
  Remember me</p>
	<p>
	  <input type = "submit" value="Log In" name="btn">
	</p>
	
	
</form> 
	
<p>Don't have an account? <a href="register.php">Sign Up</a> </p>
</center>
</body>
</html>
<?php
session_start();
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "system");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

if(isset($_REQUEST["btn"]))
{
 $user = $_POST["username"];
 $pass = $_POST["password"];
 $sql = "SELECT * FROM system.users where username LIKE '$user' and password LIKE '$pass'";
 $result = $conn->query($sql);
 if($result->num_rows > 0)
 {
   while($row = $result->fetch_assoc()) 
    {
      $u = $row["username"];
      $p = $row["password"];
     }
      if(($user == $u)&&($pass == $p))
      {
		$_SESSION["username"]=$user;
        echo'<script>alert("Success!");</script>';
		header( "refresh:1;url=USERPAGE.PHP" );
       }
     }
     if($result->num_rows!=1)
      {
        echo'<script>alert("Failed!");</script>';
		header( "refresh:1;url=loginuser.php" );
      }
    
}
?>
 
