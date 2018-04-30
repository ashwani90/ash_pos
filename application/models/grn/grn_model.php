<?php 
class Grn_model extends CI_Model {

public function getGrn($upc_code=null,$po_id=null){
	       if(!empty($upc_code) && !empty($po_id)){
			$this->db->where('p.upc_code', $upc_code,'po.po_id', $po_id);
			$this->db->select("*")->from('products p')		
					->join('po_data po', 'p.upc_code= po.item_id')
					->join('product_taxes ptx', 'p.tax_id= ptx.tax_id');
                $data= $this->db->get();
			   }
			   elseif($po_id==0)
			   {
			   
			$this->db->where('p.upc_code', $upc_code);
			$this->db->select("*")->from('products p')		
					->join('po_data po', 'p.upc_code= po.item_id')
					->join('product_taxes ptx', 'p.tax_id= ptx.tax_id');
                $data= $this->db->get();
			   }
			 return $data->result();
}

public function addGrnstockin($Grn_value,$upc_code,$product_name,$description,$variant_mrp,$cgst,$sgst,$qyt,$total,$po_id){
$count=count($upc_code);
 for($i=0;$i<$count;$i++)
{
$grn_id_value =$Grn_value[$i]; 
$upc =$upc_code[$i]; 
$pro_name =$product_name[$i];
$descriptionvalue =$description[$i];
$vari_mrp =$variant_mrp[$i];
$cgstvalue =$cgst[$i];
$sgstvalue =$sgst[$i];
$qytvalue =$qyt[$i];
$grand_total =$total[$i];
$po_id_value =$po_id[$i];
$data=array(
                        'grn_id' =>$grn_id_value,
                        'po_no' =>$po_id_value,
						'upc_code' =>$upc,
						'item_name' =>$pro_name,
						'mrp' =>$vari_mrp,
						'cgst' =>$cgstvalue,
						'sgst' =>$sgstvalue,
						'quantity' =>$qytvalue,
						'total' =>$grand_total
					);
        $insert_id = $this->db->insert('stockin',$data);
		
		}
		return $insert_id;	
}

public function addGrndetails($upc_code,$grn_date,$grn_no,$po_id,$invoice_no,$created_by){
$data=array(
                        'upc_code' =>$upc_code,
                        'grn_date' =>$grn_date,
						'grn_no' =>$grn_no,
						'po_no' =>$po_id,
						'invoice_no' =>$invoice_no,
						'created_by' =>$created_by,
					);
      $this->db->insert('grn_details',$data);
      $insert_id = $this->db->insert_id();
	  return $insert_id;
}
public function getGrnid($upc_code,$po_id){

    foreach($upc_code as $upc){
			$this->db->where('upc_code',$upc);
			$this->db->select("*")->from('grn_details');		
                 $data= $this->db->get();
				return $data->result();
				}
}

public function getStatus_id($po_id){
	       
			$this->db->where('po.po_no', $po_id);
			$this->db->select("*")->from('po_order po');		
                $data= $this->db->get();
			 return $data->result();
}

public function getUpcdata($upc_code=null){
	      foreach($upc_code as $upc){
			$this->db->where('stck.upc_code',$upc);
			$this->db->select("*")->from('stockin stck');		
                $data= $this->db->get();
			 return $data->result();
			 }
}

public function updateGrnstockin($upc_code,$qyt,$total){
$count=count($upc_code);	       
for($i=0;$i<$count;$i++)
{
$upc =$upc_code[$i]; 
$qytvalue =$qyt[$i];
$grand_total =$total[$i];

$data=array(
						'upc_code' =>$upc,
						'quantity' =>$qytvalue,
						'total' =>$grand_total
					);
						   
$this->db->where('upc_code',$upc);
$this->db->update('stockin',$data);

}
}
}

