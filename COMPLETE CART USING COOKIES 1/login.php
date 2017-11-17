<!DOCTYPE HTML>
<html>
<head>
	<title>
		login page
	</title>
</head>
<body>

	<form action="index.php" method="POST">
<input type="text" name ="username" id="user" placeholder="username" required><br><br>
<input type="password" name ="password" id="pass" placeholder="password" required><br><br>
<input type="checkbox" name ="checklist" id="checki">Remember Me<br><br>
<input type="submit" name ="submit" value="submit"><br><br>
	Not yet registered??<a href="register.php">SIGN UP</a><br><br>
	

	</form>
	<?php
if(isset($_COOKIE['user'])and isset($_COOKIE['pass'])){
	$bilal=$_COOKIE['user'];
	$kullu=$_COOKIE['pass'];
	echo $bilal;
header("Location:fillform.php");	

}
?>
	</body>
	</html>