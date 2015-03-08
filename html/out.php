<!DOCTYPE html>
<html>
<head>
	<title>OUT</title>
<style type="text/css">
	
	h1{
		color: RED;
	}
</style>
</head>
<body>
<center>
<h1 >Session is Destroyed</h1>
<?php
session_start();
 unset($_SESSION['UserId']); 
 unset($_SESSION['Type']); 
 session_destroy();
 //Header('Location: index.php');
 ?>

</center>
</body>
</html>