<?php
	include_once("../Modeles/Order.php");
	include_once("../Modeles/OrderItem.php");
	if(!empty($_POST))
	{

		$order=new Order();
		$itms=new OrderItem();
		$Savedataflag=false;
		session_start();
		$orderId=$order->selectOneOrder("Max(`id`),`status`" , 'UserId' ,$_POST['userid'] );
		if ($orderId[0]['status']!="processing")
		{
			$result=$order->insertOrder(array('UserId'=>$_POST['userid'],
			'isPaid'=>"0",'status'=>"processing",'notes'=>$_POST['notes']
			,'RoomId'=>$_POST['RoomId'],'totalBill'=>'0'));	
			$orderId=$order->selectOneOrder("Max(`id`),`status`" , 'UserId' ,$_POST['userid'] );
		}
		$lastOrder=$order->selectOneOrder("*","id",$orderId[0]["Max(`id`)"]);
		
		if (count($_POST['Item_Order'])==count($_POST['Quantity']))
		{

			$falg=true;
			$itemsId=$_POST['Item_Order'];
			$Quantity=$_POST['Quantity'];
			for ($i=0; $i <count($itemsId) ; $i++) 
			{ 
			    for ($j=0; $j <count($lastOrder[0]["Itemes"]) ; $j++) 
			    { 
			    	if ($lastOrder[0]["Itemes"][$j]["ItemId"][0]["id"]==$itemsId[$i]) 
			    	{
			    	$result+=$itms->updateOneItemOrder("quantity",((int)$lastOrder[0]["Itemes"][$j]["quantity"])+1,
			    			['OrderId','ItemId'],[$lastOrder[0]['id'],$itemsId[$i]]);
			    		$falg=false;
			    	}
			    }
			    if($falg)
			    {
					$result+=$itms->insertItemOrder(array('OrderId'=>$orderId[0]["Max(`id`)"],
					'ItemId'=>$itemsId[$i],'quantity'=>$Quantity[$i]));
				}
			}
		}
		var_dump($result);

	}
	else 
	{
		echo "invalid data or you're not loged";
	}
?>