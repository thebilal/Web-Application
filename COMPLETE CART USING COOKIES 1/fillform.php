<!DOCTYPE HTML>
<html>
<head>
	<title>
		selection page
	</title>
</head>
<body>
	<h1>SELECT YOUR ITEM</h1>
	<?php
	session_start();
	
	?>
<form action="process.php" method="POST">
<input type="checkbox" name = "check_list[]" value="Burger">Burger<br><br>
<input type="checkbox" name = "check_list[]" value="Pizza">Pizza<br><br>
<input type="checkbox" name = "check_list[]" value="Coca Cola">Coca Cola<br><br>
<input type="checkbox" name = "check_list[]" value="Pepsi">Pepsi<br><br>
<input type="checkbox" name = "check_list[]" value="Sandwich">Sandwich<br><br>
<input type="checkbox" name = "check_list[]" value="Ice cream">Ice cream<br><br>

<input type="submit" name = "submit" value="submit"><br><br>

	<a href="cart.php">MY CART 
	</form>
</body>
</html>