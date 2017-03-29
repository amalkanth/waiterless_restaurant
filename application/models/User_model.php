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
function validate_add_cart_item(){
     
    $id = $this->input->post('product_id'); // Assign posted product_id to $id
    $qty = $this->input->post('quantity'); // Assign posted quantity to $cty
     $remarks = $this->input->post('remarks'); 
    $this->db->where('item_id', $id); // Select where id matches the posted id
    $query = $this->db->get('tbl_item'); // Select the products where a match is found and limit the query by 1
   $conn=mysqli_connect("localhost","root","","waiterless_restaurant");
    $numr= mysqli_num_rows(mysqli_query($conn,"select * from tbl_item where item_id=32"));
    // Check if a row has matched our product id
    //if($query->num_rows > 0){
    if($numr > 0){
    	echo "item";
    // We have a match!
        foreach ($query->result() as $row)
        {echo $row->price;$sta="not confirmed";
            // Create an array with product information
            $data = array(
                'id'      => $id,
                'qty'     => $qty,
            	
                'price'   => $row->price,
                'name'    => $row->item_name,
            	'remarks' =>$remarks,
            	'order_status'=>$sta
            );
            //print_r($data);
 
            // Add the data to the cart using the insert function that is available because we loaded the cart library
            $this->cart->insert($data); 
             
            return TRUE; // Finally return TRUE
        }
     
    }else{
        // Nothing found! Return FALSE! 
        return FALSE;
    }
}

// Updated the shopping cart
function validate_update_cart(){
     error_reporting(0);
    // Get the total number of items in cart
    $total = $this->cart->total_items();
     
    // Retrieve the posted information
    $item = $this->input->post('rowid');
    $qty = $this->input->post('qty');
 
    // Cycle true all items and update them
    for($i=0;$i < $total;$i++)
    {
        // Create an array with the products rowid's and quantities. 
        $data = array(
           'rowid' => $item[$i],
           'qty'   => $qty[$i]
        );
         
        // Update the cart with the new information
        $this->cart->update($data);
    }
 
}
public function confirmorder()
{
$order=array('order_id'=>NULL,'table_id'=>$_SESSION['tableno'],'user_id'=>$_SESSION['user_id']
,'order_date'=>$_SESSION['date'],'order_time'=>$_SESSION['time'],
'order_status'=>0,
'bill_amount'=>$this->cart->total());
$tableno=$_SESSION['tableno'];
$user_id=$_SESSION['user_id'];
$date=$_SESSION['date'];
$time=$_SESSION['time'];
$this->db->insert('tbl_order',$order);
 $tbl=$_SESSION['tableno'];
$query=$this->db->query("select order_id from tbl_order where table_id='$tbl' and order_time='$time'");
 foreach($query->result() as $row)
 {//echo $_SESSION['time'];
 	$ordrid=$row->order_id;
 	//echo $ordrid['order_id'];
 }
 //echo $ordrid['order_id'];
 
 
 foreach ($this->cart->contents() as $items)
 
 {
 	
 	$qty=$items['qty'];
  $remarks=$items['remarks'];
  $price=$items['subtotal'];
  $item_id=$items['id'];
  
        $query = $this->db->query("select item_name from tbl_item where item_id=$item_id");
   
        
         foreach($query->result() as $row)
         { $item_name=$row->item_name;
         }
         
 	$orderitem=array('orderitem_id'=>NULL,'order_id'=>$ordrid,'item_id'=>$item_id,'item_name'=>$item_name,
 					'qty'=>$qty,'remarks'=>$remarks,'price'=>$price
 						,'discount_amount'=>0);
 		$orditm=$this->db->insert('tbl_order_items',$orderitem);
 		 }	    $this->cart->destroy();

 
 
    // Cycle true all items and update them
    
       
}
public function retrieve_orders()
{$user_id=$_SESSION['user_id'];
	
		$query = $this->db->query("
    SELECT tbl_order.order_id,tbl_order.order_status,tbl_order_items.item_id,tbl_order_items.item_name,tbl_order_items.qty,tbl_order_items.price
FROM tbl_order
JOIN tbl_order_items ON tbl_order.order_id = tbl_order_items.order_id
 where tbl_order.user_id='$user_id'
ORDER BY tbl_order.order_id;");
	
	$results=array();
         foreach($query->result() as $row)
         {
         	$results[]=array('order_status'=>$row->order_status,'item_id'=>$row->item_id,'item_name'=>$row->item_name,'qty'=>$row->qty,'price'=>$row->price
         	
         	);
         	                 
         }
         
         return $results;         
}

public function inputrating()
{
	 $star = $this->input->post('star'); // Assign posted product_id to $id
    $product_id = $this->input->post('product_id'); // Assign posted quantity to $cty
     $reviews = $this->input->post('reviews');
     $user_id=$_SESSION['user_id'];
$date=$_SESSION['date'];
     $rate=array('rating_id'=>NULL,'rating'=>$star,'review'=>$reviews,'item_id'=>$product_id,
     'user_id'=>$user_id,'date'=>$date);
     $rating=$orditm=$this->db->insert('tbl_item_rating',$orderitem);
}

}


  