<?php
class Login extends  CI_Controller{
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}
	
	public function adminlogin(){
		$this->load->view('templates/header');
		$this->load->view('login/adminlogin');
		$this->load->view('templates/footer');
	}
	public function tablelogin(){
		$this->load->view('templates/header');
		$this->load->view('login/tablelogin');
		$this->load->view('templates/footer');
	}
	public function cheflogin(){
		$this->load->view('templates/header');
		$this->load->view('login/cheflogin');
		$this->load->view('templates/footer');
	}
	
	
	public function  adminvalidation(){
		$username=$this->input->post('username');
	    $password=$this->input->post('password');
	    
	    $this->form_validation->set_rules('username','username','trim|required|xss_clean');
	$this->form_validation->set_rules('password','password','trim|required|xss_clean');
	if ($this->form_validation->run()== FALSE)
{
	$this->load->view('templates/header');
		$this->load->view('login/adminlogin');
		$this->load->view('templates/footer');
		
}
else {
	
	$query=$this->Login_model->adminvalidation($username,$password);
	if($query==1)//valid credentials
	{

		$this->load->view('templates/adminheader');
		$this->load->view('admin/adminhome');
		$this->load->view('templates/footer');
    }
    
  if($query!=1)//invalid credentials
{
	$this->load->view('templates/header');
		$this->load->view('login/adminloginerror');
		$this->load->view('templates/footer');
		
}
}
	}
   public function  tablevalidation(){
   $username=$this->input->post('username');
	    $password=$this->input->post('password');
	    
	    $this->form_validation->set_rules('username','username','trim|required|xss_clean');
	$this->form_validation->set_rules('password','password','trim|required|xss_clean');
	if ($this->form_validation->run()== FALSE)
{
	$this->load->view('templates/header');
		$this->load->view('login/adminlogin');
		$this->load->view('templates/footer');
		
}
else {
	
	$query=$this->Login_model->adminvalidation($username,$password);
	if($query==1)//valid credentials
	{

		$this->load->view('templates/header');
		$this->load->view('table/tablehome');
		$this->load->view('templates/footer');
    }
    
  if($query!=1)//invalid credentials
{
	$this->load->view('templates/header');
		$this->load->view('login/tableloginerror');
		$this->load->view('templates/footer');
		
}
}
	}
  public function  chefvalidation(){
  	$query=$this->Chef_model->retrive_order();
  	
  	$data['order']=$query;
  	$this->load->view('templates/chefheader');
		$this->load->view('chef/chefhome',$data);
		$this->load->view('templates/footer');
	}
	


public function  userloginvalidation(){
		$username=$this->input->post('username');
	    $password=$this->input->post('password');
	    
	    $this->form_validation->set_rules('username','username','trim|required|xss_clean');
	$this->form_validation->set_rules('password','password','trim|required|xss_clean');
	if ($this->form_validation->run()== FALSE)
{
	//$this->load->view('templates/header');
		$this->load->view('user/userlogin');
	//	$this->load->view('templates/footer');
		
}
else {
	
	$query=$this->Login_model->uservalidation($username,$password);
	if($query==1)//valid credentials
	{

		//$this->load->view('templates/adminheader');
		$this->load->view('user/userhome');
		//$this->load->view('templates/footer');
    }
    
  if($query!=1)//invalid credentials
{
	/*$this->load->view('templates/header');
		$this->load->view('login/adminloginerror');
		$this->load->view('templates/footer');*/
		
}
}
	}












}