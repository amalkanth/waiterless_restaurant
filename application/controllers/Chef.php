<?php
class Chef extends  CI_Controller{
	public function home(){
		$this->load->view('templates/chefheader');
		$this->load->view('chef/chefhome');
		$this->load->view('templates/footer');
	}
}