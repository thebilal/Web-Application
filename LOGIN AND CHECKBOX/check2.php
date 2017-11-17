<?php
require ('checkdb.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])) {
	$usernamebilal=$_SESSION['username'];

	//Counting number of checked checkboxes 
	$checked_count = count($_POST['check_list']);
	
	echo "You have selected following ".$checked_count." option(s): <br/>";

	//Loop to store and display values of individual checked checkbox
		foreach($_POST['check_list'] as $selected) {
				$sql ="INSERT INTO checking (usernamebilal,checkbox) VALUES ('$usernamebilal','$selected')";
				$result = mysqli_query($con,$sql);
				echo "<p>".$selected ."</p>"; 
		}
	echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";	
	}
	else{
	echo "<b>Please Select Atleast One Option.</b>";
	}
	}
?>