
<html>
<head>
	<title>Add Category</title>

	<script type="text/javascript" src="../js/jquery.js"></script>
    
    <script type="text/javascript" src="../js/addcategory.js"></script>
</head>
<body>
<a href="">Home</a>&nbsp;&nbsp;<a  href="products.php">Products</a>&nbsp;&nbsp;<a href="">Manual Order</a>&nbsp;&nbsp;<a href="">Checks</a>
<h1>Add Category</h1>
<form class="add">
<center>
	<table width="500px"  height="300px">
		<tr>
			<td>
				<label>Category:</label>	
			</td>
			<td>
				<input type="text" id='name' name="name"></input>
			</td>
		</tr>
		<tr>
			<td>
				<label>Discription:</label>	
			</td>
			<td>
				<textarea type="text" id='disc' name="disc"></textarea>
			</td>
		</tr>
		
		
		<tr>
			<td align="right">
				<input type="submit" action='../addproduct.php' id='submit' name="submit"></input>
			<td>
				<input type="reset"></input>
			</td>
		</tr>
	</table>
</center>
</form>
</body>
</html>