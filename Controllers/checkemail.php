<?php

	include_once("../Modeles/User.php");

	$usr = new User();
	
	if(!empty($_POST))
	{
		$result = $usr->selectOneUser("*", "email",$_POST["email"]);
			
		if($result!=NULL)
		{
			echo "mawgood";
		}
		else
		{
			echo "fadya yahbal";
		}
	}


?>
