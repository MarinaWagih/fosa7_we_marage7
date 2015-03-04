<?php
	include_once("../Modeles/Room.php");

	$room = new Room();

	$result  = $room->selectRooms();
	$result = json_encode($result);
	
	echo $result ;
	
?>
