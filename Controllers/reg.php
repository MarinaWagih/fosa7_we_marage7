<?php

	include_once("../Modeles/User.php");
	include_once("../Modeles/uploadimg.php");

	$usr = new User();
	$img = new Img();
	
	
	$flag ="0";
	$name =$pass=$conpass=$email=$ext=$pp="";
	
	
	if(!empty($_POST))
	{
		
		if(!empty($_POST['Name']) && !empty($_POST['E-mail'])  && !empty($_POST['confirmpassword']) && !empty($_POST['password']) && ($_POST['password']=== $_POST['confirmpassword']) && !empty($_POST['Ext']) && !empty($_FILES["ProfilePicture"]))
		{
			$res = $img->upload('user',$_FILES["ProfilePicture"]);
		
		
			$res = explode(':',$res);
			$hashed=md5($_POST["password"]);
		
			if($res[0]=="success")
			$result = $usr->insertUser([$_POST["Name"],$_POST["E-mail"],$hashed,$_POST["RoomNo"],$_POST["Ext"],$res[1],"user"]);
			else
				echo $res[0].": ".$res[1];
			header('Location: ../html/users.php');
		}
		else
		{
			header('Location: ../html/reg.php');		
		}
		
	}










?>
