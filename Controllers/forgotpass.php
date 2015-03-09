<?php
	require_once('../Modeles/User.php');

	if(isset($_POST)){

		$currUser = new User();                
        $result = $currUser->selectOneUser("*", "email",$_POST["email"]);

        if(!empty($result)){
        		
        	function rand_Pass( $length ) {

			    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			    
			    return substr(str_shuffle($chars),0,$length);

			}

			echo rand_Pass(8);

			$msg = 'Dear'.$result[0]['name'].' , click on the following link to change your password';

        }else{

        	echo "string";
        }

	}








?>