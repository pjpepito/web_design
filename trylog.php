<html>
<title>Login</title>
<body>
<?php
session_start();
if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) {
echo "password accepted";
    $_SESSION['login']=true; 
else { 
echo "incorrect login";
}
 ?> 

<form name="input" action="adminportal.php" method="get">
  <input type="submit" value="Home">
  </form>
  </body>
  </html>