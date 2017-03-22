<?php
class User extends  CI_Controller{
	public function userhome()
	{
		$this->load->view(user/userhome);
	}
	
function cart()
{
    $data['products'] = $this->User_model->retrieve_products(); // Retrieve an array with all products
      print_r($data['products']);   
    $data['content'] = 'user/products'; // Select our view file that will display our products
    $this->load->view('user/viewcart',$data);
    

}
}
