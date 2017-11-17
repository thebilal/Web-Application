<?php
session_start();
session_destroy();
if(isset($_COOKIE['user'])and isset($_COOKIE['pass'])){
	$bilal=$_COOKIE['user'];
	$kullu=$_COOKIE['pass'];
	setcookie('user',$bilal,time()-1);
	setcookie('pass',$kullu,time()-1);
}
?>
<html>
<body>
	<p>You have successfully logged out.</p>
	<a href="login.php">LOGIN</a>
</body>
</html>