<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diem_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('diem');
		$data = $data->result_array();
		return $data ;
	}

	function add($object)
	{
		return $this->db->insert('diem', $object);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('diem');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('diem');
		return $data->result_array();
	}

	function update($data_suadiem)
	{
		$this->db->where('id', $data_suadiem['id']);
		return $this->db->update('diem', $data_suadiem);
	}

	function search($search_auto)
	{
		$this->db->like('masinhvien', $search_auto, 'BOTH');
		$data = $this->db->get('Diem');
		return $data->result_array();
	}


}

/* End of file Diem_model.php */
/* Location: ./application/models/Diem_model.php */