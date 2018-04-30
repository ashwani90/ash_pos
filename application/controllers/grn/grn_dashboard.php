<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grn_dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
        $this->load->helper('form');
		$this->load->model("grn/grn_model");
		$this->load->library('form_validation');
	}

	public function viewGrn(){
	
		$this->load->view('header');
		
		//$data['vendor']= $this->Grn_model->getGrn();
		$this->load->view('grn/grn_with_po');
		$this->load->view('footer');
	}

	public function grnWithoutpo(){
		$this->load->view('header');
		//$data['vendor']= $this->Grn_model->getGrn();
		$this->load->view('grn/grn_without_po');
		$this->load->view('footer');	
	}
	public function grnWithpo(){
		$this->load->view('header');
		//$data['vendor']= $this->Grn_model->getGrn();
		$this->load->view('grn/grn_with_po');
		$this->load->view('footer');	
	}
	public function addGrn($upc_code,$grn_date,$po_id,$invoice_no)
	{
	$num0 = (rand(10,100));
    $num1 = date("Ymd");
    $num2 = (rand(100,1000));
    $num3 = time();
    $grn_no ="GRN".$num0 . $num1 . $num2 . $num3;
 	      $created_by="Anil";
	
	    if($po_id==0)
		{
		//$status_id = $this->grn_model->getStatus_id($po_id);
		   if(3==3)
		   {
	      $data=$this->grn_model->addGrndetails($upc_code,$grn_date,$grn_no,$po_id,$invoice_no,$created_by);
		  }
		  $upc = $this->grn_model->getGrn($upc_code,$po_id);
	
		}
		else
		{
		 $status_id = $this->grn_model->getStatus_id($po_id);
		   if($status_id[0]->status==3)
		   {
	      $data=$this->grn_model->addGrndetails($upc_code,$grn_date,$grn_no,$po_id,$invoice_no,$created_by);
		  }
		  $upc = $this->grn_model->getGrn($upc_code,$po_id);
		}
	     
		echo json_encode($upc);
	}
	
	public function Grnstockin()
	{ 
 
	$upc_code = $this->input->post('upc_code'); 
	$product_name = $this->input->post('product_name');
	$description = $this->input->post('description');
	$variant_mrp = $this->input->post('variant_mrp');
	$cgst = $this->input->post('cgst');
	$sgst = $this->input->post('sgst');
	$qyt = $this->input->post('qyt');
	$total = $this->input->post('grand_total');
	$po_id = $this->input->post('po_id');
	$get_upc_data = $this->grn_model->getUpcdata($upc_code);
    $get_Grn_id = $this->grn_model->getGrnid($upc_code,$po_id);
    
	foreach($get_Grn_id as $grn_id)
	{
	$Grn_value[] = $grn_id->grn_id;
	}
	
	//echo $grn_id  = $get_Grn_id[0]->grn_id; 

	if($get_Grn_id[0]->po_no==0)
	{
	
	$id = $this->grn_model->addGrnstockin($Grn_value,$upc_code,$product_name,$description,$variant_mrp,$cgst,$sgst,$qyt,$total,$po_id);
	//$invoice = $this->input->post('invoice_no');
	
	//$get_Grn_id = $this->grn_model->getGrnid($po_id,$invoice);
	
	//print_r($get_Grn_id);
	}
	else
	{
	$id = $this->grn_model->addGrnstockin($Grn_value,$upc_code,$product_name,$description,$variant_mrp,$cgst,$sgst,$qyt,$total,$po_id);
	}
	
	
	
	
	
 
	redirect('grn/grn_dashboard/viewGrn');
	  /*if($id)
				{
					$data['msg']="<p style=\"color:#009968\">Grn Stock In Add Successfully</p>";
					$data['category'] = $this->grn_model->getGrn();
					$this->load->view('header');
			  		$this->load->view('category/view',$data);
			  		$this->load->view('footer');
				}
				else
				{
					$data['msg']="<p style=\"color:	#FF0000\">Category Not Add Successfully</p>";
					$this->load->view('header');
			    	$this->load->view('category/add_category',$data);
			    	$this->load->view('footer');
				}   
		echo json_encode($upc);*/
	}
}
?>