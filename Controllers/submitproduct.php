<?php
require_once('../Modeles/Item.php');
require_once('../Modeles/Category.php');


/***************need category id to insert *///////////////////

	$db=new category();
	$result1=$db->selectOneCategory('id','name',$_GET['category']);
	//echo $result1[0]['id'];


	


	$data=array('name'=>$_GET['name'] ,'price'=>$_GET['price'],'isAvailable'=>'1','CategoryId'=>$result1[0]['id'],'picture'=>$_GET['pic'] );
	$conn= new Item();
	$result2=$conn->insetItem($data);	
	echo $result2;








?>
