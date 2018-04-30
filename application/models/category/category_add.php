<?php 
class Main_model extends CI_Model {

public function category_add($data)
{
print_r($data); die;
	$this->db->insert('category',$data);
   $insert_id = $this->db->insert_id();

   return  $insert_id;
}
}

?>
