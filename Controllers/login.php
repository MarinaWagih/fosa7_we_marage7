<?php
	include_once('../Modeles/User.php');
        
  if(!empty($_SESSION['UserId'])){
        	if(isset($_POST))
        	{
        		$currUser = new User();
                        
                $result = $currUser->selectOneUser("*", "email",$_POST["email"]);
            if(!empty($result[0]['id']))    
             {
                $DBpass=$result[0]['password'];
                $USpass=md5($_POST["password"]);
                
              if ( $DBpass==$USpass) 
              {
              	
              	session_start();
              	$_SESSION['UserId']=$result[0]['id'];
                $_SESSION['Type']=$result[0]['type'];
                $_SESSION['picture']=$result[0]['picture'];
                $_SESSION['username']=$result[0]['name'];

               
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
      }else{
        header('Location:../html/home.php');
      }

?>
