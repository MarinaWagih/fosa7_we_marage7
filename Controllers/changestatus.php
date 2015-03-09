<?php

require_once('../Modeles/Order.php');


if(isset($_GET)){
	$targetcolumn='status';
	$xvalue='out for delivery';
	$yvalue='done';
	$conn = new Order();
	switch ($_GET['status']) {
		case 'processing':
				
				$result=$conn->updateOneOrder($targetcolumn,$xvalue,'id',$_GET['orderid']);

			break;

		case 'out for delivery':
				$result=$conn->updateOneOrder($targetcolumn,$yvalue,'id',$_GET['orderid']);			
		
			break;
		default:
						
		break;
		}

}




header('Location:../html/home.php');


?>