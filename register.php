
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>register</title>
</head>
	<style type="text/css">
		body {
	margin:0;
	padding:0;
	background:url("paint.jpg")  ;
	background-repeat:no-repeat;
	background-size: 100% 720px;
    font-family: sans-serif;	
}

.loginbox{
	width: 320px;
	height: 420px;
	background: #EC3437 ;
	color:#fff;
    top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
body {
   background-color: pink;
}
</style>

<body>
<header>
  <h2><em><u><img src="512x512_print-512.png" width="72" height="71" alt=""/>first copy printing</u></em></h2></header>
<link rel="stylesheet" type="text/css" href="style2.css">
	
<div class="loginbox">
<center>
<p>REGISTER</p>
<p>&nbsp;</p>
<form method="post" action="">	
<p>
 <input type="text" placeholder=" Username " name="username">
</p>
<p>
 <input type="text" placeholder=" E-mail " name="email">
</p>
<p>
 <input type="Password" placeholder ="Password"  name="password">
</p>
	<p>
	  <input type = "checkbox"  >
  I agree to all <a href=>Term & Condition</a> and <a href=>Privacy Policy</a> </p>
	<p>
	  <button type="submit" name="register">Sign Up</button>
	</p>
				
</center>
</form>
</body>
</html>
<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "system");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

if(isset($_POST["register"]))
{
 $username = $_POST['username'];
 $email=$_POST['email'];
 $pass =$_POST['password'];
 
	$sql_u = "SELECT * FROM users WHERE username='$username'";
	$res_u = mysqli_query($conn, $sql_u);
	
if (mysqli_num_rows($res_u) > 0) {
	echo'<script>alert("Sorry... username already taken!");</script>';
		header( "refresh:1;url=register.php" );
}
else{
 $register="INSERT INTO users( `username`, `email`, `password`) VALUES ('$username','$email','$pass')";
	mysqli_query($conn, $register);
}
	
if($register)
      {   
        echo'<script>alert("Success!");</script>'; 
	    header( "refresh:1;url=loginuser.php" );
       }
     
  else
      {
        echo'<script>alert("Failed!");</script>';
      }
    }
?>