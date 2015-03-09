<html>
  <head>
    <link rel="stylesheet" href="../css/reg.css">
  	<title>
  		Add User
  	</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/reg.js"></script>
  </head>
  <body>
    <?php session_start();?>
    <div id="transparent"> 
    <div id="Header">
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<p><?php echo $_SESSION['username']; ?></p>
  		<a href="home.php">Home</a>&nbsp;&nbsp;
  		<a href="users.php">Users</a>&nbsp;&nbsp;
		<a href="products.php">Products</a>&nbsp;&nbsp;
		<a href="orders.php">Manual Order</a>&nbsp;&nbsp;
		<a href="checks.php">Checks</a>&nbsp;&nbsp;
		<a href="out.php" >Log out</a>
		 <img src="../img/finallogosmall.png">
	</div>
  	<div id="Container">
  		<div id="Login" class="Wrapper">
		 	<section class="loginform cf">
		 	<img src="../img/finallogo.png">
				<form id="form" name="login" action="../Controllers/reg.php" method="POST" enctype="multipart/form-data" 	accept-charset="utf-8">
					<ul>					
						<li>
							<label for="Name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<input type="Name" id="name" name="Name" placeholder="Name" required>
							<span id="spanname" ></span>
							</li>
						<li>
							<label for="E-mail">E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<input type="email" id="E-mail" name="E-mail" placeholder="E-mail" required>
							<span id="spanemail" ></span>
							</li>
						<li>
							<label for="password">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<input type="password" id="password" name="password" placeholder="password" required></li>
						<li>
							<label for="confirmpassword">Confirm Password:</label>
							<input type="password" id="confpass" name="confirmpassword" placeholder="confirmpassword" required>
							<span id="spanpass" ></span>
							</li>
						<li>
							<label for="RoomNo">Room No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<select  name="RoomNo" id="RoomNo" required>
							
							</select> </li>
						<li>
							<label for="Ext">Ext:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<input type="Ext" name="Ext" id="Ext" placeholder="Ext" required>
							<span id="spanExt" ></span>
							</li>
						<li>
							<label for="ProfilePicture">Profile Picture:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<input type="file" name="ProfilePicture" id="pp" placeholder="ProfilePicture" required>
							<span id="spanpp" ></span>
							</li>
						<li>
							<input type="submit" id="submit" value="Save" disabled>
							<input type="Reset" id="reset" value="Reset">
						</li>
					</ul>
				</form>
			</section>
  		</div>
  	</div>

<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</div>	
  </body>
</html>
