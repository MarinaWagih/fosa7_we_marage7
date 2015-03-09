<html>
<head>
	<title>Admin Home</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/adminHome.js"></script>
<style type="text/css">
	
	table{

			margin: 0 auto;
			border:1;	
	}
	td{
		text-align: center;
	}
	div{
		
	}
</style>
</head>
<body class='body'>
<?php session_start();?>
<div id="Header">
    	<br>
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<span><?php echo $_SESSION['username']; ?></span>
		
  		
  		<a href="users.php">Users</a>&nbsp;&nbsp;
		<a href="products.php">Products</a>&nbsp;&nbsp;
		<a href="orders.php">Manual Order</a>&nbsp;&nbsp;
		<a href="checks.php">Checks</a>&nbsp;&nbsp;
		<a href="out.php" >Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>
<center >

</center>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">

</body>
</html>