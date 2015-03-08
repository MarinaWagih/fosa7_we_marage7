<?php

	require_once('../Modeles/Item.php');

	if(isset($_GET)){
		$conn=new Item();
		$result1=$conn->selectOneItem('*','id',$_GET['productid']);
		
		
		//toggel avilability

		if($result1[0]['isAvailable']=='1'){
			
			$result1[0]['isAvailable']='0';
		
		}else{
			$result1[0]['isAvailable']='1';
		}
			

		$data= array('id'=>$_GET['productid'],
						'name' =>$result1[0]['name'] ,
						'price'=>$result1[0]['price'],
						'isAvailable'=>$result1[0]['isAvailable'],
						'CategoryId'=>$result1[0]['CategoryId'][0]['id'],
						'picture'=>$result1[0]['picture'],);
		//update product

		$result2=$conn->updateItem($data);

		echo $result2.'<br />done';

	}
















?>