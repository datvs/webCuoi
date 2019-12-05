<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HeDaoTao_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('hedaotao');
		return $data->result_array();
	}

	function add($object)
	{
		return $this->db->insert('hedaotao',$object);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('hedaotao');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('hedaotao');
		return $data->result_array();
	}

	function update($data_suahedaotao)
	{
		$this->db->where('id', $data_suahedaotao['id']);
		return $this->db->update('hedaotao', $data_suahedaotao);
	}

}

/* End of file HeDaoTao_model.php */
/* Location: ./application/models/HeDaoTao_model.php */