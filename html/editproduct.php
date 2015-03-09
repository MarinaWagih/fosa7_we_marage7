
<html>
<head>
	<title>Edit Product</title>

	<script type="text/javascript" src="../js/jquery.js"></script>
    
    <script type="text/javascript" src="../js/editproduct.js"></script>
</head>
<body>
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

<br>
<h1>Edit Product</h1>
<form class="add" method="POST" action="../Controllers/updateproduct.php" enctype="multipart/form-data" accept-charset="utf-8">
<center>
	<table width="500px"  height="300px">
		<tr>
			<td>
				<label>Product:</label>	
			</td>
			<td>
				<input type="text" id='name' name="name"></input><input type='text' name='id' id='zzz' hidden></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Price:</label>	
			</td>
			<td>
				<input type="text" id='price' name="price"></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Category:</label>	
			</td>
			<td>
				<select id='category' name="category"></select>&nbsp;&nbsp;&nbsp;&nbsp;<a href="addcategory.php">Add Category</a>
			</td>
		</tr>	
		<tr>
			<td>
				<label>Product Picture:</label>
			</td>
			<td>
				<input type="file" id='pic' name="pic"></input>
			</td>
		</tr>
		<tr>
			<td align="right">
				<input type="submit" id='submit' name="submit"></input>
			<td>
				<input type="reset"></input>
			</td>
		</tr>
	</table>
</center>
</form>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</body>
</html>