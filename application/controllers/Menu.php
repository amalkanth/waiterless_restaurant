<?php
class Menu extends  CI_Controller{
	public function display(){
	   $this->load->view('templates/adminheader');
		$this->load->view('menu/admindisplay');
		$this->load->view('templates/footer');
	}
	}