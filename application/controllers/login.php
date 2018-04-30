<?php
class Login extends MY_Controller{
	//public function index()
	//{
		//$this->load->view('index');
	//}

	//public function admin_login()
	//{
		/*$this->load->library('form_validation');
		$this->form_validation->set_rules('user_email','Email Id','required|trim');
		$this->form_validation->set_rules('user_password','Password','required|trim');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()){
			$user_email=$this->input->post('user_email');
			$user_password=$this->input->post('user_password');
			$this->load->model('loginmodel');
			$login=$this->loginmodel->login_valid($user_email,$user_password);
			if($login){
				//valid
				 $user_id=$login['user_id'];
				 $user_name=$login['user_name'];
				 $store_id=$login['store_id'];
				$this->load->library('session');
				$this->session->set_userdata('user_id',$user_id);
				$this->session->set_userdata('user_name',$user_name);
				$this->session->set_userdata('store_id',$store_id);
				$this->load->view('dashboard');
			}
			else{
				//Not Valid
				echo "Password Not metch";
			   }
		     }
		else{
			$this->load->view('admin/index');
		}
	}*/
	
	function __construct() 
	{
		parent::__construct();
		$this->load->model('loginmodel');
		//$this->load->library('session');
	}
	public function index()
	{

		if($this->session->userdata('user_id'))
		{
			$this->load->view('dashboard');
		}
		else
		{
	        
 			$this->load->view('admin/index');
		}
	}
	
	public function admin_login()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('user_email','Email Id','required|trim');
		$this->form_validation->set_rules('user_password','Password','required|trim');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()){
		$user_email=$this->input->post('user_email');
		$user_password=$this->input->post('user_password');
		$login=$this->loginmodel->login_valid($user_email,$user_password);
		if($login)
		{
			$sesdata = array(
                   'user_id'  => $login->user_id,
                   'user_name'  => $login->user_name,
                   'store_id'  => $login->store_id
               );
				$data['userdata'] = $this->session->set_userdata($sesdata);
				$this->load->view('dashboard');
			}
			else{
				  	echo "Password Not metch";
			   }
		}
		else
		{
			redirect('index.php/login/');
		}
	}
	
	public function logout()
	{
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('user_name');
			$this->session->unset_userdata('store_id');
			$this->session->sess_destroy();
			redirect('login/index','refresh');
	}
}