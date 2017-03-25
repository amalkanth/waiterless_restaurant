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
        {echo $row->price;
            // Create an array with product information
            $data = array(
                'id'      => $id,
                'qty'     => $qty,
            	
                'price'   => $row->price,
                'name'    => $row->item_name,
            	'remarks' =>$remarks,
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
 
}

  