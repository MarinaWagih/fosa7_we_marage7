
<html>
<head>
	<title>Products</title>
	<style type="text/css">
td{
	text-align: center;
}
	</style>
	
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/listproducts.js"></script>
</head>
<body id='body'>
<a href="home.php">Home</a>&nbsp;&nbsp;<a  href="users.php">Users</a>&nbsp;&nbsp;<a href="orders.php">Manual Order</a>&nbsp;&nbsp;<a href="checks.php">Checks</a><h1>Products</h1>
<center>
<table id="output"  width='700px'border='1'>
	<tr><th>ID</th><th>Name</th><th>price</th><th>Picture</th><th>Availability</th><th>Admin</th></tr>


</table>
</center>
<?php session_start();?>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
</body>
</html>