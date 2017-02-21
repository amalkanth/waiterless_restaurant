<?php
class Table extends CI_Controller{
	public function settable()
	{   $this->load->view('templates/header');
		$this->load->view('user/userhome');
		$this->load->view('templates/footer');
	}
	
	public function status()
	{
		$this->load->view('templates/adminheader');
		$this->load->view('table/status');
		$this->load->view('templates/footer');
	}
}