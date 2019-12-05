<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diem extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Diem_model');
		$this->load->model('Monhoc_model');
		$this->load->model('SinhVien_model');
	}

	public function index()
	{
		$diem = $this->Diem_model->getAll();
		$monhoc = $this->Monhoc_model->getAll();
		$sinhvien = $this->SinhVien_model->getAll();

		$data['data_mamonhoc'] = $monhoc;
		$data['data_diem'] = $diem;
		$data['data_sinhvien'] = $sinhvien;

		$this->load->view('Diem/diem1_view', $data);
	}

	function add()
	{
		$object = $this->input->post();
		if ($this->Diem_model->add($object)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Thành Công")';
			echo '</script>';
			redirect('Diem','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Không Thành Công")';
			echo '</script>';
			redirect('Diem','refresh');
		}
	}

	function delete($id)
	{
		echo ($id);
		if ($this->Diem_model->delete($id)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Thành Công")';
			echo '</script>';
			redirect('Diem','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Thành Công")';
			echo '</script>';
			redirect('Diem','refresh');
		}
	}

	function laydulieu($id)
	{
		$data = $this->Diem_model->laydulieu($id);
		$data['data_suadiem'] = $data;

		$monhoc = $this->Monhoc_model->getAll();
		$data['data_mamonhoc'] = $monhoc;

		$sinhvien = $this->SinhVien_model->getAll();
		$data['data_sinhvien'] = $sinhvien;

		$this->load->view('Diem/suadiem_view', $data);
	}

	function sua()
	{
		$data = $this->input->post();
		if ($this->Diem_model->update($data)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('Diem','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('Diem','refresh');
		}
	}

	function search()
	{
		$data = $this->Diem_model->getAll();
		$data['data_diem'] = $data;
		$this->load->view('diem/search_view', $data);
	}

}

/* End of file Diem.php */
/* Location: ./application/controllers/Diem.php */