
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
<?php session_start();?>
<div id="Header">
    	<br>
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<span><?php echo $_SESSION['username']; ?></span>  		
		<a href="home.php">Home</a>&nbsp;&nbsp;
		<a href="users.php">Users</a>&nbsp;&nbsp;
		<a href="addproduct.php">Add Product</a>&nbsp;&nbsp;
		<a href="orders.php">Manual Order</a>&nbsp;&nbsp;
		<a href="checks.php">Checks</a>&nbsp;&nbsp;
		<a href="out.php">Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>



<h1>Products</h1>
<center>
<table id="output"  width='700px'border='1'>
	<tr><th>ID</th><th>Name</th><th>price</th><th>Picture</th><th>Availability</th><th>Admin</th></tr>


</table>
</center>

<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</body>
</html>