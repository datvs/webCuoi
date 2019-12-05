<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khoa_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('khoa');
		return $data->result_array();
	}

	function add($khoa_add)
	{
		return $this->db->insert('khoa', $khoa_add);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('khoa');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('khoa');
		return $data->result_array();
	}

	function update($khoa_sua)
	{
		$this->db->where('id', $khoa_sua['id']);
		return $this->db->update('khoa', $khoa_sua);
	}




}

/* End of file Khoa_model.php */
/* Location: ./application/models/Khoa_model.php */