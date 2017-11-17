

<!DOCTYPE HTML>
<html>
<body>
	<div class="form">
<?php 

require('dbpo.php');
session_start();
echo $_SESSION['username'];
$you=$_SESSION['username'];
$queryi = "SELECT * FROM checking WHERE usernamebilal='$you'";
$resulti = mysqli_query($conn,$queryi);
	$rowsi = mysqli_num_rows($resulti);
   // output data of each row
	if($rowsi>0){
    while($rowsi = $resulti->fetch_assoc()) {
        echo "username: " . $rowsi["usernamebilal"]. " - language: " . $rowsi["checkbox"].  "<br>";
    }
} else {
    echo "0 results";
}
include('check1.php');
?>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logoutva.php">Logout</a>
</div>
</body>
</html>