<?php
require ('database1.php');
 
        session_start(); 
     
	if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])) {
	$username1=$_SESSION['username'];

	//Counting number of checked checkboxes 
	$checked_count = count($_POST['check_list']);
	
	echo "You have selected following ".$checked_count." option(s): <br/>";

	//Loop to store and display values of individual checked checkbox
		foreach($_POST['check_list'] as $selected) {
				$sql ="INSERT INTO food (username,product) VALUES ('$username1','$selected')";
				$result = mysqli_query($con,$sql);
				echo "<p>".$selected ."</p>"; 
		}
	echo "<br>"."Thank you for Ordering";
	}
	else{
	echo "<b>Please Select Atleast One Option.</b>";
	}
	}
?>
<html>
<body>
	<a href ="cart.php">MY CART<br></a>
		<a href="logout.php">LOGOUT</a><br>
	</body>
</html>
