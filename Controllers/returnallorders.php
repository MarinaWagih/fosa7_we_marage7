<?php

	include_once("../Modeles/Order.php");
	
	$usr = new Order();
	
	
	$result  = $usr->selectSpecOrders("*" ,"TO_SECONDS(`timeStamp`)" , `TO_SECONDS(\`STR_TO_DATE('2015-03-03','%Y-%m-%d')\`)`);
	
	$result = json_encode($result);
	
	echo $result ;

?>


TO_SECONDS(`STR_TO_DATE('2015-03-03','%Y-%m-%d')`)
