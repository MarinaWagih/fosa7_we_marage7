<?php
	include_once('../Modeles/User.php');
	if(isset($_POST))
	{
		$currUser = new User();
                
        $result = $currUser->selectOneUser("*", "email",$_POST["email"]);
    if(!empty($result[0]['id']))    
     {
        $DBpass=$result[0]['password'];
        $USpass=md5($_POST["password"]);
        //$USpass=($_POST['password']);
      if ( $DBpass==$USpass) 
      {
      	
      	session_start();
      	$_SESSION['UserId']=$result[0]['id'];
        $_SESSION['Type']=$result[0]['type'];
        $_SESSION
      	echo "Done:".$_SESSION['Type'];
      }
      else
      {
      	echo "Error";
      }
    }
    else
    {
    	echo "No user in the system with this cradintional";
    }

    

}

?>
