<?php
require_once('../Modeles/Category.php');


if(isset($_GET)){
	
	if(empty($_GET['category'])){
		
		$data = array('name' => $_GET['name'],
						'description'=> $_GET['disc']);
		myQuery($data);

	}


}

function myQuery($data){
	$conn= new Category();
	$result=$conn->insetCategory($data);
	echo $result ;
}

	
?>