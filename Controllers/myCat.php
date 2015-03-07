<?php
require_once('../Modeles/Category.php');



// lama b3red el parent categories fe add category 

	// ana 3amelha be get b2ay 7aga bdal m3ml php file gded 

	if(!empty($_GET['xyz'])){
	
			$conn = new Category();
			$result=$conn->selectOneCategory('name');
			$mydata="";
			for($i=0;$i<count($result);$i++){
			$mydata=$result[$i]['name'].':'.$mydata;

			}
			echo $mydata;		

	}else{

// lama b3red el categories fe el add product

$conn= new Category();
$result=$conn->selectAllCategoryBy('name');
$mydata="";
for($i=0;$i<count($result);$i++){
$mydata=$result[$i]['name'].':'.$mydata;

}
echo $mydata;



}
?>