<?php
	include_once('../Modeles/Order.php');
	session_start();
	if (!empty($_SESSION['UserId'])) 
	{

		$maxTimeStamp = new Order();
		$maxTimeStamp = $maxTimeStamp->selectOneOrder("Max(`timeStamp`)" , 'UserId' , $_SESSION['UserId']);
		$orderId = new Order();
		// var_dump($maxTimeStamp);
		$orderId = $orderId->selectOneOrder("*" , 'timeStamp' , $maxTimeStamp[0] ["Max(`timeStamp`)"]);
		$result=json_encode($orderId);
        echo $result;
	}
	else
	{

		echo "Not in system";

	}
?>