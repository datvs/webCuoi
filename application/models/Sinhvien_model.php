<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sinhvien_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('sinhvien');
		return $data->result_array();
	}

	function add($object)
	{
		return $this->db->insert('sinhvien', $object);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('sinhvien');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('sinhvien');	
		return $data->result_array();
	}

	function update($data_suasinhvien)
	{
		$this->db->where('id', $data_suasinhvien['id']);
		return $this->db->update('sinhvien', $data_suasinhvien);
	}

	// function checkMSV($masinhvien)
	// {
	// 	$this->db->where('masinhvien', $masinhvien);
	// 	$data = $this->db->get('sinhvien');
	// 	$data = $data->result_array();
	// 	if(empty($object)){
	// 		return false;
	// 	}else{
	// 		return true;
	// 	}
	// }

}

/* End of file Sinhvien_model.php */
/* Location: ./application/models/Sinhvien_model.php */