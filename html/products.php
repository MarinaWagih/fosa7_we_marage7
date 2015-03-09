
<html>
<head>
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/css1/bootstrap.min.css"> 
	<title>Products</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/listproducts.js"></script>
</head>
<body id='body'>
<?php session_start();?>
<div id="transparent">
<div id="Header">
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<p><?php echo $_SESSION['username']; ?></p>  		
		<a href="home.php">Home</a>
		<a href="users.php">Users</a>
		<a href="addproduct.php">Add Product</a>
		<a href="orders.php">Manual Order</a>
		<a href="checks.php">Checks</a>
		<a href="out.php">Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>
<div id="content" class="wrapper">
<h1>Products</h1>
<center>
<table id="output" class='table table-striped Mytable'>
<thead>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>price</td>
		<td>Picture</td>
		<td>Availability</td>
		<td>Admin</td>
	</tr>
</thead>

</table>
</center>
</div>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</div>
</body>
</html>