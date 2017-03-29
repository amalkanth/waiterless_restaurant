
<?php
class User extends  CI_Controller{
	public function userhome()
	{
		$this->load->view('user/userhome');
	}
	
function cart()
{
    $data['products'] = $this->User_model->retrieve_products(); // Retrieve an array with all products
    $data['orders']=$this->User_model->retrieve_orders();
    $data['content'] = 'user/products'; // Select our view file that will display our products
    $this->load->view('user/viewcart',$data);
    

}


function add_cart_item(){
     
     
    if($this->User_model->validate_add_cart_item() == TRUE){
         
        // Check if user has javascript enabled
        if($this->input->post('ajax') != '1'){
             //11
            
        	redirect('user/cart'); // If javascript is not enabled, reload the page with new data
        } else{
        	
            echo 'true'; // If javascript is enabled, return true, so the cart gets updated
        }
        
    }
}


function show_cart(){
    $this->load->view('user/cart');
}
function update_cart()
{
    $this->User_model->validate_update_cart();
    redirect('user/cart');





}

function empty_cart(){
    $this->cart->destroy(); // Destroy all cart data
    redirect('user/cart'); // Refresh te page
}


public function confirmorder()
{
$qry=$this->User_model->confirmorder();	 

	 redirect('user/cart');

	 
}

 public function offer(){
  $this->load->view('user/myoffers');

}

}
