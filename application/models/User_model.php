<?php 
class User_model extends CI_Model{ // Our Cart_model class extends the Model class
         
        // Function to retrieve an array with all product information
        function retrieve_products(){
        $query = $this->db->query("
    SELECT tbl_item.item_id,tbl_item.item_name,tbl_item.price,tbl_item.description,tbl_image.path
FROM tbl_item
LEFT JOIN tbl_image ON tbl_item.item_id = tbl_image.item_id
ORDER BY tbl_item.item_id;");

$results=array();
         foreach($query->result() as $row)
         {
         	$results[]=array('item_id'=>$row->item_id,'item_name'=>$row->item_name,'price'=>$row->price,'description'=>$row->description,
         	'path'=>$row->path);
         	                 
         }
         
         return $results;         
     
    }

public function add_cart_item()
{
}
}
   