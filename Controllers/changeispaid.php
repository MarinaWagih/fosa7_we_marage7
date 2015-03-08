<?php

	require_once('../Modeles/Order.php');


	if(isset($_GET))
	{
		$targetcolumn='isPaid';
	
		$conn = new Order();
		
		if($_GET["orderid"])
			$result=$conn->updateOneOrder($targetcolumn,"1",'id',$_GET['orderid']);
 			echo $result;
	}


?>
