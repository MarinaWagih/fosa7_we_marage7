<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemOrderItem
 *
 * @author Bishoy.MGFS
 */
include_once('MySQLiQuery.php');
include_once('Item.php');
class OrderItem 
{
    function __construct()
    {
       // $this->TestObj = MySQLiQuery::getObject($GLOBALS["host"],$GLOBALS["username"],$GLOBALS["pass"],$GLOBALS["DB"]);
        $this->db = MySQLiQuery::getObject('127.0.0.1','root','0000000mrmr','phpdb');

    }
    
    function insertItemOrder($data)
    {
    	
        if($this->db)
        {
        return $insert = $this->db->insert("ItemOrder", array("OrderId" , "ItemId" ,"quantity"),  
        	array($data['OrderId'] ,$data['ItemId'] ,$data['quantity'] ));
        }
        else
        {
         return "failed to connect to Database"."<br/>";		
        }
        
    }
    
    function selectOneItemOrder($TargetColumn,$whereColumn,$whereValue)
    {
    	if($this->db)
        {

        	$result=  $this->db->select('ASSOCIATIVE','phpdb.ItemOrder',$TargetColumn,False,$whereColumn,$whereValue,'=');
                $Item=new Item();
	        for ($i=0; $i < count($result); $i++) 
	        { 
	        	$result[$i]["ItemId"]=$Item->selectOneItem("*","id",$result[$i]["ItemId"]);
	        }
        	return $result;

    	}
    	else
    	{
    		 return "failed to connect to Database"."<br/>";
    	}
    }

    
    function selectAllItemOrders()
    {
    	if($this->db)
        {
	        $result=  $this->db->select('ASSOCIATIVE','phpdb.ItemOrder');
	        $Item=new Item();
	        for ($i=0; $i <  count($result); $i++) 
	        { 
	        	$result[$i]["ItemId"]=$Item->selectOneItem("*","id",$result[$i]["ItemId"]);
	        }
	        
	        return $result;
        }
    	else
    	{
    		 return "failed to connect to Database"."<br/>";
    	}
    }
    
    function  deleteOneItemOrder($whereColumn , $whereValue)
    {
    	if($this->db)
        {
	        $result=  $this->db->delete('phpdb.ItemOrder',$whereColumn,$whereValue,'=');
	        
	        return $result;
	     }
    	else
    	{
    		 return "failed to connect to Database"."<br/>";
    	}
    }
    
    function updateOneItemOrder($targetColumns,$newValues,$whereColumn,$whereValue)
    {
       if($this->db)
        {
	        $result=$this->db->update('phpdb.ItemOrder',$targetColumns,$newValues,$whereColumn,$whereValue,'=','AND');
	        
	        return $result;
	     }
    	else
    	{
    		 return "failed to connect to Database"."<br/>";
    	}
    }
   
}
