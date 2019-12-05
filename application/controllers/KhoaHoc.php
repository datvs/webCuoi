<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KhoaHoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Khoahoc_model');
	}

	public function index()
	{
		$data = $this->Khoahoc_model->getAll();
		$data['data_khoahoc'] = $data ;
		$this->load->view('Khoahoc/khoahoc_view', $data);
	}

	function add()
	{
		$object = $this->input->post();
		if ($this->Khoahoc_model->add($object)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Thành Công")';
			echo '</script>';
			redirect('Khoahoc','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Không Thành Công")';
			echo '</script>';
		}
	}

	function delete($id)
	{
		if ($this->Khoahoc_model->delete($id)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Thành Công")';
			echo '</script>';
			redirect('Khoahoc','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Không Thành Công")';
			echo '</script>';
			redirect('Khoahoc','refresh');
		}
	}

	function laydulieu($id)
	{
		$data = $this->Khoahoc_model->laydulieu($id);
		$data['data_suakhoahoc'] = $data;
		$this->load->view('Khoahoc/suakhoahoc_view', $data);
	}

	function update()
	{
		$data = $this->input->post();	
		if ($this->Khoahoc_model->update($data)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('Khoahoc','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Không Thành Công")';
			echo '</script>';
			redirect('Khoahoc','refresh');
		}
	}

	function search()
	{
		$data = $this->Khoahoc_model->getAll();
		$data['data_khoahoc'] = $data;
		$this->load->view('Khoahoc/search_view', $data);
	}

}

/* End of file Khoahoc.php */
/* Location: ./application/controllers/Khoahoc.php */