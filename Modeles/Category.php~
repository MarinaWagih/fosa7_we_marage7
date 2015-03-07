<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author marina
 */
include_once('MySQLiQuery.php');
class Category {
    //put your code here
    protected  $id;
    protected  $name;
    protected  $description;
    protected  $ParentCategory;
    protected  $TestObj;
    
    public function __construct() {


        $configs = include('Conf.php');
        $this->TestObj=MySQLiQuery::getObject($configs['host'],$configs['username'],$configs['pass'],$configs['DB']);

    }

    /*
    * Take associative Array 
    */
    public function insetCategory($data)
    {
     
        if (isset($this->TestObj))
        {

           if($data['ParentCategory']=="")
           {
             return   $this->TestObj->insert("Category",array("name","description"),array($data['name'],$data['description']));
           }
           else
           {
             return   $this->TestObj->insert("Category",array("name","description","ParentCategory"),array($data['name'],$data['description'],$data['ParentCategory']));
           }
        }
        else
        {
            return "Database connection Error";
        }
    }
    public function updateCategory($data)
    {
        if (isset($this->TestObj))
        {

           if($data['ParentCategory']=="")
           {
             return   $this->TestObj->update("Category",array("name","description"),array($data['name'],$data['description']),"id",$data['id'],"=");
           }
           else
           {
             return   $this->TestObj->update("Category",array("name","description","ParentCategory"),array($data['name'],$data['description'],$data['ParentCategory']),"id",$data['id'],"=");
           }
        }
        else
        {
            return "Database connection Error";
        }
    }
    public function deleteCategory($data)
    {
        # code...
        if (isset($this->TestObj))
        {

             return   $this->TestObj->delete("Category","id",$data['id'],"=");
        }
        else
        {
            return "Database connection Error";
        }
    }
    public function selectAllCategory()
    {
        # code...
        if (isset($this->TestObj))
        {

             return   $this->TestObj->select("ASSOCIATIVE","Category");
        }
        else
        {
            return "Database connection Error";
        }
    }
    public function selectOneCategory($TargetColumn,$whereColumn,$whereValue)
    {
        # code...
        if (isset($this->TestObj))
        {

             return   $this->TestObj->select("ASSOCIATIVE","Category",$TargetColumn,False,$whereColumn,$whereValue,'=');
        }
        else
        {
            return "Database connection Error";
        }
    }
     public function selectAllCategoryBy($TargetColumn)
    {
        # code...
        if (isset($this->TestObj))
        {

                $result=$this->TestObj->select("ASSOCIATIVE","Category",$TargetColumn);
                return $result;
        }
        else
        {
            return "Database connection Error";
        }
    }
}
