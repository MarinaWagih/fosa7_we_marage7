<html>
<head>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/checks.js"></script>
	
	<script src="../js-webshim/minified/polyfiller.js"></script>
    <link rel="stylesheet" href="../css/checks.css">
    <link rel="stylesheet" href="../css/css1/bootstrap.min.css">    
<title>Checks</title>
	
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>

</head>

<body>
<?php session_start();?>
<div id="transparent">
    

<div id="Header">
    	<br>
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<span><?php echo $_SESSION['username']; ?></span>
		
  		<a href="home.php">Home</a>&nbsp;&nbsp;
  		<a href="reg.php">Add User</a>&nbsp;&nbsp;
		<a href="products.php">Products</a>&nbsp;&nbsp;
		<a href="orders.php">Manual Order</a>&nbsp;&nbsp;
		<a href="out.php" >Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>

<div id="content" class="wrapper">
<center><h1>Checks</h1>	
	 
  		<label>Date From :</label>
  		<input type="date" id="from" name="from">
  		
  		<label>Date to :</label>

	 


  		<input type="date" id="from" name="from">
  		

  		<input type="date" id="to" name="to">
  		
  		<select  name="user" id="usr" required>
						
		</select>
		
		<br/><br/><br/>
		<center>
		<div id="mydiv">
			
		</div>

  		

</div>
</div>
  		</center>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">

</body>
</html>
