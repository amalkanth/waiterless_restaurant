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
         $q="select * from tbl_main_category ";
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
  	 
  	 
  	 
	public function additem($sub_id,$item_name,$price,$description)
	{  
		
		
	  $form=array('item_id'=>NULL,'item_name'=>$item_name,'sub_id'=>$sub_id,'price'=>$price,'description'=>$description);
	   $sql=$this->db->insert_string('tbl_item',$form);
  		$query=$this->db->query($sql);
  		if($query == TRUE){

       $query= $this->db->query("select * from tbl_item where item_name='$item_name'");
       $results=array();
        foreach($query->result() as $row)
        {
          $results=array('item_id'=>$row->item_id,'item_name'=>$row->item_name);
        }

       
  			return $results;
  		}
  	
  		else {
  			
  			return FALSE;
  		}
 
        	 
  	 }
  	 
  	 public function get_details($id)
  	 {
  	 	 $query= $this->db->query("select * from tbl_item where item_id='$id'");
       $results=array();
        foreach($query->result() as $row)
        {
          $results=array('item_id'=>$row->item_id,'item_name'=>$row->item_name,'price'=>$row->price,'description'=>$row->description);
        }

       
  			return $results;
  	 	
  	 	
  	 }
  	 public function image_path($id,$path)
  	 {
  	 	$data = array(
        'image_id' => NULL,
        'item_id' => $id,
        'path' => $path
);
  	 $sql=$this->db->insert_string('tbl_image',$data);
  		$query=$this->db->query($sql);
  		if($query == TRUE){
  			return TRUE;
  		}
  	 }
 

public function offerinsert($offerform)

{

  $sql=$this->db->insert_string('tbl_offer',$offerform);
      $query=$this->db->query($sql);
      if($query == TRUE){
        return TRUE;
      }
    
      else {
        
        return FALSE;
      }
    
}
public function feedback()
{
	$query= $this->db->query("select * from tbl_feedback");
       $results=array();
        foreach($query->result() as $row)
        {
          $results[]=array('f_id'=>$row->feedback_id,'user_name'=>$row->user_name,'feedback'=>$row->feedback,'rating'=>$row->rating,'date'=>$row->date);
        }

       
  			return $results;
}
public function custdetl()
{
	$query= $this->db->query("select * from tbl_user");
       $results=array();
        foreach($query->result() as $row)
        {
          $results[]=array('user_name'=>$row->user_name,'emailid'=>$row->emailid,'phno'=>$row->phno,'point'=>$row->point);
        }

       
  			return $results;
}

  } 
  	 
  	 
  	 
  	 
  