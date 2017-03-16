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
 public function additem() //function get category name from model to name and loads additem view page
 {$data['name']=$this->Admin_model->getcategory();
 	$this->load->view('templates/adminheader');
   $this->load->view('admin/additem',$data);
  $this->load->view('templates/footer');
 }
 
 public function additemvalidation()
 {
   $cat_id=$this->input->post('cat_id');
 	$sub_id=$this->input->post('subcategory');
 	$item_name=$this->input->post('item_name');
   $price=$this->input->post('price');
   $description=$this->input->post('description'); 
   

  $ck= $this->Admin_model->additem($sub_id,$item_name,$price,$description);
/* if($ck==TRUE)
 {
 		$this->load->view('templates/adminheader');
   $this->load->view('admin/addimage');
  $this->load->view('templates/footer');
     
 }*/
 
 
 }
 
 
 
 public function addimagevalidation()//view to add image single and later
 {
 	
 	
 	
 	
 	$url = $this->do_upload();
		$title = $_POST["item_name"];
		$this->Admin_model->saveimage($item_id, $url);
	
 	
 }
private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/menu".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
		return "";
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
public function removeitem()
 {$data['name']=$this->Admin_model->getcategory();
 	$this->load->view('templates/adminheader');
   $this->load->view('admin/removeitem',$data);
  $this->load->view('templates/footer');
 }
 }
 
 
 
 
 
 
 
 
