<?php
	include_once('../Modeles/Item.php');
	
	
		$item=new Item();
		$result=$item->selectOneItem("*","isAvailable","1");
        $result=json_encode($result);
        echo $result;
	
?>