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
   

  $data['name']= $this->Admin_model->additem($sub_id,$item_name,$price,$description);
 if($data['name'])
 { 
 		$this->load->view('templates/adminheader');
   $this->load->view('admin/addimage',$data);
  $this->load->view('templates/footer'); 
     
 }
 
 
 }
 
 
 
 public function addimagevalidation()//view to add image single and later
 {
 	$id=$this->input->post('id');
 	$item=$this->Admin_model->get_details($id);
 	{
 		$data['item']=$item;
 		
 	}
  
 
       $config['upload_path']   =   "image/menu/";
 
       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
 
       $config['max_size']      =   "5000";
 
       $config['max_width']     =   "1907";
 
       $config['max_height']    =   "1280";
 $this->upload->initialize($config);
       $this->load->library('upload',$config);
 
       if(!$this->upload->do_upload())
 
       {
 
           echo $this->upload->display_errors();
 
       }
 
       else
 
       {
 
           $finfo=$this->upload->data();
 
           //$this->_createThumbnail($finfo['file_name']);
 
           $data['uploadInfo'] = $finfo;
 
          // $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext']; 
           {
           $this->load->view('templates/adminheader');
           
           $this->load->view('admin/imagesuccess',$data);
           $this->load->view('templates/footer');
           
           }
 
           // You can view content of the $finfo with the code block below
 
           /*echo '<pre>';
 
           print_r($finfo);
 
           echo '</pre>';*/
 
       }
 
    }
 
    //Create Thumbnail function
 
   /* function _createThumbnail($filename)
 
    {
 
        $config['image_library']    = "gd2";      
 
        $config['source_image']     = "image/menu/" .$filename;      
 
        $config['create_thumb']     = TRUE;      
 
        $config['maintain_ratio']   = TRUE;      
 
        $config['width'] = "80";      
 
        $config['height'] = "80";
 
        $this->load->library('image_lib',$config);
 
        if(!$this->image_lib->resize())
 
        {
 
            echo $this->image_lib->display_errors();
 
        }      
 
    }*/
 	
 

 
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
 
 
 
 
 
 
 
 
