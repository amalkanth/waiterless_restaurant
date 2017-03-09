<?php
class Admin extends  CI_Controller{
	public function home()
	{
		$this->load->view('templates/adminheader');
	   $this->load->view('admin/adminhome');
	   $this->load->view('templates/footer');
		
	}
	
	public function billing()
	{ $this->load->view('templates/adminheader');
	   $this->load->view('admin/billing');
	   $this->load->view('templates/footer');
		
	}
	public function customerview()
	{
	$this->load->view('templates/adminheader');
	   $this->load->view('admin/customerview');
	   $this->load->view('templates/footer');
	}

    	public function salesview()
	{
	$this->load->view('templates/adminheader');
	   $this->load->view('admin/salesview');
	   $this->load->view('templates/footer');
	}
	
 public function menu()
 {
 	$this->load->view('templates/adminheader');
   $this->load->view('admin/menu');
  $this->load->view('templates/footer');
 }
 public function additem()
 {$data['name']=$this->Admin_model->getcategory();
 	$this->load->view('templates/adminheader');
   $this->load->view('admin/additem',$data);
  $this->load->view('templates/footer');
 }
 public function additemvalidation()
 {
 	
 }
 
 
public function addcategory()
 {  $data['title']="";
 	$this->load->view('templates/adminheader');
   $this->load->view('admin/addcategory',$data);
  $this->load->view('templates/footer');
 }
 
 public function addcategoryvalidation()
 {  $form=array(
    'cat_id' =>NULL,
	'cat_name'  =>$this->input->post('cat_name'));
 	
 	 $query=$this->Admin_model->addcategory($form);
	if($query==1)//valid credentials
	{
      $data['title']="category added succesfully";
		$this->load->view('templates/adminheader');
		$this->load->view('admin/addcategory',$data);
		$this->load->view('templates/footer');
    }
 }
 public function addsubcategory()
 {
 	
 	
 	 
   $data['name']=$this->Admin_model->getcategory();
    $data['title']='';
   if($data['name'])
   {            
 	$this->load->view('templates/adminheader');
   $this->load->view('admin/addsubcategory',$data);
  $this->load->view('templates/footer');
   }
   }
 
 public  function  addsubcategoryvalidation()
 {
  $form=array(
    'sub_id'=>NULL,
    'cat_id' =>$this->input->post('cat_id'),
	'sub_name'  =>$this->input->post('subcat_name'));
 	
 	 $query=$this->Admin_model->addsubcategory($form);
	if($query==1)//valid credentials
	{$data['name']=$this->Admin_model->getcategory();
      $data['title']="subcategory added succesfully";
		$this->load->view('templates/adminheader');
		$this->load->view('admin/addsubcategory',$data);
		$this->load->view('templates/footer');
    }
 }
 
public function removecategory()

 { $data['name']=$this->Admin_model->getcategory();
 
 	 $data['title']="";
 	$this->load->view('templates/adminheader');
   $this->load->view('admin/removecategory',$data);
  $this->load->view('templates/footer');
 }
public  function  removecategoryvalidation()
 {
  
    
    $cat_id=$this->input->post('cat_id');
	
 	
 	 $query=$this->Admin_model->removecategory($cat_id);
	if($query==1)//valid 
	{
      $data['title']="category removed succesfully";//db error foreign key
		$this->load->view('templates/adminheader');
		$this->load->view('admin/removecategory',$data);
		$this->load->view('templates/footer');
    }
 }
 }
 
 
 
 
 
 
 
 
