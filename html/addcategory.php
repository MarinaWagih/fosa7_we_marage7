
<html>
<head>
	<title>Add Category</title>
 	<link rel="stylesheet" href="../css/addcategory.css">
	<script type="text/javascript" src="../js/jquery.js"></script>    
    <script type="text/javascript" src="../js/addcategory.js"></script>
</head>
<body>
<div id="transparent">
	<div id="Header">
		<img src="../img/images (16).png">
		<p>My name</p>
		<a href="">Home</a>
		<a href="products.php">Products</a>
		<a href="">Manual Order</a>
		<a href="">Checks</a>
		<img src="../img/finallogosmall.png">
    </div>
<div id="content" class="wrapper">
<h1>Add Category</h1>
<form class="add">

				<label>Category:</label>	
				<input type="text" id='name' name="name"></input>
				</br>
				<label>Discription:</label>	
				</br>
				<textarea type="text" id='disc' name="disc"></textarea>
				</br>
				<center>
				<input type="submit" action='../addproduct.php' id='submit' name="submit" value="Add">
				<input type="reset" value="Reset" id="Reset"></input>
				</center>

</form>
<?php session_start();?>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
</div>
</div>
</body>
</html>