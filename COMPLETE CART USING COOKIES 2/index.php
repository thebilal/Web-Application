
	<?php
	require ('database1.php');
	session_start();
	if(isset($_POST['username'])){
	$username=$_POST['username'];

	$password=$_POST['password'];
	$_SESSION['username']=$username;
	
	      $query = "SELECT * FROM login WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	  
	    if(isset($_POST['checklist'])){
		setcookie('user',$username,time()+60*60*7);
		setcookie('pass',$password,time()+60*60*7);
	}
            // Redirect user to index.php
	    header("Location: fillform.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
}
?> 