<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
        //$this->load->helper(form);
		$this->load->model("vendor/Vendor_model");
		$this->load->library('form_validation');
	}

	public function viewVendor(){
		$this->load->view('header');
		
		$data['vendor']= $this->Vendor_model->getVendor();
		$this->load->view('vendor/view',$data);
		$this->load->view('footer');
	}

	public function getCity($stateId){

		$this->load->model("Vendor_model");
		$data['city']= $this->Vendor_model->getCity($stateId);
		//print_r($data); 
		echo json_encode($data);
	}

	public function addVendor(){
		$this->load->view('header');
		
		$data['state']= $this->Vendor_model->getState();
		$this->load->view('vendor/add',$data);
		$this->load->view('footer');	
	}
}
?>