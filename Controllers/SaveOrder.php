<?php
	include_once("../Modeles/Order.php");
	include_once("../Modeles/OrderItem.php");
	if(!empty($_POST))
	{

		$order=new Order();
		$itms=new OrderItem();
		$Savedataflag="0";
		$newOrderFlag=false;
		session_start();
		$status="";
		$orderId=$order->selectOneOrder(" Max(`id`)" , 'UserId' ,$_POST['userid'] );
		if($orderId[0]["Max(`id`)"]!=NULL)
		{
			$lastOrder=$order->selectOneOrder("*","id",$orderId[0]["Max(`id`)"]);
			$status=$lastOrder[0]['status'];
		}
		else
		{
			$status="NotExist";
		}
		//var_dump($orderId);
		if ($status!="processing")
		{
			$result=$order->insertOrder(array('UserId'=>$_POST['userid'],
			'isPaid'=>"0",'status'=>"processing",'notes'=>$_POST['notes']
			,'RoomId'=>$_POST['RoomId'],'totalBill'=>$_POST['totalbill']));
			 $newOrderFlag=true;	
			if($result!="1")
			{
			  $Savedataflag="1";
			 
			}
			$orderId=$order->selectOneOrder("Max(`id`),`status`" , 'UserId' ,$_POST['userid'] );
		}
		//var_dump($orderId);
		$lastOrder=$order->selectOneOrder("*","id",$orderId[0]["Max(`id`)"]);
		
		if (count($_POST['Item_Order'])==count($_POST['Quantity']))
		{

			$falg=true;
			$itemsId=$_POST['Item_Order'];
			$Quantity=$_POST['Quantity'];
			for ($i=0; $i <count($itemsId) ; $i++) 
			{ 
				if ($status=="processing") 
				{
				    for ($j=0; $j <count($lastOrder[0]["Itemes"]) ; $j++) 
				    { 
				    	if ($lastOrder[0]["Itemes"][$j]["ItemId"][0]["id"]==$itemsId[$i]) 
				    	{
				    	$result=$itms->updateOneItemOrder("quantity",
				    		((int)$lastOrder[0]["Itemes"][$j]["quantity"])+$Quantity[$i],
				    			['OrderId','ItemId'],[$lastOrder[0]['id'],$itemsId[$i]]);
				    		$falg=false;
				    		if($result!="1")
							{
							  $Savedataflag="1";
							}
				    	}
				    }
			    }
			    if($falg)
			    {
					$result=$itms->insertItemOrder(array('OrderId'=>$orderId[0]["Max(`id`)"],
					'ItemId'=>$itemsId[$i],'quantity'=>$Quantity[$i]));
					if($result!="1")
					{
					  $Savedataflag="1";
					}
				}
			}
		}
		if(!$newOrderFlag)
		{
			$newValues=((float)$lastOrder[0]['totalBill'])+((float)$_POST['totalbill']);
			$result=$order->updateOneOrder("totalbill",$newValues,"id",$lastOrder[0]['id']);
		}
		 if ($Savedataflag!="1") 
		 {
		 	echo "Done";
		 }
		 else
		 {
		 	echo "Error";
		 }

	}
	else 
	{
		echo "invalid data or you're not loged";
	}
?>