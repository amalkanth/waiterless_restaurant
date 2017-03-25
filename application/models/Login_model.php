	<?php
	 class Login_model extends CI_Model
	  {
	  	
	  	 
	  	 public function adminvalidation($usr,$pwd)
	  	 {
	  	 	$pw=md5($pwd);
	  	 	$query = $this->db->get_where('tbl_adminlogin', array('username' => $usr,'password' =>$pw));
	  	 	 return $query->num_rows();
	  	 }
	  	 
	 
       public function uservalidation($usr,$pwd)
	  	 {  
	  	 	$pw=$pwd;
	  	 	$query = $this->db->get_where('tbl_user', array('user_name' => $usr,'password' =>$pw));
	  	 	 if($query->num_rows())
                {
                    $query=$this->db->query("select * from tbl_user where user_name='$usr'");
                     foreach($query->result() as $row)
                     {
                     	$k=$row->user_id;
                     	echo $k;
                      }
                     
                    return $k;
                    
                    
                    


                }



	  	 }
	  

       public function userregisterinsert($data)
       {
       	 $username=$data['username'];
         $pw=$data['password'];
         $emailid=$data['emailid'];
         $phno=$data['phno'];

   
                   

      //  echo $username; echo $emailid;

         //$query=$this->db->insert_string('tbl_user',);
          $conn = mysqli_connect("localhost","root","","waiterless_restaurant");
	      $sql="INSERT INTO tbl_user(user_id,user_name,password,emailid,phno,category,point) values('NULL','$username',
	      	                                                                          '$pw','$emailid','$phno','NULL','NULL')";
          



         if (mysqli_query($conn,$sql))
         {
           return TRUE;
         }
        else{
        	return FALSE;
            }
       
       } 
    }

       




	 
