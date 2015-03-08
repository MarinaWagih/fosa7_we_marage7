<html>
<head>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/checks.js"></script>
	
	<script src="../js-webshim/minified/polyfiller.js"></script>
  

	
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>

</head>

<body>
<a href="home.php">Home</a>&nbsp;&nbsp;<a  href="products.php">Products</a>&nbsp;&nbsp;<a href="orders.php">Manual Order</a>&nbsp;&nbsp;<a href="checks.php">Checks</a>
<br><br>	 
<form>
  		from:
  		<input type="date" id="from" name="from">
  		
  		to:
  		<input type="date" id="to" name="to">
  		
  		<select  name="user" id="usr" required>
						
		</select>
		
		<br/><br/><br/>
		
		<div id="mydiv">
			
		</div>
  		
</form>
</body>
</html>
