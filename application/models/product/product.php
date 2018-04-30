<?php
class Product extends CI_Model {
	public function category_list()
	{
		$query=$this->db
							->select('DISTINCT(category_name)')
							->from('category')
							->get();

		return $query->result();
	}


  function getstate($country_id='')
 	{
   $query=$this->db
							->select('DISTINCT(sub_category)')
							->where('category_name',$country_id)
							->from('category')
							->get();

					
		return $query->result_array();
}

function category_brand($sub_cat='')
 	{
   $query=$this->db
							->select('DISTINCT(brand)')
							->where('sub_category',$sub_cat)
							->from('category')
							->get();

					
		return $query->result_array();
}

function category_size($sub_cat='')
 	{
   $query=$this->db
							->select('DISTINCT(category_size)')
							->where('brand',$sub_cat)
							->from('category')
							->get();

					
		return $query->result_array();
}

function category_color($sub_cat='')
 	{
   $query=$this->db
							
							->where('category_size',$sub_cat)
							->from('category')
							->get();

					
		return $query->result_array();
}


}