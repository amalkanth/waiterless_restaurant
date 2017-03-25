<<<<<<< HEAD
<?php
class User extends  CI_Controller{
	public function userhome()
	{
		$this->load->view('user/userhome');
	}
	
function cart()
{
    $data['products'] = $this->User_model->retrieve_products(); // Retrieve an array with all products
    $data['content'] = 'user/products'; // Select our view file that will display our products
    $this->load->view('user/viewcart',$data);
    

}

<<<<<<< HEAD
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
function update_cart(){
    $this->User_model->validate_update_cart();
    redirect('user/cart');
=======




>>>>>>> 2c0de3f0930197e1f0928a48d2bc9dd72b770c11
}

function empty_cart(){
    $this->cart->destroy(); // Destroy all cart data
    redirect('user/cart'); // Refresh te page
}
}

=======
>>>>>>> f11515b4f1e6f18002ae75d517fc3bbdfdb14d9f
