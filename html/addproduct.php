
<html>
<head>

	<link rel="stylesheet" href="../css/addproduct.css">
    <link rel="stylesheet" href="../css/css1/bootstrap.min.css">
	<title>Add Product</title>
	<script type="text/javascript" src="../js/jquery.js"></script>   
    <script type="text/javascript" src="../js/addproduct.js"></script>
</head>
<body>
<div id="transparent">
    <div id="Header">
		<img src="../img/images (16).png">
		<p>Admin Name</p>
		<a href="home.php">Home</a>
		<a  href="products.php">Products</a>
		<a href="orders.php">Manual Order</a>
		<a href="checks.php">Checks</a>
	    <img src="../img/finallogosmall.png">		
	</div>	

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
<h1>Add Product</h1>
<form class="add loginform cf" method="POST" action="../Controllers/submitproduct.php" enctype="multipart/form-data" 	accept-charset="utf-8">
	<label>Product :&nbsp;&nbsp;</label>	
	<input type="text" id='name' name="name"></input><br>
	<label>Price :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>	
	<input type="text" id='price' name="price"></input>
	<span>EGP</span><br>
	<label>Category :</label>	
	<select id='category' name='category'></select>
	<a href="addcategory.php">Add Category</a>
	<label id="piclabel">Product Picture:</label>
	<input type="file" id='pic' name="pic"></input>
	<input type="submit" id='submit' name="submit" value="Add">
	<input type="reset">
</form>

<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">

</body>
</html>