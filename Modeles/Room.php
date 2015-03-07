<?php
require_once('MySQLiQuery.php');
class Room{
		protected $dbconn;

	function __construct() {
								
		//$this->TestObj = MySQLiQuery::getObject($GLOBALS["host"],$GLOBALS["username"],$GLOBALS["pass"],$GLOBALS["DB"]);
      //$this->dbconn = MySQLiQuery::getObject('127.0.0.1','root','0000000mrmr','phpdb');
       $configs = include('Conf.php');
        $this->dbconn=MySQLiQuery::getObject($configs['host'],$configs['username'],$configs['pass'],$configs['DB']);
    
        }

	public function insertRoom($data){
			
			if($this->dbconn){
          	    ////echo 'Connected//';
                $result=$this->dbconn->insert('Room' , array('number','description') , $data);
                             
                return $result;                               
            }else{
           	    //echo 'Failed//';
            }	
	
		}

 
	public function updateRoom($targetColumns,$newValues,$whereColumn,$whereValue){
			
			
			if($this->dbconn){
          	    //echo 'Connected//';
                $result=$this->dbconn->update('Room',$targetColumns,$newValues,$whereColumn,$whereValue);
                var_dump( $result);
                return $result;                                            
            }else{
           	    //echo 'Failed//';
            }	
	
		}

	public function deleteRoom($whereColumn,$whereValue){
			
			if($this->dbconn){
          	    //echo 'Connected//';
                $result=$this->dbconn->delete('Room',$whereColumn,$whereValue,'=');
                
                return $result;                                           
            }else{
           	    //echo 'Failed//';
            }	
	
		}


		public function selectOneRoom($TargetColumn,$whereColumn,$whereValue){
			
			if($this->dbconn){
          	    //echo 'Connected select//';
                $result=$this->dbconn->select('ASSOCIATIVE','Room',$TargetColumn,False,$whereColumn,$whereValue,'=');
                
                return $result;                                           
            }else{
           	    //echo 'Failed//';
            }	
	
		}


		public function selectRooms(){
			
			if($this->dbconn){
          	    //echo 'Connected select//';
                $result=$this->dbconn->select('ASSOCIATIVE','Room');
                
                return $result;                                           
            }else{
           	    //echo 'Failed//';
            }	
	
		}



}
?>
