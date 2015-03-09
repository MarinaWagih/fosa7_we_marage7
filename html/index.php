<!DOCTYPE html>
<html>
<head>
	<title>HTML5 Login</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/login.css">
	
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
</head>
<body>
  <div id="Header">
<!--   	<img src="../Imgs/images (16).png">
	<p style=" text-indent: 77em;">My name</p> -->	
		
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/finallogosmall.png">
	</div>
<div id="Container">
	<section class="loginform cf">
		<img src="../img/finallogo.png">
		<!-- <form name="login"  accept-charset="utf-8"> -->
		<div >
			<ul>
				<li>
					<label for="usermail">Email:&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="email" id="usermail" name="usermail" placeholder="yourname@email.com" required>
				</li>
				<li>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" placeholder="password" required></li>
				<li>
					<input id="login" type="submit" value="Login">
				</li>
				<li><center>
					<a href="givemail.php">Forgot your password !</a>
					</center>
				</li>
			</ul>
		<!-- </form> -->
		<div id="myDiv"></div>
		</div>
		
	</section>
</div>	
</body>
</html>
