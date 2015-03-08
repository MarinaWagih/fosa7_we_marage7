<?php
require_once('../Modeles/Order.php');
require_once('../Modeles/OrderItem.php');
require_once('../Modeles/User.php');
	$xyz='done';
	$conn= new Order();
	$result=$conn->selectAllOrdersbystatus($xyz);
	echo json_encode($result);

	

?>