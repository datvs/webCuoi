<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Monhoc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('monhoc');
		$data = $data->result_array();
		return $data;
	}

	function add($object)
	{
		return $this->db->insert('monhoc', $object);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('monhoc');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('monhoc');
		return $data->result_array();
	}

	function update($data_suamonhoc)
	{
		$this->db->where('id', $data_suamonhoc['id']);
		return $this->db->update('monhoc', $data_suamonhoc);
	}

	function search($search_auto)
	{
		$this->db->like('tenmonhoc', $search_auto, 'BOTH');
		$data = $this->db->get('monhoc');
		return $data->result_array();
	}

	function search1($search_auto1)
	{
		$this->db->like('mamonhoc', $search_auto1, 'BOTH');
		$data = $this->db->get('monhoc');
		return $data->result_array();
	}

}

/* End of file Monhoc_model.php */
/* Location: ./application/models/Monhoc_model.php */