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
  	 
   public function addsubcategory($form)
  	 {
  	 	
       $sql=$this->db->insert_string('tbl_sub_category',$form);
  		$query=$this->db->query($sql);
  		if($query == TRUE){
  			return TRUE;
  		}
  	
  		else {
  			
  			return FALSE;
  		}
  	
  	 }
    public function removecategory($id)
  	 {
  	 	
      $query = $this->db->query("DELETE FROM tbl_main_category
WHERE cat_id=$id");

      
  	
  	 }
  	 
  	 
  	 public function saveimage($item_id, $path)
	{
		$this->db->set('item_id', $item_id);
		$this->db->set('image_id', NULL);
		$this->db->set('path', $path);
		$this->db->insert('tbl_image');
	}  	 

	public function additem($sub_id,$item_name,$price,$description)
	{  
		
		
	  $form=array('item_id'=>NULL,'item_name'=>$item_name,'sub_id'=>$sub_id,'price'=>$price,'description'=>$description);
	   $sql=$this->db->insert_string('tbl_item',$form);
  		$query=$this->db->query($sql);
  		if($query == TRUE){
  			return TRUE;
  		}
  	
  		else {
  			
  			return FALSE;
  		}
 
        	 
  	 }
  } 
  	 
  	 
  	 
  	 
  