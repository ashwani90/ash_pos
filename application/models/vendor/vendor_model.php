<?php 
class Vendor_model extends CI_Model {

	public function getVendor($id=null){
		if($id){
			$this->db->where('category_id', $id);
		}
		$this->db->select("v.vendor_id, v.vendor_name, v.vendor_email, v.vendor_phone, v.state_id, v.city_id, v.vendor_address, v.load_size, v.manufacturer_id, v.po_day, v.aligned, v.rtv_eligible,v.account_holder, v.bank_name, v.account_no, v.ifsc_code, v.branch_address, v.store_id,
			s.id as state_id, s.states,
			c.id as city_id, c.city,
			m.manufacturer_id, m.name,
			st.store_id, st.store_name
			")->from('vendors v')		
					->join('manufacturer m', 'm.manufacturer_id= v.manufacturer_id')
         			->join('states s', 's.id = v.state_id')
         			->join('city c','c.id = v.city_id')
         			->join('stores st','st.store_id= v.store_id');
		
		$data= $this->db->get();
		return $data->result_array();
	}

	public function getState(){

		$data = $this->db->get('states');		
		return $data->result_array();
	}

	public function getCity($stateId=0){
		if($stateId){
			$this->db->where('sid', $stateId);
		} 	
		$data = $this->db->get('city');
						
		//print_r($data->result());
		return $data->result_array();
	}

	public function saveVendor($data)
	{
		$this->db->insert('vendor',$data);
		$insert_id = $this->db->insert_id();

		return  $insert_id;

	}
}
?>
