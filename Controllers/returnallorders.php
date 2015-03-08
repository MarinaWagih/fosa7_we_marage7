<?php

	include_once("../Modeles/Order.php");
	
	$usr = new Order();
	$result="";

	
	if(empty($_POST['from']) || empty($_POST['to']))
	{
		if(!empty($_POST['from']))
		{
			echo "bnm"."<br/>";
			$from = date("Y-m-d", strtotime($_POST['from']));
			
			$result  = $usr->selectSpecOrders("*" ,false,
				["UserId","isPaid","timeStamp"] ,
				[$_POST['user'] , "0" , $from ] ,
				['=','=','>'] ,
				['AND','AND']
				);
		}
		else
		{
			if(!empty($_POST['to']))
			{
				echo "ghj"."<br/>";
				$to = date("Y-m-d", strtotime($_POST['to']));
				
				$result  = $usr->selectSpecOrders("*" ,false,
					["UserId","isPaid" , "timeStamp"] ,
					[$_POST['user'] , "0"  , $to] ,
					['=','=','<'] ,
					['AND','AND']
					);
			}
			else
			{
					echo "ert"."<br/>";
					$result  = $usr->selectSpecOrders("*" ,false,
						["UserId","isPaid"] ,
						[$_POST['user'] , "0"] ,
						['=','='] ,
						['AND']
						);
			}
		}
		
	}
	else
	{
		echo "yui"."<br/>";
		$from = date("Y-m-d", strtotime($_POST['from']));
		$to = date("Y-m-d", strtotime($_POST['to']));
		
		$result  = $usr->selectSpecOrders("*" ,false,
			["UserId","isPaid","timeStamp" , "timeStamp"] ,
			[$_POST['user'] , "0" , $from , $to] ,
			['=','=','>','<'] ,
			['AND','AND','AND']
			);
	}
	
	
	
	
	$result = json_encode($result);
	
	echo $result ;

?>

