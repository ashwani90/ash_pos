<?php 
class Category_model extends CI_Model {

	public function getCategory($id=null){
		if($id){
			$this->db->where('category_id', $id);
		}
		$data= $this->db->get('category');
		return $data->result_array();
	}

	public function saveCategory($data)
	{
		$this->db->insert('category',$data);
		$insert_id = $this->db->insert_id();

		return  $insert_id;

	}

	public function updateCategory($data,$category_id)
	{
		$res = $this->db->where('category_id',$category_id)->update('category',$data);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function deleteCategory($id){
		$res = $this->db->where('category_id',$id)->delete('category');
		if($res){
			return true;
		}else{
			return false;
		}
	}


}

?>
