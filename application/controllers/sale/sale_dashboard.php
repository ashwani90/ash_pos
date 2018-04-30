<?php

class Sale_dashboard extends MY_Controller
{

	function __construct() {
		parent::__construct();
        $this->load->helper('form');
		$this->load->model("sale/sale_model");
		$this->load->library('form_validation');
	}
	public function view()
	{

	$user['details'] = $this->sale_model->get();
	
		$this->load->view('header');
		$this->load->view('sale/sales',$user);
		$this->load->view('footer');
	}
	
	public function getcard()
	{
	$data1=$this->input->post('user_id');
	$card['records'] = $this->sale_model->getCard_details($data1);
	$card['details'] = $this->sale_model->get();
		$this->load->view('header');
		$this->load->view('sale/sales',$card);
		$this->load->view('footer');
		}
	
	public function addSales($upc_code)
	{ 
	
		 $upc = $this->sale_model->getSales($upc_code);
		echo json_encode($upc);
	}
	public function addUser()
	{
$name =$this->input->post('name');
$email_id =$this->input->post('email');
$phone_no =$this->input->post('phone');
$address =$this->input->post('address');
$card_no =$this->input->post('card_number');
$issue_date=date('Y:m:d');
$data = array(
'name'=>$name,
'email'=>$email_id,
'phone'=>$phone_no,
'address'=>$address
);

$data = $this->sale_model->addUser($data);
$data1=array(
'user_id'=>$data,
'card_number'=>$card_no,
'issue_date'=>$issue_date,
'amount'=>0,
'points'=>0
);
$userid = $this->sale_model->addCard_details($data1);
$data_record['result'] = $this->sale_model->getCard_details($userid);
$data_record['details'] = $this->sale_model->get();
        //$this->load->view('header');
	 redirect('sale/sale_dashboard/view');
		//$this->load->view('footer');
	}
	
	public function addStockout()
	{
	
    $num0 = (rand(10,100));
    $num1 = date("Ymd");
    $num2 = (rand(100,1000));
    $num3 = time();
    $bill_no ="BILL".$num0 . $num1 . $num2 . $num3;
 $upc_code =$this->input->post('upc_code');
foreach($upc_code as $upc)
{
$bill_date =date('Y:m:d');
$created_by="Anil";
$data1 = array(
'upc_code'=>$upc,
'billing_no'=>$bill_no,
'billing_date'=>$bill_date,
'created_by'=>$created_by
);
}

$billing_id = $this->sale_model->add_billing($data1);
$client_id =$this->input->post('client_id');
$user_id =$this->input->post('user_id');
$product_name =$this->input->post('product_name');
$variant_mrp =$this->input->post('variant_mrp');
$cgst =$this->input->post('cgst');
$sgst =$this->input->post('sgst');
$qyt=$this->input->post('qyt');
$r_amt=$this->input->post('r_amt');
$grand_total=$this->input->post('grand_total');
$total_pay=$this->input->post('total_pay');
$card_amt=$this->input->post('card_amt');
$date =date('Y:m:d');

$userid = $this->sale_model->add_stockout($billing_id,$date,$user_id,$client_id,$product_name,$upc_code,$variant_mrp,$cgst,$sgst,$qyt,$r_amt,$grand_total,$total_pay);

if($userid)
{
$this->sale_model->update_amount($userid,$card_amt);
redirect('sale/sale_dashboard/view');
}
        redirect('sale/sale_dashboard/view');
		}
	

}

?>