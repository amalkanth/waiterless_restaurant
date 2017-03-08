	<?php
	 class Login_model extends CI_Model
	  {
	  	
	  	 
	  	 public function adminvalidation($usr,$pwd)
	  	 {
	  	 	$pw=md5($pwd);
	  	 	$query = $this->db->get_where('tbl_adminlogin', array('username' => $usr,'password' =>$pw));
	  	 	 return $query->num_rows();
	  	 }
	  	 
	  }