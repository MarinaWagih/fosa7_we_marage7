<?php
	require_once('../Modeles/User.php');

	if(isset($_POST)){

		$currUser = new User();                
        $result = $currUser->selectOneUser("*", "email",$_POST["email"]);

        if(!empty($result)){
        	// the message
			$msg = 'Dear'.$result[0]['name'].' , click on the following link to change your password';
			// send email
			mail($result[0]['email'],"change password",$msg);


        }else{

        	echo "string";
        }
        




	}








?>