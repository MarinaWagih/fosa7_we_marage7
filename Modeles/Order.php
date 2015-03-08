<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author Bishoy.MGFS
 */
include_once('MySQLiQuery.php');
include_once('User.php');
include_once('Room.php');
include_once('OrderItem.php');


class Order
{
 
     protected $db;
    function __construct()
    {


         $configs = include('Conf.php');
        $this->db=MySQLiQuery::getObject($configs['host'],$configs['username'],$configs['pass'],$configs['DB']);


    }
    
    function insertOrder($data)
    {
        if($this->db)
        {
            $date = date("Y-m-d H:i:s"); ;
            //$date=$date->getTimestamp();
            $insert = $this->db->insert("Order", array("UserId" , "isPaid" ,"status","notes" ,"RoomId","totalBill" 
                    ,"timeStamp")
                , array($data['UserId'] ,$data['isPaid'] ,  $data['status'], $data['notes'],$data['RoomId']
                    ,$data['totalBill'],$date));
            
            return  $insert;
            
        }
       else
        {
             return "failed to connect to Database"."<br/>";
        }
    }
    
    function selectOneOrder($TargetColumn,$whereColumn,$whereValue)
    {
       if($this->db)
        {
            $result=  $this->db->select('ASSOCIATIVE','phpdb.Order',$TargetColumn,False,$whereColumn,$whereValue,'=');
            $user=new user();
            $room=new Room();
            $item=new OrderItem();
            for ($i=0; $i < count($result) ; $i++) 
            { 

                if(isset($result[$i]["UserId"]))
                {
                        $result[$i]["UserId"]=$user->selectOneUser("*","id",$result[$i]["UserId"]);
                }
                if(isset($result[$i]["RoomId"]))
                {
                        $result[$i]["RoomId"]=$room->selectOneRoom("*","id",$result[$i]["RoomId"]);
                }
                 if(isset($result[$i]["id"]))
                {
                    $result[$i]["Itemes"]=$item->selectOneItemOrder("*","OrderId",$result[$i]['id']);
                }

            }
            
            return $result;
        }
       else
        {
             return "failed to connect to Database"."<br/>";
        }
    }
    
    function selectSpecOrders($targetColumn , $highPriority , $whereColumn , $whereValue , $relationalOperator, $logicalOperator)
    {
       if($this->db)
        {
            $result=  $this->db->select('ASSOCIATIVE','phpdb.Order',$targetColumn,False,$whereColumn,$whereValue,$relationalOperator, $logicalOperator);
            
            return $result;
        }
       else
        {
             return "failed to connect to Database"."<br/>";
        }
    }
    
    function selectAllOrders()
    {
        if($this->db)
        {
            $result=  $this->db->select('ASSOCIATIVE','phpdb.Order');
            $user=new user();
            $room=new Room();
            $item=new OrderItem();
            for ($i=0; $i < count($result) ; $i++) 
            { 
               $result[$i]["UserId"]=$user->selectOneUser("*","id",$result[$i]["UserId"]);
               // unset($result[$i]["UserId"][0]['password']);
               // echo $result[$i]["UserId"][0]['password'];
               $result[$i]["RoomId"]=$room->selectOneRoom("*","id",$result[$i]["RoomId"]);
               $result[$i]["Itemes"]=$item->selectOneItemOrder("*","OrderId",$result[$i]['id']);

            }
            
            return $result;
        }
       else
        {
             return "failed to connect to Database"."<br/>";
        }
    }function selectAllOrdersbystatus($value)
    {
        if($this->db)
        {
            $result=  $this->db->select('ASSOCIATIVE','phpdb.Order',"*",FALSE,'status',$value,'!=');
            $user=new user();
            $room=new Room();
            $item=new OrderItem();
            for ($i=0; $i < count($result) ; $i++) 
            { 
               $result[$i]["UserId"]=$user->selectOneUser("*","id",$result[$i]["UserId"]);
               // unset($result[$i]["UserId"][0]['password']);
               // echo $result[$i]["UserId"][0]['password'];
               $result[$i]["RoomId"]=$room->selectOneRoom("*","id",$result[$i]["RoomId"]);
               $result[$i]["Itemes"]=$item->selectOneItemOrder("*","OrderId",$result[$i]['id']);

            }
            
            return $result;
        }
       else
        {
             return "failed to connect to Database"."<br/>";
        }
    }
    
    function  deleteOneOrder($whereColumn , $whereValue)
    {
        if($this->db)
        {
            $result=  $this->db->delete('phpdb.Order',$whereColumn,$whereValue);
            
            return $result;
        }
        else
        {
             return "failed to connect to Database"."<br/>";
        }
    }
    
    function updateOneOrder($targetColumns,$newValues,$whereColumn,$whereValue)
    {
        if($this->db)
        {
            $result=$this->db->update('phpdb.Order',$targetColumns,$newValues,$whereColumn,$whereValue,'=');
            
            return $result;
        }
        else
        {
                 return "failed to connect to Database"."<br/>";
        }
    }
     function selectOrder($TargetColumn,$whereColumn,$whereValue)
    {
         if($this->db)
        {
            $result=  $this->db->select('ASSOCIATIVE','phpdb.Order');
            $user=new user();
            $room=new Room();
            $item=new Item();
            for ($i=0; $i < count($result) ; $i++) 
            { 
               $result[$i]["UserId"]=$usr->selectOneUser("*","id",$result[$i]["UserId"]);
               $result[$i]["RoomId"]=$room->selectOneRoom("*","id",$result[$i]["RoomId"]);
               $result[$i]["Itemes"]=$item->selectOneItemOrder("*","OrderId",$result[$i]['id']);
            }
            
            return $result;
        }
       else
        {
             return "failed to connect to Database"."<br/>";
        }
    }
    
}
