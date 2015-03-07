<?php
require_once('../Modeles/Item.php');

$db=new Item();
$result=$db->selectAllItem();
$result=json_encode($result);
echo $result;





?>