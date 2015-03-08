<?php

require_once('../Modeles/Order.php');


if(isset($_GET))
{
	$targetcolumn='isPaid';
	
	$conn = new Order();
		
	$result=$conn->updateOneOrder($targetcolumn,"1",'id',$_GET['orderid']);

}




header('Location:../html/home.php');


?>
