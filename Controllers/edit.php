<?php
require_once('../Modeles/Item.php');
require_once('../Modeles/User.php');

if(isset($_GET['productid'])){
		
		$productid=$_GET['productid'];
		$conn= new Item();
		$result=$conn->selectOneItem('*','id',$productid);
			
			// M7dish y8erha 3shan lw mt3mltsh keda htfdal tedy internal server error 
			// aw array gowa array we 7aga zbala 5ales

		echo $result[0]['id'].':'.$result[0]['name'].':'.$result[0]['price'].':'.$result[0]['isAvailable'].':'.$result[0]['picture'];
	

	}


if(isset($_GET['userid'])){
		
		$userid=$_GET['userid'];
		$conn= new User();
		$result=$conn->selectOneUser('*','id',$userid);
			
			// M7dish y8erha 3shan lw mt3mltsh keda htfdal tedy internal server error 
			// aw array gowa array we 7aga zbala 5ales

		echo $result[0]['id'].':'.$result[0]['name'].':'.$result[0]['email'].':'.$result[0]['RoomId'][0]['id'].':'.$result[0]['ext'].':'.$result[0]['picture'];
	







	}	


?>