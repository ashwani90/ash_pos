<?php

class Client_search_ajax_model extends CI_Model
{
	public function get($search)
	{
		$this->db->select('name,phone');
    	$this->db->where('name', $search);

    	return $this->db->get('client', 10)->result();
	}
}

?>