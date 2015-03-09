
<html>
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" href="../css/addproduct.css">
    <link rel="stylesheet" href="../css/css1/bootstrap.min.css">

	<script type="text/javascript" src="../js/jquery.js"></script>
    
    <script type="text/javascript" src="../js/editproduct.js"></script>
</head>
<body>
		<?php session_start();?>
<div id="transparent">
<div id="Header">
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<p><?php echo $_SESSION['username']; ?></p>
		
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
<form class="add loginform" method="POST" action="../Controllers/updateproduct.php" enctype="multipart/form-data" accept-charset="utf-8">
				<label>Product:&nbsp;&nbsp;</label>	
				<input type="text" id='name' name="name"><br>
				<input type='text' name='id' id='zzz' hidden>
				<label>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>	
				<input type="text" id='price' name="price">
				<span>EGP</span><br>
				<label>Category:</label>	
				<select id='category' name="category"></select>
				<a href="addcategory.php">Add Category</a>
				<label>Product Picture:</label>
				<input type="file" id='pic' name="pic">
				<input type="submit" id='submit' name="submit">
				<input type="reset">
</form>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</div>
</body>
</html>