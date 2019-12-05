<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('admin/login_view.php');
	}

	public function logIn()
	{
		$this->load->view('admin/login_view.php');
	}

	function registerView()
	{
		$this->load->view('admin/register_view');
	}

	function register()
	{
		$data = $this->input->post();

		$this->form_validation->set_rules('username', 'Tên Tài Khoản', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Mật Khẩu', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('repassword', 'Nhập Lại Mật Khẩu', 'trim|required|min_length[5]|max_length[12]|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = $this->input->post();

			unset($data['repassword']);		

			if ($this->Admin_model->checkExitUserName($data['username'])) {
				$this->session->set_flashdata('userexist', 'Tài Khoản đã tồn tại!');
				$this->session->set_flashdata('emailexist', '');
				$this->load->view('admin/register_view');
			} else if($this->Admin_model->checkExitEmail($data['email'])) {
				$this->session->set_flashdata('emailexist', 'Email đã tồn tại!');
				$this->session->set_flashdata('userexist', '');
				$this->load->view('admin/register_view');
			}else{
				if ($this->Admin_model->insert($data)) {
					echo ('<script type="text/javascript">');
					echo 'alert("Thêm Mới Tài Khoản Thành Công")';
					echo '</script>';
					redirect('admin/logIn','refresh');
				} else {
					echo ('<script type="text/javascript">');
					echo 'alert("Thêm Mới Tài Khoản Không Thành Công")';
					echo '</script>';
					$this->load->view('admin/register_view');
				}
			}
			
		} else {
			# code...
			$this->load->view('admin/register_view');
		}
	}


	function checkLogin()
	{
		$this->form_validation->set_rules('username', 'Tài Khoản', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Mật Khẩu', 'trim|required|min_length[5]|max_length[12]');
		if ($this->form_validation->run() == TRUE) {
			# code...
			//Kiểm tra tài khoản có tồn tại trong csdl k?
			$data = $this->input->post();
			if ($this->Admin_model->checkLogin($data['username'], $data['password'])) {
				$array = array(
					'username' => $data['username'],
					'password' => $data['password'],
				);

				$this->session->set_userdata( $array );
				$this->load->view('admin/dashboard_view');
			}else{
				$this->session->set_flashdata('inval_username_password', 'Sai tài khoản hoặc mật khẩu');
				$this->load->view('admin/login_view');
			}
			
		} else {
			# code...
			$this->load->view('admin/login_view');
		}
	}

	function logOut()
	{
		$this->session->sess_destroy();
		$this->load->view('admin/login_view');	
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */