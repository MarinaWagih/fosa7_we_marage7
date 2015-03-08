<?php
require_once('../Modeles/Item.php');
require_once('../Modeles/Category.php');
require_once('../Modeles/uploadimg.php');


/***************need category id to insert *///////////////////

if(isset($_GET)){


	$db=new category();
	$result1=$db->selectOneCategory('id','name',$_POST['category']);

	$myImg = new Img ();
	//echo $myImg;
	$myImg=$myImg->upload('item',$_FILES['pic']);
	
	$myImg = explode(':',$myImg);
	//echo $myImg[0].": ".$myImg[1];	
		if($myImg[0]=="success"){


				$data=array('id'=>$_POST['id'],'name'=>$_POST['name'] ,'price'=>$_POST['price'],'isAvailable'=>'1','CategoryId'=>$result1[0]['id'],'picture'=>$myImg[1] );
				$conn= new Item();
				$result2=$conn->updateItem($data);	
				echo $result2;
				header("Location: ../html/products.php");

			}else{

				echo $myImg[0].": ".$myImg[1];
				var_dump($result2);

			}

	




}

?>