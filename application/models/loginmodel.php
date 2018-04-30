<?php
class Loginmodel extends CI_Model{
	public function login_valid($user_email,$user_password)
	{
		 $q=$this->db->where(['user_email'=>$user_email,'user_password'=>$user_password])
				->get('users');
		//$q="SELECT * FROM users where user_email='$user_email' AND user_password='$user_password;'";
				
				//$res=$this->db->query($q);
		if($q->num_rows())
		{
			return $res= $q->result()[0];
		}else{
			return false;
		}
	}
	
	
}