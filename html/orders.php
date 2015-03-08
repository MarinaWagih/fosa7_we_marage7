<html>
<head>
	  <link rel="stylesheet" href="../css/css1/bootstrap.min.css">
    <link rel="stylesheet" href="../css/order.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/order.js"></script>
</head>
<body>

<div id="transparent">
  <div id="Header">
  <div id="Links">
    <img src="../img/images (16).png">
    <p style=" text-indent: 77em;">My name</p>  
    <a href="">Home</a>
    <a href="">My Orders</a>    
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
            <span id="Total"></span>
            <br>
            <input type="button" id ="Confirm" value="Confirm">
  		</div>
  	</div>
<div id="rightdiv">  
	<div id="latestOrder"></div>

	<div id="AllItems"></div>

  </div>
	<?php session_start();?>
  <input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
  <input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
 </div> 
</body>
</html>