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
		$this->load->view('templates/adminheader');
		$this->load->view('admin/adminhome');
		$this->load->view('templates/footer');
	}
   public function  tablevalidation(){
   	$this->load->view('templates/header');
		$this->load->view('table/tablehome');
		$this->load->view('templates/footer');
	}
  public function  chefvalidation(){
  	$this->load->view('templates/chefheader');
		$this->load->view('chef/chefhome');
		$this->load->view('templates/footer');
	}
	
}