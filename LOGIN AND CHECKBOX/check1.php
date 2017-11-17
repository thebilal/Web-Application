

<?php

?>
<!DOCTYPE html> 
<html>
<head> 
	<title>PHP: Get Values of Multiple Checked Checkboxes</title>
</head> 
 <body>
 <div class="container">
	<div class="main">
		<h2>PHP: Get Values of Multiple Checked Checkboxes</h2><hr/>
		<form action="check1.php" method="post">
		<label class="heading">Select Your Technical Exposure:</label><br/><br/>

		<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
		<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
		<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
		<input type="checkbox" name="check_list[]" value="HTML/CSS"><label>HTML/CSS</label><br/>
		<input type="checkbox" name="check_list[]" value="UNIX/LINUX"><label>UNIX/LINUX</label><br/><br/>
		<input type="submit" name="submit" Value="Submit"/>
		<!-----Including PHP Script----->
		<?php include 'check2.php';?>
		</form>
	</div>
	
<!-- Div Fugo is advertisement div-->
	<div class="fugo">
		<a href="http://www.formget.com/app/"><img src="images/formGetadv-1.jpg" /></a>
	</div>
 </div>
</body>
</html>
