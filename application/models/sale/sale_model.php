<?php 
class Sale_model extends CI_Model {

	public function getSales($upc_code=null){
	       if(isset($upc_code)){
			$this->db->where('p.upc_code', $upc_code);
			$this->db->select("*")->from('products p')		
					->join('stockin sto', 'p.upc_code= sto.upc_code');
                $data= $this->db->get();
				
			   }
			 return $data->result();
}
	
	public function addUser($data){
 $this->db->insert('client',$data);
 $insert_id = $this->db->insert_id();
		return $insert_id;	
}

    public function addCard_details($data1){
 $this->db->insert('card_details',$data1);
$insert_id = $this->db->insert_id();
		return $insert_id;	
}

    public function getCard_details($data1){
if(isset($data1)){
			$this->db->where('cd.user_id', $data1);
			$this->db->select("*")->from('client c')		
					->join('card_details cd', 'c.c_id= cd.user_id');
                $datavalue= $this->db->get();
			   }
			 return $datavalue->result();
}

    public function get()
	{
		$this->db->select('c_id,name,phone');
    	return $this->db->get('client')->result();
	}
	
	public function add_stockout($billing_id,$date,$user_id,$client_id,$product_name,$upc_code,$variant_mrp,$cgst,$sgst,$qyt,$r_amt,$grand_total,$total_pay){
$count=count($upc_code);

 for($i=0;$i<$count;$i++)
{
 
$upc =$upc_code[$i]; 
$pro_name =$product_name[$i];
$vari_mrp =$variant_mrp[$i];
$cgstvalue =$cgst[$i];
$sgstvalue =$sgst[$i];
$qytvalue =$qyt[$i];
$total =$grand_total[$i];
$data=array(
                        'billing_id' =>$billing_id,
						'inventory_date' =>$date,
						'user_id' =>$user_id,
						'client_id' =>$client_id,
						'upc_code' =>$upc,
						'product_name' =>$pro_name,
						'mrp' =>$vari_mrp,
						'cgst' =>$cgstvalue,
						'sgst' =>$sgstvalue,
						'quantity' =>$qytvalue,
						'discount_amt' =>$r_amt,
						'sub_total' =>$total,
						'pay_total' =>$total_pay
					);
					
        $insert_id = $this->db->insert('inventory',$data);
		
		}
		return $insert_id;	
}
public function add_billing($data1){

 $this->db->insert('billing_details',$data1);
 $insert_id = $this->db->insert_id();
		return $insert_id;	
}
public function update_amount($userid,$card_amt){

$this->db->set('amount', $card_amt);
$this->db->where('user_id',$userid);
 $this->db->update('card_details');

}

public function getLast_client_id(){

$this->db->select('c_id');
      $this->db->limit(1)->order_by('c_id',"DESC");
return $this->db->get('client')->result();
    
}
public function get_email_clients(){

$this->db->select('email');
return $this->db->get('client')->result();
    
}
}

