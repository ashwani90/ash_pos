<?php
class Category_dashboard extends MY_Controller{
	public function index()
	{
		
		$this->load->view('add_category');
		
	}
	public function category_add()
	{
		
		$this->load->view('category/add_category');
		
	}
}