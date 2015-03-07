<?php
require_once('../Modeles/Item.php');
require_once('../Modeles/Category.php');

if(isset($_GET['productid'])){




$productid=$_GET['productid'];
$conn=new Item();
$result=$conn->selectOneItem('*','id',$productid);
	echo $result;



}




?>