<?php
require_once('../Modeles/Item.php');

if(isset($_GET['productid'])){
		
		$productid=$_GET['productid'];
		$conn= new Item();
		$result=$conn->selectOneItem('*','id',$productid);
			
			// M7dish y8erha 3shan lw mt3mltsh keda htfdal tedy internal server error 
			// aw array gowa array we 7aga zbala 5ales

		echo $result[0]['id'].':'.$result[0]['name'].':'.$result[0]['price'].':'.$result[0]['isAvailable'].':'.$result[0]['picture'];
	

		// // ba3d mrg3 el data bms7 el record we a3ml wa7ed gded 3ala ndafa 3shan my7slsh 
		// //conflict 3shan page el edit product hya hya page el add product

		// $result2=$conn->deleteItem('id',$_GET['productid']);

	}




if(isset($_GET['userid'])){
		
		$userid=$_GET['userid'];
		$conn= new Item();
		$result=$conn->selectOneUser('*','id',$userid);
			
			// M7dish y8erha 3shan lw mt3mltsh keda htfdal tedy internal server error 
			// aw array gowa array we 7aga zbala 5ales

		echo $result[0]['id'].':'.$result[0]['name'].':'.$result[0]['email'].':'.$result[0]['RoomId'].':'.$result[0]['ext'];
	




		// ba3d mrg3 el data bms7 el record we a3ml wa7ed gded 3ala ndafa 3shan my7slsh 
		//conflict 3shan page el edit product hya hya page el add product

		


/************************SH8ALHA   LAMA T7ot EL REGISTRATION ********************/
		//$result2=$conn->deleteUser('id',$_GET['userid']);




	}	


?>