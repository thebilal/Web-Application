<?php
require ('database1.php');
session_start();
$username2=$_SESSION['username'];

$query="SELECT product FROM food WHERE username='$username2'";
$results = mysqli_query($con, $query) or die(mysqli_error()); 



	$row1 = mysqli_num_rows($results);
	
		if($row1>0){
    while($row1= $results->fetch_assoc()) {
        echo $row1['product']."<br>";
    }
	}
	else{
		echo "There is no product in your cart";
	}
?>
