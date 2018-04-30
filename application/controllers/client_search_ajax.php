<?php

class Client_search_ajax extends MY_Controller
{
	public function get()
	{
		$search = $this->input->post('search_data');
		$this->load->model('client_search_ajax_model');
		$query = $this->client_search_ajax_model->get($search);
		
		if (!empty($query))
	     {
	          foreach ($query as $row):
	               echo "<option>" . $row->name . " (" . $row->phone . ") </option>";
	          endforeach;
	     }
	     else
	     {
	           echo "<li> <em> Not found ... </em> </li>";
	     }
	}
}

?>