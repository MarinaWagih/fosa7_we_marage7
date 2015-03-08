<?php
require_once('../Modeles/User.php');

$db=new User();
$result=$db->selectUsers();
$result=json_encode($result);
echo $result;


?>