<?php

	include_once("../Modeles/User.php");
	include_once("../Modeles/uploadimg.php");

	$usr = new User();
	$img = new Img();
	
	if(!empty($_POST))
	{
		$res = $img->upload('user',$_FILES["ProfilePicture"]);
		
		
		$res = explode(':',$res);
		
		if($res[0]=="success")
		$result = $usr->insertUser([$_POST["Name"],$_POST["E-mail"],$_POST["password"],$_POST["RoomNo"],$_POST["Ext"],$res[1],"user"]);
		else
			echo $res[0].": ".$res[1];
		var_dump($result);
	}










?>
