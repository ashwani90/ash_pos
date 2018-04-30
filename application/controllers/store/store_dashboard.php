<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
        //$this->load->helper(form);
		$this->load->model("store/Store_model");
		$this->load->library('form_validation');
	}

	public function viewstore(){
		$this->load->view('header');
		
		$data['store']= $this->Store_model->getStore();
	 	//$data['state']= $this->Store_model->getState();
	 	//$data['city']= $this->Store_model->getCity();
			//print_r($data); 
			// echo $data['store']['store_name'];die();
	// 	$this->load->view('store/add',$data);
		$this->load->view('store/view',$data);
		$this->load->view('footer');
	}

	// public function addstore(){
	// 	//echo "in add store method";
	// 	$data['store'] = $this->input->post();
	// 	//var_dump($data);
	// 	$this->load->model("Store_model");
	// 	if($this->Store_model->addstore($data)){
	// 		echo "Store Added";
	// 	}else{
	// 		echo "Store Not Added";
	// 	}

	// }

	public function addstore(){
		$this->load->view('header');
		//$this->load->model("Store_model");
		$data['state']= $this->Store_model->getState();
	//	var_dump($data);
		$this->load->view('store/add',$data);
		$this->load->view('footer');
	}

	public function getCity($stateId){

		$this->load->model("Store_model");
		$data['city']= $this->Store_model->getCity($stateId);
		//print_r($data); 
		echo json_encode($data);
	}

	public function saveStore(){
		$data['store']= $this->input->post();

		//var_dump($data);

		$this->form_validation->set_rules('store_name', 'Store Name', 'required|trim');
		$this->form_validation->set_rules('store_email', 'Store Email' , 'required|trim|valid_email');
		$this->form_validation->set_rules('store_phone', 'Store Phone No', 'required|trim|exact_length[10]|numeric');
		$this->form_validation->set_rules('state', 'Select State', 'required|trim');
		$this->form_validation->set_rules('city', 'Select City', 'required|trim');
		$this->form_validation->set_rules('pan_no', 'PAN-No', 'required|trim');
		$this->form_validation->set_rules('gst_no', 'GST-No' , 'required|trim');
		

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$data['state']= $this->Store_model->getState();

			$this->load->view('store/add',$data);
			$this->load->view('footer');
		}
		else
		{
		//echo $this->input->post('city');
		//$this->load->model("Store_model");
			if($this->Store_model->saveStore($data)){
				$this->load->view('header');
				$this->load->model("Store_model");
				$data['store']= $this->Store_model->getStore();
	 		//$data['state']= $this->Store_model->getState();
	 		//$data['city']= $this->Store_model->getCity();
				$data['msg']= "Store Added";
				//print_r($data); 
				// echo $data['store']['store_name'];die();
	// 		$this->load->view('store/add',$data);
				$this->load->view('store/view',$data);
				$this->load->view('footer');
			}else{
				$this->addStore();
			}
		}
	}

	public function deleteStore($id){
		//echo $id;
		//$this->load->model("Store_model");
		if($this->Store_model->deleteStore($id)){
			$data['msg']="Store deleted.";
			$data['store']= $this->Store_model->getStore();

			$this->load->view('header');
			$this->load->view('store/view',$data);
			$this->load->view('footer');
		}
	}

	public function editStore($id){
		//$this->load->model("Store_model");	
		
		$data['store']= $this->Store_model->getStoreById($id);
		$data['state']= $this->Store_model->getState();
		$this->load->view('header');
		$this->load->view('store/edit',$data);
		$this->load->view('footer');
	}

	public function updateStore(){
		$data['store']= $this->input->post();
		//echo $data['store']['store_id'];
		//var_dump($data); 
		//$this->load->model("Store_model");
		$this->form_validation->set_rules('store_name', 'Store Name', 'required|trim');
		$this->form_validation->set_rules('store_email', 'Store Email' , 'required|trim|valid_email');
		$this->form_validation->set_rules('store_phone', 'Store Phone No', 'required|trim|exact_length[10]|numeric');
		$this->form_validation->set_rules('state', 'Select State', 'required|trim');
		$this->form_validation->set_rules('city', 'Select City', 'required|trim');
		$this->form_validation->set_rules('pan_no', 'PAN-No', 'required|trim');
		$this->form_validation->set_rules('gst_no', 'GST-No' , 'required|trim');
		

		if ($this->form_validation->run() == FALSE)
		{
			$this->editStore($data['store']['store_id']);
		}
		else
		{
			if($this->Store_model->updateStore($data)){	
				$data['store']= $this->Store_model->getStore();
				$data['msg']="Store Updated";
				$this->load->view('header');
				$this->load->view('store/view',$data);
				$this->load->view('footer');
			}else{
				$this->editStore();
			}
	}
	}

	

}

?>