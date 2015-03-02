<?php
	include_once('../Modeles/User.php');
	if(isset($_POST))
	{
		$currUser = new User();
                
        $result = $currUser->selectOneUser("*", "email",$_POST["email"]);
        /*[{"id":"1","name":"Marina","email":"Marina_wagih@yahoo.com",
        "password":"0000000mrmr","RoomId":[{"id":"1","number":"124","description":"Os lab top"}],
        "ext":"2050","picture":"MyPic","type":"user"}]
        */
        //$result=explode("//", $result);
        // var_dump($result[0]);
		// $result = json_encode($result);
  //       echo $result;	
        $DBpass=$result[0]['password'];
        $USpass=md5($_POST["password"]);
      if ( $DBpass==$USpass) 
      {
      	
      	session_start();
      	$_SESSION['UserId']=$result[0]['id'];
      	echo "Done";
      }
      else
      {
      	echo "Error";
      }
    }



?>
