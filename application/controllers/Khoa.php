<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khoa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Khoa_model');
	}

	public function index()
	{
		$khoa = $this->Khoa_model->getAll();
		$data['data_khoa'] = $khoa;
		$this->load->view('Khoa/khoa_view', $data);
	}

	function add()
	{
		$khoa_add = $this->input->post();
		if ($this->Khoa_model->add($khoa_add)) {
			echo '<script type="text/javascript">';
			echo 'alert("Thêm Thành Công")';
			echo '</script>';
			redirect('Khoa','refresh');
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("Thêm Không Thành Công")';
			echo '</script>';
			redirect('Khoa','refresh');
		}	
	}

	function delete($id)
	{
		if ($this->Khoa_model->delete($id)) {
			echo '<script type="text/javascript">';
			echo 'alert("Xóa Thành Công")';
			echo '</script>';
			redirect('Khoa','refresh');
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("Xóa Không Thành Công")';
			echo '</script>';
			redirect('Khoa','refresh');
		}
	}

	function laydulieu($id)
	{
		$data = $this->Khoa_model->laydulieu($id);
		$data['khoa_sua'] = $data; 
		$this->load->view('Khoa/suakhoa_view', $data);	
	}

	function update()
	{
		$data_update = $this->input->post();	
		if ($this->Khoa_model->update($data_update)) {
			echo '<script type="text/javascript">';
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('Khoa','refresh');
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("Sửa Không Thành Công")';
			echo '</script>';
			redirect('Khoa','refresh');
		}
	}

	function search()
	{
		$data = $this->Khoa_model->getAll();
		$data['data_khoa'] = $data;
		$this->load->view('khoa/search_view', $data);
	}


}

/* End of file Khoa.php */
/* Location: ./application/controllers/Khoa.php */