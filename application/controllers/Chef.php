<?php error_reporting(0);
class Chef extends  CI_Controller{
	public function home(){
		$this->load->view('templates/chefheader');
		$this->load->view('chef/chefhome');
		$this->load->view('templates/footer');
	}
	public function confirm_order($id)
	{
		$qry=$this->Chef_model->confirm_order($id);	
	if($qry)
	{
		$query=$this->Chef_model->retrive_order();
  	
  	$data['order']=$query;
  	$this->load->view('templates/chefheader');
		$this->load->view('chef/chefhome',$data);
		$this->load->view('templates/footer');
	}
	}
	
}