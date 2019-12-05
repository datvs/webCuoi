<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HeDaoTao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('HeDaoTao_model');
	}

	public function index()
	{
		$data = $this->HeDaoTao_model->getAll();
		$data['data_hedaotao'] = $data;
		$this->load->view('Hedaotao/hedaotao_view', $data);	
	}

	function add()
	{
		$object = $this->input->post();	
		if ($this->HeDaoTao_model->add($object)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Thành Công")';
			echo ('</script>');
			redirect('HeDaoTao','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Thêm Không Thành Công")';
			echo ('</script>');
			redirect('HeDaoTao','refresh');
		}
	}

	function delete($id)
	{
		if ($this->HeDaoTao_model->delete($id)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Thành Công")';
			echo ('</script>');
			redirect('HeDaoTao','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Xóa Không Thành Công")';
			echo ('</script>');
			redirect('HeDaoTao','refresh');
		}
	}

	function laydulieu($id)
	{
		$data = $this->HeDaoTao_model->laydulieu($id);
		$data['data_suahedaotao'] = $data;
		$this->load->view('Hedaotao/suahedaotao_view', $data);
	}

	function update()
	{
		$data = $this->input->post();
		if ($this->HeDaoTao_model->update($data)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Thành Công")';
			echo ('</script>');
			redirect('HeDaoTao','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Sửa Không Thành Công")';
			echo ('</script>');
			redirect('HeDaoTao','refresh');
		}
		
	}

	function search()
	{
		$data = $this->HeDaoTao_model->getAll();
		$data['data_hedaotao'] = $data;
		$this->load->view('Hedaotao/search_view', $data);
	}



}

/* End of file HeDaoTao.php */
/* Location: ./application/controllers/HeDaoTao.php */