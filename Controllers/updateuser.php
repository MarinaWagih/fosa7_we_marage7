<?php
require_once('../Modeles/User.php');


if(isset($_POST)){

	$conn=new User();
	$targetcolumns=array('name' ,'email','password','ext');
	$newvalues = array($_POST['Name'],$_POST['E-mail'],$_POST['password'],$_POST['Ext']);
	
	$result=$conn->updateUser($targetcolumns,$newvalues,'id',$_POST['userid']);
	echo $result;

	header('Location:../html/users.php');	

}

?>