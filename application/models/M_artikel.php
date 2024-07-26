<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class m_artikel extends CI_Model{
	
	function get_artikel($where=""){
		$query = $this->db->query("SELECT * FROM artikel ".$where);
		return $query->result_array();
	}
	
	function read($slug){
		$this->db->order_by("id","desc");
		$this->db->where("slug",$slug);
		$query=$this->db->get("artikel");
		return $query->result_array();
	}
	function set_data($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	
	public function update_data($data, $id, $table)
	{
	   $this->db->where('id', $id);
	   $this->db->update($table,$data); 
	}
}
?>