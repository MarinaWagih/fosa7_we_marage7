
<html>
<head>
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/css1/bootstrap.min.css"> 
	<title>Users</title>	
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/listusers.js"></script>
    
</head>
<body id ='body'>
<div id="transparent">
<?php session_start();?>

<div id="Header">
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<p><?php echo $_SESSION['username']; ?></p>		
  		<a href="home.php">Home</a>
  		<a href="reg.php">Add User</a>
		<a href="products.php">Products</a>
		<a href="orders.php">Manual Order</a>
		<a href="checks.php">Checks</a>
		<a href="out.php" >Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>
<div id="content" class="wrapper">
<h1>Users</h1>
<center>
<table id="output" class='table table-striped Mytable'>
<thead>
	<tr>
	<td>ID</td>
	<td>Name</td>
	<td>RoomId</td>
	<td>Room Extension</td>
	<td>Picture</td>
	<td>Admin</td>
	</tr>	
</table>
</center>

<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</div>
</div>
</body>
</html>