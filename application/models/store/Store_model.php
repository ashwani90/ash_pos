<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Store_model extends CI_Model {

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

	public function getStore(){
		
		$this->db->select('stores.store_id, stores.store_name, stores.store_email, stores.store_phone, stores.pan_no, stores.gst_no, stores.store_website, stores.state_id, stores.city_id, 
					states.id ,states.states, 
					city.id, city.city ')
         			->from('stores')
         			->join('states', 'states.id = stores.state_id')
         			->join('city','city.id = stores.city_id');
		$data = $this->db->get();
		//print_r($data->result_array());
		
		//$data= $this->db->get('stores');
		//var_dump($data->result()[0]);
		return $data->result_array();
	}



	public function getStoreById($id){
	
		
			$this->db->where('store_id', $id);
	
		$this->db->select('stores.store_id, stores.store_name, stores.store_email, stores.store_phone, stores.pan_no, stores.gst_no, stores.store_website, stores.state_id, stores.city_id, 
					states.id ,states.states, 
					city.id, city.city ')
         			->from('stores')
         			->join('states', 'states.id = stores.state_id')
         			->join('city','city.id = stores.city_id');
		$data = $this->db->get();
		//print_r($data->result_array());
		
		//$data= $this->db->get('stores');
		//var_dump($data->result()[0]);
		return $data->result_array();
	}



	public function saveStore($data){
		//echo "in model";
		//var_dump($data);
		$i_data= array('store_name' =>$data['store']['store_name'] ,
						'store_email' => $data['store']['store_email'],
						'store_phone' => $data['store']['store_phone'],
						'state_id' 	  => $data['store']['state'],
						'city_id'	=> $data['store']['city'],
						'pan_no'	=> $data['store']['pan_no'],
						'gst_no'	=> $data['store']['gst_no'],
						'store_website'=> $data['store']['website'] );
		//print_r($data);
		//print_r($i_data); die();
		$q= $this->db->insert('stores', $i_data);
		if($q==1){
			return true;
		}else{
			return false;
		}
	}

	public function deleteStore($id){
		$this->db->where('store_id', $id);
		$q= $this->db->delete('stores');
			
		if($q==1){
			return true;
		}else{
			return false;
		}
	}

	public function updateStore($data){
		//echo "in model"; 
		//var_dump($data);
		$u_data= array('store_name' =>$data['store']['store_name'] ,
						'store_email' => $data['store']['store_email'],
						'store_phone' => $data['store']['store_phone'],
						'state_id' 	  => $data['store']['state'],
						'city_id'	=> $data['store']['city'],
						'pan_no'	=> $data['store']['pan_no'],
						'gst_no'	=> $data['store']['gst_no'],
						'store_website'=> $data['store']['website'] );
		$this->db->where('store_id', $data['store']['store_id']);
    	$q=$this->db->update('stores', $u_data);
    	if($q==1){
			return true;
		}else{
			return false;
		}
	}
}
?>