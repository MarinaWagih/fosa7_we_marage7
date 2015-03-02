<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author marina
 */
include_once('MySQLiQuery.php');
include_once('Category.php');
class Item{
    //put your code here
    protected  $id;
    protected  $name;
    protected  $description;
    protected  $ParentItem;
    protected  $TestObj;
    
    public function __construct() {
      $this->TestObj = MySQLiQuery::getObject("127.0.0.1","root","0000000mrmr","phpdb");

    }

    /*
    * Take associative Array 
    */
    public function insetItem($data)
    {
     if (isset($this->TestObj))
        {

            return   $this->TestObj->insert("Item",array("name","price","isAvailable","CategoryId","picture")
            	  ,array($data['name'],$data['price'],$data['isAvailable'],$data['CategoryId'],$data['picture']));
           
        }
        else
        {
            return "Database connection Error";
        }
        
    }
    public function updateItem($data)
    {
        if (isset($this->TestObj))
        {

            return   $this->TestObj->update("Item",array("name","price","isAvailable","CategoryId","picture")
            	  ,array($data['name'],$data['price'],$data['isAvailable'],$data['CategoryId'],$data['picture'])
            	  ,"id",$data['id'],"=");
           
        }
        else
        {
            return "Database connection Error";
        }
    }
    public function deleteItem($data)
    {
       if (isset($this->TestObj))
        {

            return   $this->TestObj->delete("Item","id",$data['id'],"=");
           
        }
        else
        {
            return "Database connection Error";
        }
    }
    public function selectAllItem()
    {
       if (isset($this->TestObj))
        {

             $result= $this->TestObj->select("ASSOCIATIVE","Item");
             $Category= new Category();
             for ($i=0; $i <count($result) ; $i++)
             { 
             	$result[$i]['CategoryId']=$Category->selectOneCategory("*","id",$result[$i]['CategoryId']);
             }
             return $result;
        }
        else
        {
            return "Database connection Error";
        }
    }

    public function selectOneItem($TargetColumn,$whereColumn,$whereValue)
    {
       if (isset($this->TestObj))
        {

             $result= $this->TestObj->select("ASSOCIATIVE","Item",$TargetColumn,False,$whereColumn,$whereValue,'=');
             $Category= new Category();
             $result[0]['CategoryId']=$Category->selectOneCategory("*","id",$result[0]['CategoryId']);
             return $result;
        }
        else
        {
            return "Database connection Error";
        }
    }
}
