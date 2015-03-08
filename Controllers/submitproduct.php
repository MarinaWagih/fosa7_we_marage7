<?php
require_once('../Modeles/Item.php');
require_once('../Modeles/Category.php');
require_once('../Modeles/uploadimg.php');

/***************need category id to insert *///////////////////

	$db=new category();
	$result1=$db->selectOneCategory('id','name',$_POST['category']);
	//echo $result1[0]['id'];


	$myImg = new Img ();
	//echo $myImg;
	$myImg=$myImg->upload('item',$_FILES['pic']);
	
	$myImg = explode(':',$myImg);
	//echo $myImg[0].": ".$myImg[1];	
		if($myImg[0]=="success"){

//				$data=array('name'=>$_GET['name'] ,'price'=>$_GET['price'],'isAvailable'=>'1','CategoryId'=>$result1[0]['id'],'picture'=>$_GET['pic'] );
				$data=array('name'=>$_POST['name'] ,'price'=>$_POST['price'],'isAvailable'=>'1','CategoryId'=>$result1[0]['id'],'picture'=>$myImg[1] );

				$conn= new Item();
				$result2=$conn->insertItem($data);	
				echo $result2;

		}else{

			echo $myImg[0].": ".$myImg[1];
			var_dump($result2);
		}






?>
