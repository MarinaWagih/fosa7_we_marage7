
<html>
<head>
	<title>Users</title>
	<style type="text/css">
td{
	text-align: center;
}
#person{
	float: right;
	width:200px;
	height: 200px;
}

	</style>
	
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/listusers.js"></script>
    
</head>
<body id ='body'>
<?php session_start();?>

<div id="Header">
    	<br>
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<span><?php echo $_SESSION['username']; ?></span>
		
  		<a href="home.php">Home</a>&nbsp;&nbsp;
  		<a href="reg.php">Add User</a>&nbsp;&nbsp;
		<a href="products.php">Products</a>&nbsp;&nbsp;
		<a href="orders.php">Manual Order</a>&nbsp;&nbsp;
		<a href="checks.php">Checks</a>&nbsp;&nbsp;
		<a href="out.php" >Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>


<h1>Users</h1>
<center>
<table id="output"  width='700px'border='1'>
	<tr><th>ID</th><th>Name</th><th>RoomId</th><th>Room Extension</th><th>Picture</th><th>Admin</th></tr>
	
</table>
</center>

<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">

</body>
</html>