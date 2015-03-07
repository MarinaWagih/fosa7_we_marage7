<?php

/**
 * Description of ItemOrderItem
 *
 * @author Ahmed
 */
require_once('MySQLiQuery.php');
require_once('Room.php');
class User{
		
			protected $dbconn;

	function __construct() {
								
		$this->dbconn = MySQLiQuery::getObject('127.0.0.1','root','anawany','phpdb');
        }

	public function insertUser($data){

			if($this->dbconn){
          	    
          	   
                
                $result=$this->dbconn->insert('User' , array('name','email','password','RoomId','ext','picture','type') 
                  , $data);
                            
                return $result;                               
            }else{
           	   
            }	
	
		}

 
	public function updateUser($targetColumns,$newValues,$whereColumn,$whereValue){
			
			if($this->dbconn){
          	    
                $result=$this->dbconn->update('User' ,$targetColumns,$newValues,$whereColumn,$whereValue);
                var_dump( $result);
                return $result;                                            
            }else{
           	    
            }	
	
		}

	public function deleteUser($whereColumn,$whereValue){

			if($this->dbconn){
          	    
                $result=$this->dbconn->delete('User',$whereColumn,$whereValue,'=');
                
                return $result;                                           
           }else{
           	   
            }	
	
		}


		public function selectOneUser($TargetColumn,$whereColumn,$whereValue){

			if($this->dbconn)
      {
          	   

                $result=$this->dbconn->select('ASSOCIATIVE','User',$TargetColumn,False,$whereColumn,$whereValue,'=');
                $Room=new Room();
                if(isset($result[0]['RoomId']))
                	$result[0]['RoomId']=$Room->selectOneRoom("*","id",$result[0]['RoomId']);
                return $result;                                           
            }else{
           	    
            }	

	
		}
		
		public function selectSpecUsers($TargetColumn,$whereColumn,$whereValue){

			if($this->dbconn){
          	   
                $result=$this->dbconn->select('ASSOCIATIVE','User',$TargetColumn,False,$whereColumn,$whereValue,'=');
               
                return $result;                                           
            
	
		}
}
		public function selectUsers(){

			if($this->dbconn){
          	   
                $result=$this->dbconn->select('ASSOCIATIVE','User');
                $Room=new Room();
                for ($i=0; $i <count($result) ; $i++) { 
                   $result[$i]['RoomId']=$Room->selectOneRoom("*","id",$result[$i]['RoomId']);
                }
               
                return $result;                                           
            }else{
           	    
            }	
	
		}



}
?>
