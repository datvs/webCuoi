<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khoahoc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('khoahoc');
		return $data->result_array();
	}

	function add($object)
	{
		return $this->db->insert('khoahoc', $object);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('khoahoc');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('khoahoc');
		return $data->result_array();
	}

	function update($data_suakhoahoc)
	{
		$this->db->where('id', $data_suakhoahoc['id']);
		return $this->db->update('khoahoc', $data_suakhoahoc);
	}



}

/* End of file Khoahoc_model.php */
/* Location: ./application/models/Khoahoc_model.php */