<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MonHoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Monhoc_model');
		$this->load->model('Diem_model');
	}

	public function index()
	{
		$monhoc = $this->Monhoc_model->getAll();
		$data['data_monhoc'] = $monhoc;
		$this->load->view('monhoc/monhoc_view', $data);
	}

	function add()
	{
		$object = $this->input->post();
		if ($this->Monhoc_model->add($object)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Thành Công")';
			echo ('</script>');
			redirect('monhoc','refresh');
		}
		else{
			echo ('<script type="text/javascipt">');
			echo 'alert("Thêm Thất Bại")';
			echo ('</script>');
		}
	}

	function delete($id)
	{
		// echo ($id);
		if ($this->Monhoc_model->delete($id)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa thành công")';
			echo '</script>';
			redirect('Monhoc','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa không thành công")';
			echo '</script>';
			redirect('Monhoc','refresh');
		}
						
	}

	function laydulieu($id)
	{
		$data = $this->Monhoc_model->laydulieu($id);
		$data['data_suamonhoc'] = $data;
		$this->load->view('monhoc/suamonhoc_view', $data);
	}

	function sua()
	{
		$data = $this->input->post();
		if ($this->Monhoc_model->update($data)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('Monhoc','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo '</script>';
			redirect('Monhoc','refresh');
		}
	}

	// function search()
	// {
	// 	$search = $this->input->post('search_auto'); 

	// 	$data['data_search'] = $this->Monhoc_model->search($search);

	// 	$data['data_key'] = $search;

	// 	$this->load->view('monhoc/search', $data);
	
	// }

	function search()
	{
		$data = $this->Monhoc_model->getAll();
		$data['data_monhoc'] = $data;
		$this->load->view('monhoc/search', $data);
	}

}

/* End of file Monhoc.php */
/* Location: ./application/controllers/Monhoc.php */