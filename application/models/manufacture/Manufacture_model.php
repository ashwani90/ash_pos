<?php
class Manufacture_model extends CI_Model
{
	public function view()
	{
		//$this->load->database();
		$res = $this->db->get('manufacturer');
		return $res->result_array();
	}
	public function add()
	{
		//$this->load->database();
		$res = $this->db->get('manufacturer');
		return $res->result_array();
	}
	public function save($data)
	{
		//$i_data= array('name' 	=> $data['name'],
		//				'email' => $data['email'],
		//				'phone'	=> $data['phone'] );

		$res = $this->db->insert('manufacturer',$data);
		if($res)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function edit($id)
	{
		$res = $this->db->where('manufacturer_id',$id)->get('manufacturer');
		return $res->result_array();
	}
	public function update($data)
	{
		$m_id = $data['fid'];
		$name = $data['name'];
		$email = $data['email'];
		$phone = $data['phone'];
		
		$res = $this->db->where('manufacturer_id',$m_id)->update('manufacturer',array('name'=>$name,'email'=>$email,'phone'=>$phone));
		if($res)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function delete($manufacturer_id)
	{
		$res = $this->db->where('manufacturer_id',$manufacturer_id)->delete('manufacturer');
		if($res)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>