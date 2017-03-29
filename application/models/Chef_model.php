<?php 
class Chef_model extends CI_Model{ 
	public function retrive_order()
	{
		$query = $this->db->query("
    SELECT tbl_order.table_id,tbl_order.order_id,tbl_order.order_time,tbl_order_items.item_name,tbl_order_items.qty,tbl_order_items.remarks
FROM tbl_order
JOIN tbl_order_items ON tbl_order.order_id = tbl_order_items.order_id
 where tbl_order.order_status=0
ORDER BY tbl_order.order_id;");
	
	$results=array();
         foreach($query->result() as $row)
         {
         	$results[]=array('table_id'=>$row->table_id,'order_id'=>$row->order_id,
         	'order_time'=>$row->order_time,'item_name'=>$row->item_name,
         	'qty'=>$row->qty,'remarks'=>$row->remarks,
         	);
         	                 
         }
         
         return $results;         
     
    
	}
	
public function confirm_order($id)
{
	$query = $this->db->query("update tbl_order set order_status=1 where order_id=$id");
	if($query)
	{
		return TRUE;
	}
	else {
		return FALSE;
	}
}

}