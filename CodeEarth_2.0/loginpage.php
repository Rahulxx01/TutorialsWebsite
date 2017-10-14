<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
//header("location: MiniprojectWt.php");
}
?>
<html>
<head>
<title>Login page</title>

<link href="loginpage.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
	<h1 align="center">Welcome to Code Earth</h1>
	<h3 align="center" >Sign in to continue to Code Earth</h3>
	
</div>
<br>
<div class="loginblock">
	<h1 align="center">Login Form</h1>
	
	<hr>
	<form name="loginform" action="" method="post"> 
		<h4>Username:<br><input type="text" size="40" name="username" placeholder="Username"/></h4>
		<h4>Password :<br><input type="password" size="40" name="password" placeholder="Password"/></h4>
		<input class="button" type="submit" name="submit" value="Login">
		
		<a href="FrontPage1.php" style="float:right">Register</a>
		<br>
		<span style="color:red"><?php echo $error; ?></span>
	
	</form>

</div>



</body>

</html>