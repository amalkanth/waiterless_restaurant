<?php
class Table extends CI_Controller{
	public function settable()
	{  $tableno=$_POST['tableno'];   
        $_SESSION['tableno']=$tableno;

   		$this->load->view('templates/header');
		$this->load->view('user/userlogin');
		$this->load->view('templates/footer');
	}
	
	public function status()
	{
		$this->load->view('templates/adminheader');
		$this->load->view('table/status');
		$this->load->view('templates/footer');
	}
	public function  userloginvalidation()
	{
		$username=$this->input->post('username');
	    $password=$this->input->post('password');
	    
	    $this->form_validation->set_rules('username','username','trim|required|xss_clean');
	    $this->form_validation->set_rules('password','password','trim|required|xss_clean');
	/*if ($this->form_validation->run()== FALSE)
{
	//$this->load->view('templates/header');
		$this->load->view('user/userlogin');
		//$this->load->view('templates/footer');
		
}*/

	
	$query=$this->Login_model->uservalidation($username,$password);
	if($query)//valid credentials
	{
         $_SESSION['user_id']=$query;
		//$this->load->view('templates/adminheader');
		$this->load->view('user/userhome');
		//$this->load->view('templates/footer');
    }
    
  	else//invalid credentials
	{
		$this->load->view('templates/header');
		$this->load->view('login/adminloginerror');
		$this->load->view('templates/footer');
		
	}

}

public function register()
{ $data['message']="regnow";
  $this->load->view('user/userregister',$data);

}

public function resetpassword()
{
  $this->load->view('user/resetpassword');

}

public function  userregistervalidation(){
		$username=$this->input->post('username');
	    $password=$this->input->post('password');
	    $emailid=$this->input->post('emailid');
	    $phno=$this->input->post('phno');
/*	    $this->form_validation->set_rules('username','username','trim|required|xss_clean');
	$this->form_validation->set_rules('password','password','trim|required|xss_clean');
	$this->form_validation->set_rules('emailid','emailid','trim|required|xss_clean');
	$this->form_validation->set_rules('phno','phno','trim|required|xss_clean');
*/	
echo $username;
    

/*	if ($this->form_validation->run()== FALSE)
{
	//$this->load->view('templates/header');
		$this->load->view('user/userlogin');
	//	$this->load->view('templates/footer');
		
}*/
//else {
	
	$data=array("username"=>$username,"password"=>$password,"emailid"=>$emailid,"phno"=>$phno);
	$ck=$this->Login_model->userregisterinsert($data);
	if($ck==TRUE)//valid credentials
	{
         echo "success";
		//$this->load->view('templates/adminheader');
		$this->load->view('user/userhome');
		//$this->load->view('templates/footer');
    }
    
  if($ck!=TRUE)//invalid credentials
{      $data['message']="registeration failed try again";
	//$this->load->view('templates/header');
		$this->load->view('user/userregister',$data);
	//	$this->load->view('templates/footer');
		
}
}
//}

public function tablerehome()
{
  $this->load->view('templates/header');
		$this->load->view('table/tablehome');
		$this->load->view('templates/footer');

}



}