<?php
class manufacture_dashboard extends MY_Controller{

	public function view()
	{
		$this->load->view('header');

		$this->load->model('manufacture/Manufacture_model');
		$data['manufacture'] = $this->Manufacture_model->view();
		$this->load->view('manufacture/view',$data);
		
		$this->load->view('footer');
	}
	public function add()
	{
		$this->load->view('header');

		$this->load->view('manufacture/add');
		
		$this->load->view('footer');
	}
	public function save()
	{

		$data = $this->input->post(); 
		unset($data['submit']);
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name','required|trim');
		$this->form_validation->set_rules('email','email','required|valid_email|trim');
		$this->form_validation->set_rules('phone','phone','required|numeric|trim');
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			$this->load->model('manufacture/Manufacture_model');
			$res = $this->Manufacture_model->save($data);
			if($res)
			{
				$this->view();
			}
		}
	}
	public function edit($id)
	{
		$this->load->view('header');
		$this->load->model('manufacture/Manufacture_model');
		$data['manufacture'] = $this->Manufacture_model->edit($id);
		$this->load->view('manufacture/edit',$data);
		
		
		$this->load->view('footer');
	}
	public function update()
	{
		$data = $this->input->post();
		unset($data['submit']);
		
		$id = $data['fid'];
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name','required|trim');
		$this->form_validation->set_rules('email','email','required|valid_email|trim');
		$this->form_validation->set_rules('phone','phone','required|numeric|trim');
		if($this->form_validation->run() == FALSE)
		{
			$this->edit($id);
		}
		else
		{
			$this->load->model('manufacture/Manufacture_model');
			$res = $this->Manufacture_model->update($data);
			if($res)
			{
				$this->view();
			}
		}
		

	}
	public function delete($manufacturer_id)
	{
		$this->load->model('manufacture/Manufacture_model');
		$res = $this->Manufacture_model->delete($manufacturer_id);
		if($res)
		{
			$this->view();
		}
	}
}


