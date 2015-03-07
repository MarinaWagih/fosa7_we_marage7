
<html>
<head>
	<title>Add Product</title>

	<script type="text/javascript" src="../js/jquery.js"></script>
    
    <script type="text/javascript" src="../js/addproduct.js"></script>
</head>
<body>
<a href="">Home</a>&nbsp;&nbsp;<a  href="products.php">Products</a>&nbsp;&nbsp;<a href="">Manual Order</a>&nbsp;&nbsp;<a href="">Checks</a>
<h1>Add Product</h1>
<form class="add">
<center>
	<table width="500px"  height="300px">
		<tr>
			<td>
				<label>Product:</label>	
			</td>
			<td>
				<input type="text" id='name' name="name"></input>
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
				<select id='category'></select>&nbsp;&nbsp;&nbsp;&nbsp;<a href="addcategory.php">Add Category</a>
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
</body>
</html>