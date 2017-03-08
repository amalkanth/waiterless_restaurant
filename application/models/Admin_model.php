<?php
 class Admin_model extends CI_Model
  {
  	
  	 
  	 public function addcategory($form)
  	 {
  	 	
       $sql=$this->db->insert_string('tbl_main_category',$form);
  		$query=$this->db->query($sql);
  		if($query == TRUE){
  			return TRUE;
  		}
  	
  		else {
  			
  			return FALSE;
  		}
  	
  	 }
  	 
  	 public function getcategory()
  	 {   
         $q="select * from tbl_main_category";
         $query=$this->db->query($q);
         $results=array();
         foreach($query->result() as $row)
         {
         	$results[]=array('cat_name'=>$row->cat_name,'cat_id'=>$row->cat_id);
         	                 
         }
         
         return $results;
            
     
  	 }
  	 
  	 
  	 
  	 
  }