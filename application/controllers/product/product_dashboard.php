<?php
class Product_dashboard extends MY_Controller{
	public function index()
	{
		$this->load->view('header');
		$this->load->model('product/Product','category');
		$category['result']=$this->category->category_list();
		$this->load->view('product/add_product',$category);
		$this->load->view('footer');

	}

	public function add_product()
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('add_product_rules'))
		{
          echo "yess";
		}
		else{
		$this->load->view('header');
		$this->load->model('product/Product','category');
		$category['result']=$this->category->category_list();
		$this->load->view('product/add_product',$category);
		$this->load->view('footer');
		}

	}

	public function ajax_state_list($id)
	{

    $this->load->helper('url');
    $this->load->model('product/Product','category');
    $data = $this->category->getstate($id);
   	echo "<option>Select Sub Category</option>";
      foreach($data as $row)
      {
      echo"<option value='".$row['sub_category']."'>".$row['sub_category']."</option>";  
      }

	}

	public function ajax_brand_list($id)
	{
		
    $this->load->helper('url');
    $this->load->model('product/Product','category');
    $brand = $this->category->category_brand($id);
   	echo "<option>Select Brand</option>";
      foreach($brand as $list)
      {
      echo"<option value='".$list['brand']."'>".$list['brand']."</option>";  
      }

	}

	public function ajax_cat_size($id)
	{
		
    $this->load->helper('url');
    $this->load->model('product/Product','category');
    $size = $this->category->category_size($id);
   	echo "<option>Select Category Size</option>";
      foreach($size as $s_list)
      {
      echo"<option value='".$s_list['category_size']."'>".$s_list['category_size']."</option>";  
      }

	}

	public function ajax_cat_color($id)
	{
		
    $this->load->helper('url');
    $this->load->model('product/Product','category');
    $color = $this->category->category_color($id);
   	echo "<option>Select Category Color</option>";
      foreach($color as $c_list)
      {
      echo"<option value='".$c_list['category_id']."'>".$c_list['category_color']."</option>";  
      }

	}
	

}