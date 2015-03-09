<?php

	include_once("../Modeles/User.php");
	
	$usr = new User();
	
	$result  = $usr->selectSpecUsers(["id","name"] , "type" , "user");
	
	$result = json_encode($result);
	
	echo $result ;

?>
