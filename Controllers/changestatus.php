<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

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

echo $_GET['orderid'].':'.$_GET['status'];
}




// header('Location:../html/home.php');


?>