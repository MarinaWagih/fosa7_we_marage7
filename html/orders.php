<html>
<head>
	
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/order.js"></script>
</head>
<body>
  	<div id="Order">
  		<div id="SelectedItems"></div>
  		<div>
  			<label> Notes: </label>
  			<textarea id="Notes"></textarea><br>
  			<select id="RoomNo">
  				
  			</select><br>

  			<span>_______________________</span><br>
            <span id="Total"></span><br>
            <input type="button" id ="Confirm" value="Confirm">
  		</div>
  	</div>
	--------------------------------------  
	<div id="latestOrder"></div>
	--------------------------------------
	<div id="AllItems"></div>
	---------------------------------------
	<?php session_start();?>
  <input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
  <input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
</body>
</html>