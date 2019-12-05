<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lop_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('lop');
		return $data->result_array();
	}

	function add($object)
	{
		return $this->db->insert('lop', $object);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('lop');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('lop');	
		return $data->result_array();
	}

	function update($data_sualop)
	{
		$this->db->where('id', $data_sualop['id']);
		return $this->db->update('lop', $data_sualop);
	}

}

/* End of file Lop_model.php */
/* Location: ./application/models/Lop_model.php */