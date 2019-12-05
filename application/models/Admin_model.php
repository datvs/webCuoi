<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function insert($data)
	{
		return $this->db->insert('admin', $data);
	}

	function checkLogin($username , $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$data = $this->db->get('admin');
		$data = $data->result_array();
		if (empty($data)) {
			return false;
		}else{
			return true;
		}
	}

	function checkExitUserName($username)
	{
		$this->db->where('username', $username);
		$data = $this->db->get('admin');
		$data = $data->result_array();
		if (empty($data)) {
			return false;
		}else{
			return true;
		}
	}

	function checkExitEmail($email)
	{
		$this->db->where('email', $email);
		$data = $this->db->get('admin');
		$data = $data->result_array();
		if (empty($data)) {
			return false;
		}else{
			return true;
		}
	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */