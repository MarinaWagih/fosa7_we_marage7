<?php

require_once('../Modeles/Order.php');


if(isset($_GET['orderid']))
{
		
		$orderid=$_GET['orderid'];	
		$conn= new Order();
		
		$result=$conn->deleteOneOrder('id',$orderid);
		echo $result ;
}


?>
