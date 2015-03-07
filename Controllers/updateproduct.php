<?php
require_once('../Modeles/Item.php');
require_once('../Modeles/Category.php');


/***************need category id to insert *///////////////////

if(isset($_GET)){


	$db=new category();
	$result1=$db->selectOneCategory('id','name',$_GET['category']);




	$data=array('id'=>$_GET['id'],'name'=>$_GET['name'] ,'price'=>$_GET['price'],'isAvailable'=>'1','CategoryId'=>$result1[0]['id'],'picture'=>$_GET['pic'] );

	$conn= new Item();
	$result2=$conn->updateItem($data);	
	echo $result2;





}

?>