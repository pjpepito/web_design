<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<link href="pos.css" rel="stylesheet">
</head>
<body>
<div class="h1">
	
</div>
<div class="t1">
	<form class="f1" action="trylog.php">
				USERNAME:<br>
				<input type="text" name="USERNAME" value="">
				<br>
				PASSWORD:<br>
				<input type="text" name="PASSWORD" value="">
				<br><br>
				<a href = "home.html"> <input type="button" value="LOGIN" id="fb"> </a>
			</form>
</div>

<?php
session_start();
if (text==true || (text=="admin" && text=="password")) {
echo "password accepted";
    text=true; 
else { 
echo "incorrect login";
}
 ?>

</body>

</html> 