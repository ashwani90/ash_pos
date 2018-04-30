<?php
class Category_dashboard extends MY_Controller{
	function __construct(){
		 parent::__construct();
		$this->load->model("category/category_model");
		$this->load->library('form_validation');
	}

	public function viewCategory()
	{
		$this->load->view('header');
		//$this->load->model("category/category_model");
		$data['category'] = $this->category_model->getCategory();
		//var_dump($data);

		$this->load->view('category/view',$data);
		$this->load->view('footer');
		//$this->load->view('category/view');
		
	}

	public function addCategory(){
		$this->load->view('header');
		$this->load->view('category/add_category');
		$this->load->view('footer');
	}


	public function saveCategory()
	{
		$data['category']= $this->input->post();
		$this->form_validation->set_rules('category_name', 'Category Name', 'required|trim');
		$this->form_validation->set_rules('sub_category', 'Sub Category', 'required|trim');
		$this->form_validation->set_rules('brand', 'Brand', 'required|trim');
		$this->form_validation->set_rules('category_size', 'Category Size', 'required|trim');
		$this->form_validation->set_rules('category_color', 'Category Color', 'required|trim');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('category/add_category',$data);
			$this->load->view('footer');
		}
		else
		{
		    $store_id = $this->session->userdata('store_id'); 
		    $this->load->model("category/category_model");
			$category_name=$this->input->post('category_name');
			$sub_category=$this->input->post('sub_category');
			$brand=$this->input->post('brand');
			$category_size=$this->input->post('category_size');
			$category_color=$this->input->post('category_color');
			$category_description=$this->input->post('category_description');
			
			$data=array(
						'category_name'=>$category_name,
						'sub_category'=>$sub_category,
						'brand'=>$brand,
						'category_size'=>$category_size,
						'category_color'=>$category_color,
						'category_description'=>$category_description,
						'store_id'=>$store_id
					);
				
				$id = $this->category_model->saveCategory($data);
				if($id)
				{
					$data['msg']="<p style=\"color:#009968\">Category Add Successfully</p>";
					$data['category'] = $this->category_model->getCategory();
					$this->load->view('header');
			  		$this->load->view('category/view',$data);
			  		$this->load->view('footer');
				}
				else
				{
					$data['msg']="<p style=\"color:	#FF0000\">Category Not Add Successfully</p>";
					$this->load->view('header');
			    	$this->load->view('category/add_category',$data);
			    	$this->load->view('footer');
				}
			}
	}

	public function editCategory($id){
		$data['category'] = $this->category_model->getCategory($id);
		$this->load->view('header');
		$this->load->view('category/edit',$data);
		$this->load->view('footer');
	}

	public function updateCategory()
	{
		$data['category']= $this->input->post();
		$this->form_validation->set_rules('category_name', 'Category Name', 'required|trim');
		$this->form_validation->set_rules('sub_category', 'Sub Category', 'required|trim');
		$this->form_validation->set_rules('brand', 'Brand', 'required|trim');
		$this->form_validation->set_rules('category_size', 'Category Size', 'required|trim');
		$this->form_validation->set_rules('category_color', 'Category Color', 'required|trim');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('category/edit',$data);
			$this->load->view('footer');
		}
		else
		{
		    $store_id = $this->session->userdata('store_id'); 
		    $this->load->model("category/category_model");
			$category_name=$this->input->post('category_name');
			$sub_category=$this->input->post('sub_category');
			$brand=$this->input->post('brand');
			$category_size=$this->input->post('category_size');
			$category_color=$this->input->post('category_color');
			$category_description=$this->input->post('category_description');
			$category_id= $this->input->post('category_id');
			$data=array(						
						'category_name'=>$category_name,
						'sub_category'=>$sub_category,
						'brand'=>$brand,
						'category_size'=>$category_size,
						'category_color'=>$category_color,
						'category_description'=>$category_description,
						'store_id'=>$store_id
					);
				
			$id = $this->category_model->updateCategory($data,$category_id
			);
			if($id)
			{
				$data['msg']="<p style=\"color:#009968\">Category Updated Successfully</p>";
				$data['category'] = $this->category_model->getCategory();
				$this->load->view('header');
		  		$this->load->view('category/view',$data);
		  		$this->load->view('footer');
			}
			else
			{
				$data['msg']="<p style=\"color:	#FF0000\">Category Not Add Successfully</p>";
				$this->load->view('header');
		    	$this->load->view('category/edit',$data);
		    	$this->load->view('footer');
			}
		}		
	}

	public function deleteCategory($id){
		if($this->category_model->deleteCategory($id)){
			$data['msg']="<p style=\"color:#009968\">Category Deleted Successfully</p>";
			$data['category'] = $this->category_model->getCategory();
			$this->load->view('header');
	  		$this->load->view('category/view',$data);
	  		$this->load->view('footer');
		}
	}


	
}