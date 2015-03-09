<html>
<head>
	  <link rel="stylesheet" href="../css/css1/bootstrap.min.css">
    <link rel="stylesheet" href="../css/order.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/order.js"></script>

</head>
<body>
<?php session_start();?>
<div id="transparent">
  <div id="Header">
  <div id="Links">
    <!-- <img src="../img/images (16).png"> -->
    <img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    <span style=" text-indent: 200em;"><?php echo $_SESSION['username'];?></span>
    <a class='hideme' href="home.php">Home</a>
    <a class='hideme' href="users.php">Users</a>
    <a class='hideme' href="products.php">Products</a>
    <a class='hideme' href="checks.php">Checks</a>
    <a class='nohide' href="myorder.php">My Orders</a>
    <a href="out.php" id='logout'>Log out</a>    
      <img src="../img/finallogosmall.png">    
  </div>  
  </div>
  	<div id="Order" class="orderform">

  		<div id="SelectedItems"></div>
  		<div>

  			<label> Notes: </label>
  			<textarea id="Notes"></textarea><br>
        <label> Room: </label>
  			<select id="RoomNo">  				
  			</select>

  			<br>
            <span id="Total">Total=0</span>
            <br>
            <input type="button" id ="Confirm" value="Confirm">
  		</div>
  	</div>
<div id="rightdiv">  
	<div id="latestOrder"><label>last order</label></div>
<p>_________________________________</p>
	<div id="AllItems"><label>all items</label></div>
</div>

  <input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId'];?>">
  <input type="hidden" id="UserType" value="<?php echo $_SESSION['Type'];?>">
  <input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
  <input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
  
</body>
</html>