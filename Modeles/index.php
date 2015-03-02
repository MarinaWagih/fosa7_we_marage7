<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
        include_once('User.php');
        $Obj=new User();
        $data=  array("name"=>"Tea","price"=>"3.5","isAvailable"=>"1","CategoryId"=>"2","picture"=>"Picpath","id"=>"1");
        // echo $Obj->insetItem($data);
        // var_dump($Obj->selectOneUser("*","id","1"))
        var_dump($Obj->selectUsers())
        ?>
     </pre>
    </body>
</html>
