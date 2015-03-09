<html>
<head>
	<link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/css1/bootstrap.min.css">
	<title>Admin Home</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/adminHome.js"></script>
</head>
<body >
<?php session_start();?>
<div id="transparent">
<div id="Header">
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<p><?php echo $_SESSION['username']; ?></p>
  		<a href="users.php">Users</a>&nbsp;&nbsp;
		<a href="products.php">Products</a>&nbsp;&nbsp;
		<a href="orders.php">Manual Order</a>&nbsp;&nbsp;
		<a href="checks.php">Checks</a>&nbsp;&nbsp;
		<a href="out.php" >Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>
<center >
<div id="content" class='body wrapper'>
<h1>Orders</h1>	
</div>
</center>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</div>
</body>
</html>