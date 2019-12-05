<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Khoa_model');
		$this->load->model('Khoahoc_model');
		$this->load->model('HeDaoTao_model');
		$this->load->model('Lop_model');
	}

	public function index()
	{
		$data = $this->Lop_model->getAll();
		$data['data_lop'] = $data;

		$data1 = $this->Khoa_model->getAll();
		$data['data_khoa'] = $data1;

		$data2 = $this->Khoahoc_model->getAll();
		$data['data_khoahoc'] = $data2;

		$data3 = $this->HeDaoTao_model->getAll();
		$data['data_hedaotao'] = $data3;

		$this->load->view('lop/malop_view', $data, $data1, $data2, $data3);
	}

	function add()
	{
		$object = $this->input->post();
		if ($this->Lop_model->add($object)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Thành Công")';
			echo '</script>';
			redirect('Lop','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Không Thành Công")';
			echo '</script>';
			redirect('Lop','refresh');
		}
	}

	function delete($id)
	{
		if ($this->Lop_model->delete($id)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Thành Công")';
			echo '</script>';
			redirect('Lop','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Không Thành Công")';
			echo '</script>';
			redirect('Lop','refresh');
		}
	}

	function laydulieu($id)
	{
		$data = $this->Lop_model->laydulieu($id);
		$data['data_sualop'] = $data ;

		$data1 = $this->Khoa_model->getAll();
		$data['data_khoa'] = $data1;

		$data2 = $this->Khoahoc_model->getAll();
		$data['data_khoahoc'] = $data2;

		$data3 = $this->HeDaoTao_model->getAll();
		$data['data_hedaotao'] = $data3;

		$this->load->view('Lop/sualop_view', $data, $data1, $data2, $data3);	
	}

	function update()
	{
		$data = $this->input->post();
		if ($this->Lop_model->update($data)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('Lop','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Không Thành Công")';
			echo '</script>';
			redirect('Lop','refresh');
		}
	}

	function search()
	{
		$data = $this->Lop_model->getAll();
		$data['data_lop'] = $data;
		$this->load->view('Lop/search_view', $data);
	}


}

/* End of file Lop.php */
/* Location: ./application/controllers/Lop.php */