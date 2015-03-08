<?php
	session_start();
	
	include_once("../Modeles/Order.php");
	
	$usr = new Order();
	$result="";
	$userID = "";
	
	if($_SESSION['Type']=='admin')
	{
		$userID = $_POST['user'];
	}
	else
	{
		$userID = $_SESSION['UserId'] ;
	}
	
	if(empty($_POST['from']) || empty($_POST['to']))
	{
		if(!empty($_POST['from']))
		{
			$from = date("Y-m-d", strtotime($_POST['from']));
			
			$result  = $usr->selectSpecOrders("*" ,false,
				["UserId","isPaid","timeStamp"] ,
				[$userID , "0" , $from ] ,
				['=','=','>'] ,
				['AND','AND']
				);
		}
		else
		{
			if(!empty($_POST['to']))
			{
				$to = date("Y-m-d", strtotime($_POST['to']. ' + 1 day'));
				
				$result  = $usr->selectSpecOrders("*" ,false,
					["UserId","isPaid" , "timeStamp"] ,
					[$userID , "0"  , $to] ,
					['=','=','<'] ,
					['AND','AND']
					);
			}
			else
			{
					$result  = $usr->selectSpecOrders("*" ,false,
						["UserId","isPaid"] ,
						[$userID , "0"] ,
						['=','='] ,
						['AND']
						);
			}
		}
		
	}
	else
	{
		$from = date("Y-m-d", strtotime($_POST['from']));
		$to = date("Y-m-d", strtotime($_POST['to']. ' + 1 day'));
		
		$result  = $usr->selectSpecOrders("*" ,false,
			["UserId","isPaid","timeStamp" , "timeStamp"] ,
			[$userID , "0" , $from , $to] ,
			['=','=','>','<'] ,
			['AND','AND','AND']
			);
	}
	
	
	
	
	$result = json_encode($result);
	
	echo $result ;

?>

